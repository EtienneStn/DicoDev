CREATE DATABASE dicodev;
USE dicodev;
CREATE TABLE users ( 
    userId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(25) NOT NULL,
    userSurname VARCHAR(25) NOT NULL,
    userUsername VARCHAR(25) NOT NULL,
    userEmail VARCHAR(255) NOT NULL UNIQUE,
    userPassword VARCHAR(255) NOT NULL,
    userRole INT NOT NULL DEFAULT 1
);
CREATE TABLE langages ( 
    langageId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    langageName VARCHAR(25) NOT NULL,
    langageDesc VARCHAR(255) NOT NULL
);
CREATE TABLE categories ( 
    categorieId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    categorieName VARCHAR(50) NOT NULL,
    langageId INT NOT NULL UNIQUE,
    FOREIGN KEY (langageId) REFERENCES langages(langageId)
);
CREATE TABLE attributes ( 
    attributeId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    attributeName VARCHAR(50) NOT NULL,
    categorieId INT NOT NULL UNIQUE,
    FOREIGN KEY (categorieId) REFERENCES categories(categorieId)
);