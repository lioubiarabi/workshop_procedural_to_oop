<?php

class BookRepository
{
    private PDO $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = Database::connect();
    }

    public function getBooks() {
        $result = [];
        $stmt = $this->pdo->prepare("SELECT * from books");
        $stmt->execute();
        forEach($stmt->fetchAll() as $book){

        }
    }
}
