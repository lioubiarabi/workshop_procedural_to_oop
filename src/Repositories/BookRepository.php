<?php
require '../Services/BookRepository.php';

class BookRepository
{
    private PDO $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = Database::connect();
    }
}
