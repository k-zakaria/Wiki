CREATE DATABASE wiki;
USE wiki;


-- Table des roles
CREATE TABLE Roles (
    roleId INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) 
)ENGINE=InnoDB;

-- Table des utilisateurs
CREATE TABLE Users (
    userId INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) ,
    email VARCHAR(255) ,
    password VARCHAR(255) ,
    roleId INT,
    FOREIGN KEY (roleId) REFERENCES Roles(roleId)
)ENGINE=InnoDB;



-- Table des catégories
CREATE TABLE Categorys (
    categoryId INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) 
)ENGINE=InnoDB;

-- Table des tags
CREATE TABLE Tags (
    tagId INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) 
)ENGINE=InnoDB;

-- Table des wikis
CREATE TABLE Wikis (
    wikiId INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) ,
    content TEXT ,
    dateCreate DATE,
    userId INT,
    FOREIGN KEY (userId) REFERENCES Users(userId),
    categoryId INT,
    FOREIGN KEY (categoryId) REFERENCES Categorys(categoryId)
    
)ENGINE=InnoDB;

-- Table de liaison entre les wikis et les tags 
CREATE TABLE WikiTags (
    wikiId INT,
    tagId INT,
    FOREIGN KEY (tagId) REFERENCES Tags(tagId),
    FOREIGN KEY (wikiId) REFERENCES Wikis(wikiId)
)ENGINE=InnoDB;
