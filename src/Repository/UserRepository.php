<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 24/12/2017
 * Time: 19:22
 */

namespace Application\Repository;


class UserRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll() : UserCollection
    {
        $result = $this->pdo->query('SELECT id, name FROM users');
        $users = [];
        while ($user = $result->fetch()){
            $users[] = new User($user['name']);
        }

        return new UserCollection(...$users);
    }

    public function get(string $name): User
    {
        $statement = $this->pdo->prepare('SELECT id,name FROM users WHERE name = :name');
        $statement->execute([':name' => $name]);
        $user = $statement->fetch();

        if (!$user){
            throw new UserNotFoundException();
        }

        return new User($user['name']);
    }
}