<?php

namespace App\Controller;

use App\Model\Register;
use PDO;

class RegisterController
{
    private $registerModel;

    public function __construct(PDO $pdo)
    {
        $this->registerModel = new Register($pdo);
    }

    public function inscription()
    {
        $message = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $name = htmlspecialchars($_POST['name']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $passWord = $_POST['password'];

            if (!empty($name) && !empty($email) && !empty($passWord)) {
                $userId = $this->registerModel->register($name, $email, $passWord);
                if ($userId) {
                    $message = 'Inscription avec succès';
                } else {
                    $message = 'Erreur lors de l\'inscription';
                }
            } else {
                $message = 'Tous les champs doivent être remplis';
            }
        }
        require_once __DIR__ . '/../View/register.php';
    }


}