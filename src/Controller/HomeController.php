<?php

namespace App\Controller;

use App\Model\Home;
use App\Services\FileUploader;
use PDO;

class HomeController
{
    private Home $homeModel;

    public function __construct(PDO $pdo)
    {
        $this->homeModel = new Home($pdo);
    }

    public function show(): void
    {
        $this->homeModel->getAllCalendars();
        require_once __DIR__ . '/../View/home.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $userId = $_SESSION['user_id'] ?? null;
            $title = $_POST['title'] ?? null;
            $theme = $_POST['theme'] ?? null;
            $color = $_POST['color'] ?? null;
            $bgImage = $_FILES['bg_image'] ?? null;

            if (!$title || !$theme || !$color || !$userId) {
                echo "Veuillez remplir tous les champs obligatoires.";
                return;
            }

            $uploadedImagePath = null;
            if ($bgImage && $bgImage['error'] === UPLOAD_ERR_OK) {
                try {
                    $uploadedImagePath = FileUploader::upload($bgImage);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                    return;
                }
            }
            $calendar = $this->homeModel->createCalendar($userId, $title, $theme, $color, $uploadedImagePath);

            header("Location: /");
            exit();
        }

        require_once __DIR__ . '/../View/create.php';
    }

    public function edit()
    {
        $id = (int)($_GET['id'] ?? 0);

        $calendar = $this->homeModel->getCalendar($id);

        if (!$calendar) {
            echo "calendrier non trouvé.";
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $theme = $_POST['theme'] ?? '';
            $color = $_POST['color'] ?? '';
            $bgImage = $_FILES['bg_image'] ?? null;

            $uploadedFilePath = $bgImage && !empty($bgImage['tmp_name']) && is_uploaded_file($bgImage['tmp_name'])
                ? FileUploader::upload($bgImage)
                : $calendar['bg_image'];
            $this->homeModel->updateCalendar($id, $title, $theme, $color, $bgImage);
            header("Location: /");
            exit();
        }
        require_once __DIR__ . '/../View/edite.php';
    }

    public function editCalendar()
    {
        session_start();
        $userId = $_SESSION['user_id'] ?? null;

        if (!$userId) {
            echo "Vous devez être connecté.";
            return;
        }

        $calendar = $this->homeModel->getUserCalendars($userId);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? $calendar['title'];
            $theme = $_POST['theme'] ?? $calendar['theme'];
            $color = $_POST['color'] ?? $calendar['color'];
            $bgImage = $_FILES['bg_image'] ?? null;

            if ($bgImage && $bgImage['error'] === UPLOAD_ERR_OK) {
                try {
                    $bgImage = FileUploader::upload($bgImage);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                    return;
                }
            } else {
                $bgImage = $calendar['bg_image'];
            }

            $this->homeModel->updateCalendar($calendar['id'], $title, $theme, $color, $bgImage);
        }

        require_once __DIR__ . '/../View/edite.php';
    }

    public function myCalendars()
    {
        session_start();
        $userId = $_SESSION['user_id'] ?? null;

        if (!$userId) {
            echo "Vous devez être connecté pour voir vos calendriers.";
            return;
        }

        $calendars = $this->homeModel->getUserCalendars($userId);

        require_once __DIR__ . '/../View/myCalendars.php';
    }

    public function viewCalendar()
    {
        session_start();
        $userId = $_SESSION['user_id'] ?? null;

        if (!$userId) {
            echo "Vous devez être connecté.";
            return;
        }

        $calendar = $this->homeModel->getUserCalendars($userId);

        require_once __DIR__ . '/../View/viewCalendar.php';
    }


    public function delete(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;

            if ($id) {
                $success = $this->homeModel->deleteCalendar((int) $id);

                if ($success) {
                    header("Location: /");
                    exit;
                } else {
                    echo "Erreur lors de la suppression du calendrier.";
                }
            }
        }
        $calendars = $this->homeModel->getAllCalendars();
        require_once __DIR__ . '/../View/delete.php';
    }

    public function share(): void
    {
        $calendar = $this->homeModel->getAllCalendars();
        require_once __DIR__ . '/../View/share.php';
    }
}
