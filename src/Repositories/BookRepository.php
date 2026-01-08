<?php

class BookRepository
{
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = Database::connect();
    }

    public function getBooks()
    {
        $result = [];
        $stmt = $this->pdo->prepare("SELECT * FROM books INNER JOIN author where author.id=authorId");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $book) {
            $result[$book['title']] =
                new Book(
                    $book['id'],
                    $book['title'],
                    new Author($book['authorId'], $book['name']),
                    $book['price'],
                    $book['stock']
                );
        }
    }
}
