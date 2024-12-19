<?php

namespace App\Model;

use PDO;

class Signin
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function login($name): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE name = :name");
        $stmt->bindValue(':name', $name);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function logout(){

    session_start();
    session_destroy();

    }

}