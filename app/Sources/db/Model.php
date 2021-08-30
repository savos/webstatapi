<?php

namespace sources;

class Model
{
    private static $connection;

    protected string $tableName;


    protected function __construct($connectionString, $username, $password)
    {
        try {
            static::$connection = new \PDO($connectionString, $username, $password);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public static function getConnection($connectionString, $username, $password): self
    {
        if (self::$connection == null)
        {
            self::$connection = new Model($connectionString, $username, $password);
        }

        return self::$connection;
    }

}