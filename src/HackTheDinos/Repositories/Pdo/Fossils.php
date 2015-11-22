<?php namespace HackTheDinos\Repositories\Pdo;

use HackTheDinos\Models;
use HackTheDinos\Repositories\Interfaces;
use HackTheDinos\Services;

class Fossils implements Interfaces\Fossils
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
     * @var Interfaces\Pictures
     */
    private $pictureRepo;

    /**
     * Fossils constructor.
     * @param \PDO $pdo
     * @param Services\Converter $converter
     */
    public function __construct(\PDO $pdo, Services\Converter $converter, Interfaces\Pictures $pictureRepo)
    {
        $this->pdo = $pdo;
        $this->converter = $converter;
        $this->pictureRepo = $pictureRepo;
    }

    public function getById($fossilId)
    {
        $fossils = $this->getAll(['id' => $fossilId], 1);
        return empty($fossils) ? null : $fossils[0];
    }

    public function getAll(array $filters = [], $count = 10, $start = 0)
    {
        $temp = new Models\Fossil();

        //This along with pdo prepared statements should prevent a sql injection attack
        $columns = $this->converter->filterArrayToSqlColumns($filters, $temp);
        $whereClause = empty($columns) ? '' : 'WHERE '.implode('=? AND ', array_keys($columns)).'=?';
        $query = $this->pdo->prepare("SELECT * FROM fossil {$whereClause} LIMIT {$start}, {$count}");
        $entities = $query->execute(array_values($columns)) ? $query->fetchAll(\PDO::FETCH_ASSOC) : [];

        $models = $this->converter->entityArraysToModels($entities, $temp);

        foreach ($models as $model) {
            $pictures = $this->pictureRepo->getAll(['fossilId' => $model->id], 5);
            $model->pictures = $pictures;
        }

        return $models;
    }

    public function save(Models\Fossil &$fossil)
    {
        $modelArray = $this->converter->modelToEntityArray($fossil);

        //Prevent someone from setting a different ID for a preexisting entry.
        if (isset($modelArray['id'])) {
            unset($modelArray['id']);
        }

        $keys = array_keys($modelArray);
        $vals = array_values($modelArray);

        if (isset($fossil->id)) {
            $query = $this->pdo->prepare('UPDATE fossil SET '.implode('=?, ', $keys).'=? WHERE id=? LIMIT 1');
            $vals[] = $fossil->id;
            return $query->execute($vals);
        } else {
            $query = $this->pdo->prepare('INSERT INTO fossil ('.implode(',', $keys).') VALUES ('.implode(',', array_fill(0, count($vals), '?')).')');
            if ($query->execute($vals)) {
                //Refetch to populate everything properly.
                $refetched = $this->getAll(['id' => $this->pdo->lastInsertId()], 1);
                $fossil = $refetched[0];
                return true;
            }
        }
        return false;
    }
}
