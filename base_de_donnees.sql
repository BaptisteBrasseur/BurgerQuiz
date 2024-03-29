DROP DATABASE IF EXISTS BurgerQuiz;
CREATE DATABASE BurgerQuiz CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE BurgerQuiz;
CREATE TABLE Utilisateurs
(
    id int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(30) NOT NULL,
        password varchar(30) NOT NULL,
        est_administrateur boolean NOT NULL DEFAULT 0
    );

CREATE TABLE Scores
(
    id             int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    score          tinyint      NULL,
    utilisateur_id INT Unsigned NOT NULL,
    CONSTRAINT fk_utilisateur_id FOREIGN KEY (utilisateur_id) REFERENCES Utilisateurs (id)
);
CREATE TABLE Questions_QCM
(
    id int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question varchar(70) NOT NULL,
    bonne_reponse varchar(30) NOT NULL,
    mauvaise_reponse_1 varchar(30) NOT NULL,
    mauvaise_reponse_2 varchar(30) NOT NULL
);
insert into Questions_QCM (question, bonne_reponse, mauvaise_reponse_1, mauvaise_reponse_2) values ('Quel mangaka a écrit Astro Boy?', 'osamu tezuka', 'akira toriyama', 'go nagai');
insert into Questions_QCM (question, bonne_reponse, mauvaise_reponse_1, mauvaise_reponse_2) values ('Que porte Monkey D. Luffy sur sa tête?', 'un chapeau de paille', 'un chapeau de pirate', 'un chapeau de cowboy');
insert into Questions_QCM (question, bonne_reponse, mauvaise_reponse_1, mauvaise_reponse_2) values ('Quel studio a adapté en anime Chainsaw Man?', 'mappa', 'toei animation', 'studio pierrot');
insert into Questions_QCM (question, bonne_reponse, mauvaise_reponse_1, mauvaise_reponse_2) values ('Lequel de ces mangas n est pas paru dans le Weekly Shonen Jump?', 'l attaque des titans', 'bleach', 'death note');
insert into Questions_QCM (question, bonne_reponse, mauvaise_reponse_1, mauvaise_reponse_2) values ('En quoi se transforme Ranma en touchant de l eau froide?', 'en fille', 'en panda', 'en écrevisse');
CREATE TABLE Questions_reponse_directe
(
    id int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question varchar(70) NOT NULL,
    bonne_reponse varchar(30) NOT NULL
);
insert into Questions_reponse_directe (question, bonne_reponse) values ('Quel est le prénom de l héroïne de La rose de Versailles?', 'oscar');
insert into Questions_reponse_directe (question, bonne_reponse) values ('En quelle année s est terminé le manga Dragon Ball en chiffres?', '1995');
insert into Questions_reponse_directe (question, bonne_reponse) values ('Quel est le nom de famille de Naruto?', 'uzumaki');
insert into Questions_reponse_directe (question, bonne_reponse) values ('Quel est le collectif derrière Sakura chasseuse de cartes?', 'clamp');
insert into Questions_reponse_directe (question, bonne_reponse) values ('Quel est le métier des frères Elric?', 'alchimiste');