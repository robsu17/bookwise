<?php

class DB {
    private PDO $db;

    public function __construct($config)
    {
        $this->db = new PDO($this->getDsn($config));
    }

    public function query($query, $class = null, $params = []): false|PDOStatement
    {
        $prepare = $this->db->prepare($query);

        if ($class)
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);

        $prepare->execute($params);

        return $prepare;
    }

    private function getDsn($config): string
    {
        $driver = $config['driver'];
        unset($config['driver']);

        return match ($driver) {
            'sqlite' => $driver. ":" .$config['database'],
            default => $driver .':'. http_build_query($config, '', ';')
        };
    }
}

/*** @var array $config */
$DB = new DB($config['database']['mysql']);