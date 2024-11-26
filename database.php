<?php

/**
 * @var array $config
 */

class DB {
    private PDO $db;

    public function __construct($config) {

        $connectionString = $config['driver']. ":" .$config['database'];
        $this->db = new PDO($connectionString);
    }

    public function query($query, $class = null, $params = []): false|PDOStatement
    {
        $prepare = $this->db->prepare($query);

        if ($class)
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);

        $prepare->execute($params);

        return $prepare;
    }
}

$DB = new DB($config['database']['sqlite']);