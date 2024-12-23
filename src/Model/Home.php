<?php

namespace App\Model;

use PDO;
use Exception;

class Home
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllCalendars()
    {
        $stmt = $this->pdo->query("SELECT * FROM calendars");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createCalendar(string $title, string $theme, string $color, string $bgImage): bool
    {
            $stmt = $this->pdo->prepare("INSERT INTO calendars (title, theme, color, bg_image) VALUES (:title, :theme, :color, :bg_image)");
            $stmt->execute(['title' => $title, 'theme' => $theme, 'color' => $color, 'bg_image' => $bgImage]);
            $lastHabitatId = $this->pdo->lastInsertId();
            return $lastHabitatId;
    }

    public function updateCalendar(int $id, string $title, string $theme, string $color, string $bgImage = null)
    {
        try {

            $fields = [
                'title = :title',
                'theme = :theme',
                'color = :color',
                'bg_image = :bgImage'
            ];

            if ($bgImage !== null) {
                $fields[] = 'image = :imagePath';
            }

            $sql = 'UPDATE calendars SET ' . implode(', ', $fields) . ' WHERE id = :id';

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':theme', $theme);
            $stmt->bindParam(':color', $color);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            if ($bgImage !== null) {
                $stmt->bindParam(':bg_image', $bgImage);
            }

            return $stmt->execute();
        } catch (Exception $e) {
            echo "Erreur lors de la mise à jour du calendrier : " . $e->getMessage();
            return false;
        }
    }

    public function getCalendar(int $id): ?array 
    {
        $stmt = $this->pdo->prepare("SELECT * FROM calendars WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function getUserCalendars($userId)
{
    $stmt = $this->pdo->prepare("SELECT * FROM calendars WHERE user_id = ?");
    $stmt->execute([$userId]);
    return $stmt->fetchAll();
}

    public function deleteCalendar(int $id)
    {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM calendars WHERE id = :id");
            return $stmt->execute(['id' => $id]);
        } catch (Exception $e) {
            echo "Erreur lors de la suppression de l'habitat : " . $e->getMessage();
            return false;
        }
    }
}
