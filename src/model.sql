CREATE TABLE `systemegestioclient`.`clients`
( `id` INT NOT NULL AUTO_INCREMENT , `prenom` VARCHAR
(255) NOT NULL , `nom` VARCHAR
(255) NOT NULL , `sexe` VARCHAR
(255) NOT NULL , `adresse` TEXT NOT NULL , `telephone` VARCHAR
(255) NOT NULL , `dateNaissance` VARCHAR
(255) NOT NULL , PRIMARY KEY
(`id`)) ENGINE = MyISAM;