<?php namespace HackTheDinos\Repositories\Pdo;

use HackTheDinos\Models;
use HackTheDinos\Repositories\Interfaces;
use HackTheDinos\Services;

class Users implements Interfaces\Users
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
     * Users constructor.
     * @param \PDO $pdo
     * @param Services\Converter $converter
     */
    public function __construct(\PDO $pdo, Services\Converter $converter)
    {
        $this->pdo = $pdo;
        $this->converter = $converter;
    }

    public function getByEmailAndPassword($email, $password)
    {
        $users = $this->getAll(['email' => $email], 1);
        if (empty($users)) {
            return null;
        }

        return password_verify($password, $users[0]->password) ? $users[0] : null;
    }

    public function getById($userId)
    {
        $users = $this->getAll(['id' => $userId], 1);
        return empty($users) ? null : $users[0];
    }

    public function getAll(array $filters = [], $count = 10, $start = 0)
    {
        $temp = new Models\User();

        //This along with pdo prepared statements should prevent a sql injection attack
        $columns = $this->converter->filterArrayToSqlColumns($filters, $temp);
        $whereClause = empty($columns) ? '' : 'WHERE '.implode('=? AND ', array_keys($columns)).'=?';
        $query = $this->pdo->prepare("SELECT * FROM users {$whereClause} LIMIT {$start}, {$count}");
        $entities = $query->execute(array_values($columns)) ? $query->fetchAll(\PDO::FETCH_ASSOC) : [];

        return $this->converter->entityArraysToModels($entities, $temp);
    }

    public function save(Models\User &$user)
    {
        $modelArray = $this->converter->modelToEntityArray($user);

        //Prevent someone from setting a different ID for a preexisting entry.
        if (isset($modelArray['id'])) {
            unset($modelArray['id']);
        }

        $keys = array_keys($modelArray);
        $vals = array_values($modelArray);

        if (isset($user->id)) {
            $query = $this->pdo->prepare('UPDATE users SET '.implode('=?, ', $keys).'=? WHERE id=? LIMIT 1');
            $vals[] = $user->id;
            return $query->execute($vals);
        } else {
            $query = $this->pdo->prepare('INSERT INTO users ('.implode(',', $keys).') VALUES ('.implode(',', array_fill(0, count($vals), '?')).')');
            if ($query->execute($vals)) {
                //Refetch to populate everything properly.
                $refetched = $this->getAll(['id' => $this->pdo->lastInsertId()], 1);
                $user = $refetched[0];
                return true;
            }
        }
        return false;
    }
}
