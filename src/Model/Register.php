<?php

namespace App\Model;

use PDO;
use Exception;

class Register
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function register(string $name, string $email, string $passWord)
    {
        try {
            $hashedPassword = password_hash($passWord, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("INSERT INTO Users (name, email, password) VALUES (:name, :email, :password)");
            return $stmt->execute(['name' =>$name, 'email' => $email, 'password' => $hashedPassword]);
            
            
        } catch (Exception $e) {
            echo "Erreur lors de l'inscription : " . $e->getMessage();
            return false;
        }
    }

}