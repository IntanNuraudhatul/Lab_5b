-- database.sql
CREATE DATABASE Lab_5b;

USE Lab_5b;

CREATE TABLE users (
    matric VARCHAR(10) PRIMARY KEY, 
    name VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL, 
    role VARCHAR(10) NOT NULL
);
