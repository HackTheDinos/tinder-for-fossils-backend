<?php namespace HackTheDinos\Repositories\Pdo;

use HackTheDinos\Models;
use HackTheDinos\Repositories\Interfaces;
use HackTheDinos\Services;

class Pictures implements Interfaces\Pictures
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
     * Constructor.
     * @param \PDO $pdo
     * @param Services\Converter $converter
     */
    public function __construct(\PDO $pdo, Services\Converter $converter)
    {
        $this->pdo = $pdo;
        $this->converter = $converter;
    }

    public function getById($id)
    {
        $pictures = $this->getAll(['id' => $id], 1);
        return empty($pictures) ? null : $pictures[0];
    }

    public function getAll(array $filters = [], $count = 10, $start = 0)
    {
        $temp = new Models\Picture();

        //This along with pdo prepared statements should prevent a sql injection attack
        $columns = $this->converter->filterArrayToSqlColumns($filters, $temp);
        $whereClause = empty($columns) ? '' : 'WHERE '.implode('=? AND ', array_keys($columns)).'=?';
        $query = $this->pdo->prepare("SELECT * FROM pictures {$whereClause} LIMIT {$start}, {$count}");
        $entities = $query->execute(array_values($columns)) ? $query->fetchAll(\PDO::FETCH_ASSOC) : [];

        return $this->converter->entityArraysToModels($entities, $temp);
    }

    public function save(Models\Picture &$picture)
    {
        $modelArray = $this->converter->modelToEntityArray($picture);

        //Prevent someone from setting a different ID for a preexisting entry.
        if (isset($modelArray['id'])) {
            unset($modelArray['id']);
        }

        //Set the updated_at value in the database
        $modelArray['updated_at'] = date('Y-m-d G:i:s');

        $keys = array_keys($modelArray);
        $vals = array_values($modelArray);

        if (isset($picture->id)) {
            $query = $this->pdo->prepare('UPDATE pictures SET '.implode('=?, ', $keys).'=? WHERE id=? LIMIT 1');
            $vals[] = $picture->id;
            return $query->execute($vals);
        } else {
            $query = $this->pdo->prepare('INSERT INTO pictures ('.implode(',', $keys).') VALUES ('.implode(',', array_fill(0, count($vals), '?')).')');
            if ($query->execute($vals)) {
                //Refetch to populate everything properly.
                $refetched = $this->getAll(['id' => $this->pdo->lastInsertId()], 1);
                $picture = $refetched[0];
                return true;
            }
        }
        return false;
    }
}
