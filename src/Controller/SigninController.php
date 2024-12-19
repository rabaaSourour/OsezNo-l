<?php

namespace App\Controller;

use App\Model\Signin;
use PDO;

class SigninController
{
    private $signinModel;

    public function __construct(PDO $pdo)
    {
        $this->signinModel = new Signin($pdo);
    }

    public function login()
    {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
            $passWord = $_POST['password'] ?? null;

            if ($name && $passWord) {
                $user = $this->signinModel->login($name);

                if ($user && password_verify($passWord, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['name'] = $user['name'];
                    header('Location: /');
                    exit;
        
                } else {
                    echo 'Email ou mot de passe incorrect';
                }
            }
        }

        require_once __DIR__ . '/../View/signin.php';
    }

    public function logout()
    {
        $this->signinModel->logout();
        header('Location: /signin');
    exit();
    }
}
