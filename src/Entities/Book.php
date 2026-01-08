<?php

class book
{
    public function __construct(
        private int $id,
        private string $title,
        private Author $author,
        private int $price,
        private string $stock
    ) {}
}
