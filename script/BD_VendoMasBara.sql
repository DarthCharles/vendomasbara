SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema VendoMasBarato
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `VendoMasBarato` ;
CREATE SCHEMA IF NOT EXISTS `VendoMasBarato` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `VendoMasBarato` ;

-- -----------------------------------------------------
-- Table `VendoMasBarato`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `VendoMasBarato`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `VendoMasBarato`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(25) NOT NULL,
  `Apellidos` VARCHAR(35) NOT NULL,
  `Usuario` VARCHAR(30) NOT NULL,
  `Password` VARCHAR(15) NOT NULL,
  `Domicilio` VARCHAR(50) NOT NULL,
  `Telefono` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `Usuario_UNIQUE` (`Usuario` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `VendoMasBarato`.`Categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `VendoMasBarato`.`Categoria` ;

CREATE TABLE IF NOT EXISTS `VendoMasBarato`.`Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Categoria` VARCHAR(25) NOT NULL,
  `Descripcion` TEXT NOT NULL,
  `imagen` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idCategoria`),
  UNIQUE INDEX `Nombre_Categoria_UNIQUE` (`Nombre_Categoria` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `VendoMasBarato`.`Publicacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `VendoMasBarato`.`Publicacion` ;

CREATE TABLE IF NOT EXISTS `VendoMasBarato`.`Publicacion` (
  `idPublicacion` INT NOT NULL AUTO_INCREMENT,
  `Titulo` VARCHAR(25) NOT NULL,
  `Precio` INT NOT NULL,
  `Descripcion` TEXT NOT NULL,
  `Nuevo` TINYINT(1) NOT NULL,
  `Imagen` VARCHAR(45) NOT NULL,
  `Categoria_idCategoria` INT NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idPublicacion`),
  INDEX `fk_Publicacion_Categoria_idx` (`Categoria_idCategoria` ASC),
  INDEX `fk_Publicacion_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Publicacion_Categoria`
    FOREIGN KEY (`Categoria_idCategoria`)
    REFERENCES `VendoMasBarato`.`Categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Publicacion_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `VendoMasBarato`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
