-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: Almacen
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `catalogo_articulo`
--

DROP TABLE IF EXISTS `catalogo_articulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catalogo_articulo` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `clave_articulo` int(11) NOT NULL,
  `concepto` varchar(50) NOT NULL,
  `medida` varchar(20) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  PRIMARY KEY (`id_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogo_articulo`
--

LOCK TABLES `catalogo_articulo` WRITE;
/*!40000 ALTER TABLE `catalogo_articulo` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogo_articulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exis_almacen`
--

DROP TABLE IF EXISTS `exis_almacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exis_almacen` (
  `id_existencia` int(11) NOT NULL AUTO_INCREMENT,
  `fec_caducidad` date NOT NULL,
  `fec_ingreso` date NOT NULL,
  `fec_factura` date NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `existencia` int(11) NOT NULL,
  `clave_articulo` int(11) NOT NULL,
  `clave_proveedor` int(11) NOT NULL,
  `fec_sistema` datetime NOT NULL,
  PRIMARY KEY (`id_existencia`),
  KEY `clave_articulo` (`clave_articulo`),
  KEY `id_existencia` (`id_existencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exis_almacen`
--

LOCK TABLES `exis_almacen` WRITE;
/*!40000 ALTER TABLE `exis_almacen` DISABLE KEYS */;
/*!40000 ALTER TABLE `exis_almacen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exis_unidad`
--

DROP TABLE IF EXISTS `exis_unidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exis_unidad` (
  `id_exist` int(11) NOT NULL AUTO_INCREMENT,
  `fec_caducidad` date NOT NULL,
  `fec_entrega` date NOT NULL,
  `fec_ingreso` date NOT NULL,
  `existencia` int(11) NOT NULL,
  `clave_articulo` int(11) NOT NULL,
  PRIMARY KEY (`id_exist`),
  KEY `id_exis` (`id_exist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exis_unidad`
--

LOCK TABLES `exis_unidad` WRITE;
/*!40000 ALTER TABLE `exis_unidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `exis_unidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `clave_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `domicilio` varchar(60) NOT NULL,
  `telefono` int(15) NOT NULL,
  PRIMARY KEY (`clave_proveedor`),
  KEY `clave_proveedor` (`clave_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requis`
--

DROP TABLE IF EXISTS `requis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requis` (
  `id_requi` int(11) NOT NULL AUTO_INCREMENT,
  `fec_solicitud` date NOT NULL,
  `fec_atencion` date NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `cant_solicitada` int(11) NOT NULL,
  `cant_autorizada` int(11) NOT NULL,
  `clave_articulo` int(11) NOT NULL,
  `clave_uni_area` int(11) NOT NULL,
  PRIMARY KEY (`id_requi`),
  KEY `id_requi` (`id_requi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requis`
--

LOCK TABLES `requis` WRITE;
/*!40000 ALTER TABLE `requis` DISABLE KEYS */;
/*!40000 ALTER TABLE `requis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidad_area`
--

DROP TABLE IF EXISTS `unidad_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidad_area` (
  `id_uni_area` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  PRIMARY KEY (`id_uni_area`),
  KEY `id_uni_area` (`id_uni_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidad_area`
--

LOCK TABLES `unidad_area` WRITE;
/*!40000 ALTER TABLE `unidad_area` DISABLE KEYS */;
/*!40000 ALTER TABLE `unidad_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'Almacen'
--

--
-- Dumping routines for database 'Almacen'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-04  1:03:31
