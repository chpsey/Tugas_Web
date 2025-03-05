﻿# portfolio-tailwind-css
# Web1

query untuk membuat database :
-- Create the database
CREATE DATABASE contact_form;

-- Use the newly created database
USE contact_form;

-- Create the messages table
CREATE TABLE messages (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    message TEXT NOT NULL,
    anonymous TINYINT(1) NOT NULL
);


link untuk menjalankan web :
http://localhost/PHPcoba/index.php
