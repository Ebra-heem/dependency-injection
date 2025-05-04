<?php
class Repository
{
    public function __construct(private Database $database) {}

    public function getAll(): array
    {
        // $database = new Database;
        $pdo = $this->database->getConnection();
        $stmt = $pdo->query("SELECT * FROM voters");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
