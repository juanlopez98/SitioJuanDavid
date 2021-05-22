-- MySQL Workbench Synchronization
-- Generated: 2021-05-21 19:57
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: david

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `BDSitio` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;

CREATE TABLE IF NOT EXISTS `BDSitio`.`Usuarios` (
  `nombreUsuario` VARCHAR(20) NOT NULL ,
  `primerNombre` VARCHAR(30) NOT NULL,
  `segundoNombre` VARCHAR(30) NULL DEFAULT NULL,
  `primerApellido` VARCHAR(30) NOT NULL,
  `segundoApellido` VARCHAR(30) NULL DEFAULT NULL,
  `email` VARCHAR(70) NOT NULL,
  `celular` VARCHAR(15) NOT NULL,
  `indetificacion` VARCHAR(15) NOT NULL,
  `direccion` VARCHAR(250) NULL DEFAULT NULL,
  `perfilUsuario` INT(11) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `usuarioCreacion` VARCHAR(15) NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `usuarioModificacion` VARCHAR(15) NULL DEFAULT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  `estadoUsuario` BIT(1) NOT NULL,
  PRIMARY KEY (`nombreUsuario`),
  INDEX `indx_indetificacion_usuario` (`indetificacion` ASC)

)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE IF NOT EXISTS `BDSitio`.`Productos` (
  `codigoProducto` VARCHAR(15) NOT NULL,
  `nombreProducto` VARCHAR(150) NOT NULL,
  `descripcionProducto` VARCHAR(255) NULL DEFAULT NULL,
  `unidadMedida` VARCHAR(45) NOT NULL,
  `marcaProducto` VARCHAR(45) NULL DEFAULT NULL,
  `precioActual` FLOAT(11) NOT NULL,
  `cantidadActual` INT(11) NOT NULL,
  `usuarioCreacion` VARCHAR(15) NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `usuarioModificacion` VARCHAR(15) NULL DEFAULT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  `estadoProducto` BIT(1) NOT NULL,
  PRIMARY KEY (`codigoProducto`),
  INDEX `indx_nombre_producto` (`nombreProducto` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `BDSitio`.`Terceros` (
  `identificacionTercero` VARCHAR(25) NOT NULL,
  `nombreTercero` VARCHAR(255) NULL DEFAULT NULL,
  `emailTercero` VARCHAR(70) NULL DEFAULT NULL,
  `celularTercero` VARCHAR(45) NULL DEFAULT NULL,
  `telefonoTercero` VARCHAR(25) NULL DEFAULT NULL,
  `direccionTercero` VARCHAR(250) NULL DEFAULT NULL,
  `descripcionTercero` VARCHAR(255) NULL DEFAULT NULL,
  `estadoTercero` BIT(1) NOT NULL,
  `usuarioCreacion` VARCHAR(20) NOT NULL,
  `esCliente` BIT(1) NOT NULL,
  `esProveedor` BIT(1) NOT NULL,
  `contactoTercero` VARCHAR(100) NULL DEFAULT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `usuarioModificacion` VARCHAR(20) NULL DEFAULT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`identificacionTercero`),
  INDEX `indx_nombre_tercero` (`nombreTercero` ASC) ,
  INDEX `indx_descripcion_tercero` (`descripcionTercero` ASC) ,
  INDEX `indx_contacto_tercero` (`contactoTercero` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `BDSitio`.`compraVenta` (
  `idcompraVenta` INT(11) NOT NULL AUTO_INCREMENT,
  `fechaCompraVenta` DATETIME NOT NULL,
  `tipoPago` TINYINT(1) NOT NULL,
  `tipoOperacion` TINYINT(1) NOT NULL,
  `conceptoCompraVenta` VARCHAR(255) NOT NULL,
  `estadoCompraVenta` BIT(1) NOT NULL,
  `usuarioCreacion` VARCHAR(20) NOT NULL,
  `IdentificacionTercero` VARCHAR(25) NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `usuarioModificacion` VARCHAR(25) NULL DEFAULT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idcompraVenta`),
  INDEX `indx_fecha_compraVenta` (`fechaCompraVenta` ASC) ,
  INDEX `fk_compraVenta_Terceros1_idx` (`IdentificacionTercero` ASC) ,
  CONSTRAINT `fk_compraVenta_Terceros1`
    FOREIGN KEY (`IdentificacionTercero`)
    REFERENCES `BDSitio`.`Terceros` (`identificacionTercero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `BDSitio`.`ProductoPorCompraVenta` (
  `IdProductosPorCompraVentacol` BIGINT(11) NOT NULL AUTO_INCREMENT,
  `CodigoProducto` VARCHAR(15) NOT NULL,
  `IdCompraVenta` INT(11) NOT NULL,
  `Cantidad` INT(11) NULL DEFAULT NULL,
  `EstadoProductosPorCompraVenta` BIT(1) NULL DEFAULT NULL,
  `UsuarioCreacion` VARCHAR(30) NULL DEFAULT NULL,
  `FechaCreacion` DATETIME NULL DEFAULT NULL,
  `UsuarioModificacion` VARCHAR(30) NULL DEFAULT NULL,
  `FechaModificacion` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`IdProductosPorCompraVentacol`),
  INDEX `fk_Productos_has_compraVenta_compraVenta1_idx` (`IdCompraVenta` ASC) ,
  INDEX `fk_Productos_has_compraVenta_Productos_idx` (`CodigoProducto` ASC) ,
  CONSTRAINT `fk_Productos_has_compraVenta_Productos`
    FOREIGN KEY (`CodigoProducto`)
    REFERENCES `BDSitio`.`Productos` (`codigoProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Productos_has_compraVenta_compraVenta1`
    FOREIGN KEY (`IdCompraVenta`)
    REFERENCES `BDSitio`.`compraVenta` (`idcompraVenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
