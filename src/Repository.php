<?php
class Repository
{
    public function getAll(): array
    {
        $database = new Database;
        $pdo = $database->getConnection();
        $stmt = $pdo->query("SELECT * FROM voters");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
