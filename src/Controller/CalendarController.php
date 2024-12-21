<?php

namespace App\Controller;

use App\Model\Calendar;
use App\Model\Surprise;
use PDO;

class CalendarController 
{
    private $calendarModel;
    private $surpriseModel;

    public function __construct(PDO $pdo) 
    {
        $this->calendarModel = new Calendar($pdo);
        $this->surpriseModel = new Surprise();
    }

    public function show() 
    {
        $calendarDays = $this->calendarModel->getCalendarDays();
        $currentDay = (int)date('j');

        include __DIR__ . '/../view/calendar.php';
    }

    public function getAllDays() {
        $days = $this->calendarModel->getDays();
        echo json_encode($days);
    }

    public function unlockDay() {
        $day = (int)$_POST['day'];
        $currentDay = (int)date('j');

        if ($day <= $currentDay) {
            $this->calendarModel->unlockDay($day);
            echo json_encode([
                "success" => true,
                "message" => "Jour $day débloqué !"
            ]);
        } else {
            echo json_encode([
                "success" => false,
                "message" => "Jour $day encore verrouillé."
            ]);
        }
    }

    public function getQuoteForDay($day)
    {
        $quote = $this->calendarModel->getContentForDay($day);
        echo json_encode(['quote' => $quote]);
    }

    public function getQuotes() {
        $quotesFile = __DIR__ . '/../../public/assets/json/quotes.json';
        if (file_exists($quotesFile)) {
            $quotes = json_decode(file_get_contents($quotesFile), true);
            header('Content-Type: application/json');
            echo json_encode($quotes);
        } else {
            http_response_code(404);
            echo json_encode(["error" => "Le fichier de citations est introuvable."]);
        }
    }

    public function getSurpriseForDay($day)
    {
        $surprise = $this->surpriseModel->getSurpriseForDay((int)$day);
        if ($surprise) {
            echo json_encode($surprise);
        } else {
            http_response_code(404); // Retourne 404 si aucune surprise n'est trouvée
            echo json_encode(['error' => 'Aucune surprise trouvée pour ce jour.']);
        }
    }
}