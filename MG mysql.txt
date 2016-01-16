-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Login
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Login
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Login` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Login` ;

-- -----------------------------------------------------
-- Table `Login`.`Login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Login`.`Login` (
  `idLogin` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name` VARCHAR(45) NULL COMMENT '',
  `Password` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idLogin`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Login`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Login`.`category` (
  `category_id`  NOT NULL AUTO_INCREMENT PRIMARY KEY  COMMENT '',
  `Familie` (255) NOT NULL COMMENT '',
  `Freunde` VARCHAR(45) NOT NULL COMMENT '',
  
  

-- -----------------------------------------------------
-- Table `Login`.`Daten`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Login`.`Daten` (
  `ID-Daten` INT NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '',
  `Vorname` VARCHAR(45) NULL COMMENT '',
  `Nachname` VARCHAR(45) NULL COMMENT '',
  `Geschlecht` ENUM('m''f') NULL COMMENT '',
  `Geburtsdatum` DATE NULL COMMENT '',
  `Age` TINYINT(3) NULL COMMENT '',
  `Interesse` VARCHAR(45) NULL COMMENT '',
  
  PRIMARY KEY (`ID-Daten`, `category_category_id`)  COMMENT '',
  INDEX `fk_Daten_category_idx` (`category_category_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Daten_category`
    FOREIGN KEY (`category_category_id`)
    REFERENCES `Login`.`category` (`category_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
Select *From Daten Left join  category on ID-Daten.category_category_id=category_category-id;