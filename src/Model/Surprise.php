<?php

namespace App\Model;

use App\Database\MongoDbConnection;

class Surprise
{
    private $collection;

    public function __construct()
    {
        $mongo = new MongoDbConnection();
        $this->collection = $mongo->getCollection('surprises');
    }

    public function getSurpriseForDay(int $day): ?array
    {
        $result = $this->collection->findOne(['day' => $day]);
        return $result ? iterator_to_array($result) : null;
    }
    
}
