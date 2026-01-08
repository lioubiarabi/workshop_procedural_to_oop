<?php
require '../Core/Database.php';
require '../Entities/Author.php';
require '../Entities/Book.php';
require '../Repositories/BookRepository.php';


class LibraryService {

    public function __construct(
        private BookRepository $bookManager = new BookRepository()
    ){}
    
    public function getBooks(){
        return $this->bookManager->getBooks();
    }

    public function addBook($book){
        return $this->bookManager->addBook($book);
    }
    
    public function findBook($title){
        return $this->bookManager->findBookByTitle($title);
    }
}