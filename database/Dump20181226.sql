CREATE DATABASE  IF NOT EXISTS `demo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `demo`;
-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: demo
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_articulo`
--

DROP TABLE IF EXISTS `tbl_articulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_articulo` (
  `IdArticulo` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Cantidad` double NOT NULL,
  `PrecioCompra` double NOT NULL,
  `PrecioVenta` double NOT NULL,
  `FechaEntrada` date NOT NULL,
  `IdUnidadMedida` int(11) NOT NULL,
  `IdTipoProducto` int(11) DEFAULT NULL,
  `IdSubCategoria` int(11) DEFAULT NULL,
  `IdProveedor` int(11) DEFAULT NULL,
  `IdBodega` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdArticulo`),
  KEY `UnidadM_idx` (`IdUnidadMedida`),
  KEY `SubCate_idx` (`IdSubCategoria`),
  KEY `Proveedor_idx` (`IdProveedor`),
  KEY `Bodega_idx` (`IdBodega`),
  CONSTRAINT `Bodega` FOREIGN KEY (`IdBodega`) REFERENCES `tbl_bodega` (`IdBodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Proveedor` FOREIGN KEY (`IdProveedor`) REFERENCES `tbl_proveedor` (`IdProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `SubCate` FOREIGN KEY (`IdSubCategoria`) REFERENCES `tbl_subcategoria` (`IdSubCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `UnidadM` FOREIGN KEY (`IdUnidadMedida`) REFERENCES `tbl_unidadmedida` (`IdUnidadMedida`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_articulo`
--

LOCK TABLES `tbl_articulo` WRITE;
/*!40000 ALTER TABLE `tbl_articulo` DISABLE KEYS */;
INSERT INTO `tbl_articulo` VALUES (2,'123-01','HP ENVY 13','Computadora Portatil',8,566.9,600.89,'2018-12-02',1,1,1,1,1),(3,'123-02','OMEN X HP','Computadora de uso personal portatil',4,700.9,800.89,'2018-12-02',1,1,1,1,1),(5,'123-04','modem Zyxel 600 ','--',10,80.9,100.89,'2018-12-02',1,1,3,1,1),(6,'123-04','módem zyxel p660 HW-T1','--',10,80.9,100.89,'2018-12-02',1,1,3,1,1);
/*!40000 ALTER TABLE `tbl_articulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_bodega`
--

DROP TABLE IF EXISTS `tbl_bodega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bodega` (
  `IdBodega` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `State` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdBodega`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bodega`
--

LOCK TABLES `tbl_bodega` WRITE;
/*!40000 ALTER TABLE `tbl_bodega` DISABLE KEYS */;
INSERT INTO `tbl_bodega` VALUES (1,'Bodega Central','Calle el progreso 1',1),(2,'Bodega Oriente','17 av sur',1);
/*!40000 ALTER TABLE `tbl_bodega` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_categoria` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria`
--

LOCK TABLES `tbl_categoria` WRITE;
/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
INSERT INTO `tbl_categoria` VALUES (1,'Computadoras',1),(2,'Modems',1);
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_departamento`
--

DROP TABLE IF EXISTS `tbl_departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_departamento` (
  `IdDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `State` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_departamento`
--

LOCK TABLES `tbl_departamento` WRITE;
/*!40000 ALTER TABLE `tbl_departamento` DISABLE KEYS */;
INSERT INTO `tbl_departamento` VALUES (1,'001','Administrativo','Permisos Generales del Sistema',1);
/*!40000 ALTER TABLE `tbl_departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_detallereporte`
--

DROP TABLE IF EXISTS `tbl_detallereporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_detallereporte` (
  `IdDetalleReporte` int(11) NOT NULL AUTO_INCREMENT,
  `IdReporte` int(11) DEFAULT NULL,
  `IdArticulo` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdDetalleReporte`),
  KEY `Articulo_idx` (`IdArticulo`),
  KEY `Reporte_idx` (`IdReporte`),
  CONSTRAINT `Articulo` FOREIGN KEY (`IdArticulo`) REFERENCES `tbl_articulo` (`IdArticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Reporte` FOREIGN KEY (`IdReporte`) REFERENCES `tbl_reporte` (`IdReporte`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_detallereporte`
--

LOCK TABLES `tbl_detallereporte` WRITE;
/*!40000 ALTER TABLE `tbl_detallereporte` DISABLE KEYS */;
INSERT INTO `tbl_detallereporte` VALUES (3,3,2,15,1),(4,3,3,15,1);
/*!40000 ALTER TABLE `tbl_detallereporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_empleado`
--

DROP TABLE IF EXISTS `tbl_empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_empleado` (
  `IdEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(100) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Dui` varchar(100) NOT NULL,
  `Nit` varchar(100) NOT NULL,
  `Isss` varchar(50) NOT NULL,
  `E_Familiar` varchar(50) NOT NULL,
  `G_Academico` varchar(50) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `IdReferencia` int(11) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdDepartamento` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdEmpleado`),
  KEY `Referencia_idx` (`IdReferencia`),
  KEY `Usuario_idx` (`IdUsuario`),
  KEY `Departamento_idx` (`IdDepartamento`),
  CONSTRAINT `Departamen` FOREIGN KEY (`IdDepartamento`) REFERENCES `tbl_departamento` (`IdDepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Referencia` FOREIGN KEY (`IdReferencia`) REFERENCES `tbl_referencia` (`IdReferencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tbl_usuario` (`IdUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_empleado`
--

LOCK TABLES `tbl_empleado` WRITE;
/*!40000 ALTER TABLE `tbl_empleado` DISABLE KEYS */;
INSERT INTO `tbl_empleado` VALUES (3,'00-001','Franklin Armando','Pocasangre Mejia','Urb. Cimas de San Bartolo','123456789','987654321','12345','Soltero','Universidad','1998-12-03','73516621',1,1,1,1);
/*!40000 ALTER TABLE `tbl_empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_proveedor`
--

DROP TABLE IF EXISTS `tbl_proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_proveedor` (
  `IdProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Representate` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Nrc` varchar(100) NOT NULL,
  `Nit` varchar(100) NOT NULL,
  `Nacionalidad` varchar(100) NOT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_proveedor`
--

LOCK TABLES `tbl_proveedor` WRITE;
/*!40000 ALTER TABLE `tbl_proveedor` DISABLE KEYS */;
INSERT INTO `tbl_proveedor` VALUES (1,'HP','Carlos Acevedo','22589696','Carlos@hotmail.com','123456789','987654321','Estadounidense',1);
/*!40000 ALTER TABLE `tbl_proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_referencia`
--

DROP TABLE IF EXISTS `tbl_referencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_referencia` (
  `IdReferencia` int(11) NOT NULL AUTO_INCREMENT,
  `IdEmpleado` int(11) DEFAULT NULL,
  `Referencia_1` varchar(100) DEFAULT NULL,
  `Telefono_1` varchar(100) DEFAULT NULL,
  `Referencia_2` varchar(100) DEFAULT NULL,
  `Telefono_2` varchar(100) DEFAULT NULL,
  `State` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdReferencia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_referencia`
--

LOCK TABLES `tbl_referencia` WRITE;
/*!40000 ALTER TABLE `tbl_referencia` DISABLE KEYS */;
INSERT INTO `tbl_referencia` VALUES (1,1,'Tec.Juan Perez','22964541','Ing.Carlos Campos','22858986',1),(2,1,'Tec.Juan Perez','22964541','Ing.Carlos Campos','22858986',1);
/*!40000 ALTER TABLE `tbl_referencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_reporte`
--

DROP TABLE IF EXISTS `tbl_reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_reporte` (
  `IdReporte` int(11) NOT NULL AUTO_INCREMENT,
  `IdEmpleado` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `IdBodegaSaliente` int(11) DEFAULT NULL,
  `IdBodegaEntrante` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdReporte`),
  KEY `Emple_idx` (`IdEmpleado`),
  CONSTRAINT `Emple` FOREIGN KEY (`IdEmpleado`) REFERENCES `tbl_empleado` (`IdEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_reporte`
--

LOCK TABLES `tbl_reporte` WRITE;
/*!40000 ALTER TABLE `tbl_reporte` DISABLE KEYS */;
INSERT INTO `tbl_reporte` VALUES (3,3,'2018-02-02',1,2,1);
/*!40000 ALTER TABLE `tbl_reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_subcategoria`
--

DROP TABLE IF EXISTS `tbl_subcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_subcategoria` (
  `IdSubCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `State` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdSubCategoria`),
  KEY `Cate_idx` (`IdCategoria`),
  CONSTRAINT `Cate` FOREIGN KEY (`IdCategoria`) REFERENCES `tbl_categoria` (`IdCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_subcategoria`
--

LOCK TABLES `tbl_subcategoria` WRITE;
/*!40000 ALTER TABLE `tbl_subcategoria` DISABLE KEYS */;
INSERT INTO `tbl_subcategoria` VALUES (1,'Computadoras',1,1),(2,'Laptos',1,1),(3,'Modems',2,1);
/*!40000 ALTER TABLE `tbl_subcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_unidadmedida`
--

DROP TABLE IF EXISTS `tbl_unidadmedida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_unidadmedida` (
  `IdUnidadMedida` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Abreviatura` varchar(100) NOT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdUnidadMedida`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_unidadmedida`
--

LOCK TABLES `tbl_unidadmedida` WRITE;
/*!40000 ALTER TABLE `tbl_unidadmedida` DISABLE KEYS */;
INSERT INTO `tbl_unidadmedida` VALUES (1,'Cantidad ','Cant',1);
/*!40000 ALTER TABLE `tbl_unidadmedida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `State` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
INSERT INTO `tbl_usuario` VALUES (1,'Frank','123',1);
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'demo'
--

--
-- Dumping routines for database 'demo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-26  8:59:03
