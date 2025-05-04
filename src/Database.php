<?php

class Database
{
    private string $host = "127.0.0.1";
    private string $name = "election";
    private string $user = "root";
    private string $password = "";

    public function getConnection(): PDO
    {
        $dns = "mysql:host={$this->host};dbname={$this->name}";
        return new PDO($dns, $this->user, $this->password);
    }
}
