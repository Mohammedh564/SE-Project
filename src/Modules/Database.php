<?php

class Database
{
    private string $connectionString;
    private bool $connected = false;
    private static ?Database $instance = null;

    private function __construct(string $connectionString)
    {
        $this->connectionString = $connectionString;
    }

    public static function getInstance(string $connectionString = ''): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database($connectionString);
        }
        return self::$instance;
    }

    public function connect(): void
    {
        // TODO: open database connection using $this->connectionString
        $this->connected = true;
    }

    public function disconnect(): void
    {
        // TODO: close connection
        $this->connected = false;
    }

    public function executeQuery(string $query): array
    {
        // TODO: run query and return result set
        return [];
    }

    public function insert(object $object): bool
    {
        // TODO
        return false;
    }

    public function update(object $object): bool
    {
        // TODO
        return false;
    }

    public function delete(object $object): bool
    {
        // TODO
        return false;
    }
}
