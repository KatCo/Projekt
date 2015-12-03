CREATE TABLE `gechenkmanager`.`login` (
  
 
 `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT  PRIMARY KEY,
 
 `Name` VARCHAR(45) NOT NULL ,
 
 `Passwort` VARCHAR(45)NOT NULL 
 )ENGINE=INNODB;
  select *from login;



CREATE TABLE `gechenkmanager`.`Familie` (
  `ID` INT(11) unsigned NOT NULL AUTO_INCREMENT  PRIMARY KEY COMMENT ''
  );
 
  ALTER TABLE `gechenkmanager`.`Familie` 
  ADD COLUMN `Vorname` VARCHAR(45) NULL COMMENT '' AFTER `ID`,
ADD COLUMN `Nachname` VARCHAR(45) NULL COMMENT '' AFTER `Vorname`,
ADD COLUMN  `Geschlecht`  ENUM ('m''f')  COMMENT '' AFTER `Nachname`,
ADD COLUMN `Geburtsdatum` DATE NULL COMMENT '' AFTER `Geschlecht`,
ADD COLUMN `Age` TINYINT(3) NULL COMMENT '' AFTER `Geburtsdatum`,
ADD COLUMN `Interesse` VARCHAR(45) NULL COMMENT '' AFTER `Age`;
select* from Familie;

CREATE TABLE `gechenkmanager`.`freunde` (
  `ID` INT (11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '',
  `Vorname` VARCHAR(45) NULL COMMENT '', 
  `Nachname` VARCHAR(45) NULL COMMENT '', 
 `Geschlecht`  ENUM ('m''f')  COMMENT '' ,
`Geburtsdatum` DATE NULL COMMENT '' ,
 `Age` TINYINT(3) NULL COMMENT '' ,
 `Interesse` VARCHAR(45) NULL COMMENT '' )

select  *from freunde; 

/*
=== Feedback Alpers, Dez 3 ===

Bitte trennen Sie die Erzeugung der Relationen von Transaktionsaufrufen.

Setzen Sie sich bitte auch mit der PHPlerin Ihrer Gruppe zusammen, um zu klären, an welchen Stellen
Transaktionen in den PHP-Code eingefügt werden sollen. Denn zwar ist die Programmierung davon zum Großteil Aufgabe der
PHPlerin, aber die eigentlichten Transaktionen müssen Sie dann einfügen.

Wichtig für Ihren Anteil am Projekt ist, dass der MySQL-Teil tatsächlich in den PHP-Teil integriert ist.

=== Feedback Alpers, Ende ===
*/
