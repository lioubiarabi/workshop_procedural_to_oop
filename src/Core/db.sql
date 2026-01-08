CREATE DATABASE workshop1;
use workshop1;

CREATE Table author (
    id AUTO_INCREMENT not NULL PRIMARY key,
    name VARCHAR(50) not NULL UNIQUE
);
