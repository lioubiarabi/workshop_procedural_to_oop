CREATE DATABASE workshop1;
use workshop1;

CREATE Table author (
    id int AUTO_INCREMENT PRIMARY key,
    name VARCHAR(50) not NULL UNIQUE
);

CREATE Table books (
    id int AUTO_INCREMENT PRIMARY key,
    title VARCHAR(50) not NULL UNIQUE,
    price int not null,
    stock int not null,
    authorId int not NULL,

    Foreign Key (authorId) REFERENCES author(id)
);