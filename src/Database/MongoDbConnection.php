<?php

namespace App\Database;

use MongoDB\Client;
use Exception;

class MongoDbConnection
{
    private $client;
    private $database;

    public function __construct()
    {
        $config = require '/xampp/htdocs/OsezNoel/src/Config.php';

        try {
            $this->client = new Client($config['URI']);
            $this->database = $this->client->selectDatabase('oseznoel');
        } catch (\Exception $e) {
            die("Erreur de connexion à MongoDB : " . $e->getMessage());
        }
    }

    public function getCollection()
    {
        return $this->database->selectCollection("surprises");
    }
}
