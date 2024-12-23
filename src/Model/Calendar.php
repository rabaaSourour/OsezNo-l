<?php

namespace App\Model;

use PDO;

class Calendar
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getCalendarDays(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM calendar_days");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDays(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM calendar_days");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getContentForDay(int $day): ?string
    {
        $stmt = $this->pdo->prepare('SELECT message FROM calendar_days WHERE day = :day');
        $stmt->execute(['day' => $day]);
        return $stmt->fetchColumn();
    }

    public function unlockDay(int $day): void
    {
        $stmt = $this->pdo->prepare("UPDATE calendar_days SET is_unlocked = TRUE WHERE day = ?");
        $stmt->execute([$day]);
    }
}
