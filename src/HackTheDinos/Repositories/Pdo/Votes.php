<?php namespace HackTheDinos\Repositories\Pdo;

use HackTheDinos\Models;
use HackTheDinos\Repositories\Interfaces;
use HackTheDinos\Services;

class Votes implements Interfaces\Votes
{
    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * @var Services\Converter
     */
    private $converter;

    /**
     * Fossils constructor.
     * @param \PDO $pdo
     * @param Services\Converter $converter
     */
    public function __construct(\PDO $pdo, Services\Converter $converter)
    {
        $this->pdo = $pdo;
        $this->converter = $converter;
    }

    /**
     * @param array $filters
     * @param int $count
     * @param int $start
     * @return Models\Vote[]
     */
    public function getAll(array $filters = [], $count = 10, $start = 0)
    {
        $temp = new Models\Vote();

        //This along with pdo prepared statements should prevent a sql injection attack
        $columns = $this->converter->filterArrayToSqlColumns($filters, $temp);
        $whereClause = empty($columns) ? '' : 'WHERE '.implode('=? AND ', array_keys($columns)).'=?';
        $query = $this->pdo->prepare("SELECT * FROM vote {$whereClause} LIMIT {$start}, {$count}");
        $entities = $query->execute(array_values($columns)) ? $query->fetchAll(\PDO::FETCH_ASSOC) : [];

        return $this->converter->entityArraysToModels($entities, $temp);
    }

    /**
     * @param Models\Fossil $fossil
     * @return Models\Vote[]
     */
    public function getAllForFossil(Models\Fossil $fossil, $count = 10, $start = 0)
    {
        return $this->getAll(['fossilId' => $fossil->id], $count, $start);
    }

    /**
     * Creates or updates a vote.
     *
     * @param Models\Vote $vote
     * @return bool
     */
    public function save(Models\Vote &$vote)
    {
        $modelArray = $this->converter->modelToEntityArray($vote);

        //Prevent someone from setting a different ID for a preexisting entry.
        if (isset($modelArray['id'])) {
            unset($modelArray['id']);
        }

        $keys = array_keys($modelArray);
        $vals = array_values($modelArray);

        if (isset($vote->id)) {
            $query = $this->pdo->prepare('UPDATE vote SET '.implode('=?, ', $keys).'=? WHERE id=? LIMIT 1');
            $vals[] = $vote->id;
            return $query->execute($vals);
        } else {
            $query = $this->pdo->prepare('INSERT INTO vote ('.implode(',', $keys).') VALUES ('.implode(',', array_fill(0, count($vals), '?')).')');
            if ($query->execute($vals)) {
                //Refetch to populate everything properly.
                $refetched = $this->getAll(['id' => $this->pdo->lastInsertId()], 1);
                $vote = $refetched[0];
                return true;
            }
        }
        return false;
    }
}
