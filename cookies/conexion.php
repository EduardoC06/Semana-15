<?php 
$usuario = "u35rpuls5faxhv5c";
$password = "BKuyShq5kt0yuVJ4ez49";
$servidor = "bx7ca7rkazragihan4yp-mysql.services.clever-cloud.com";
$basedatos = "bx7ca7rkazragihan4yp";


$conexion = new mysqli($servidor, $usuario, $password, $basedatos);

$conexion->set_charset('utf8');

</*$sql_tipos = "CREATE TABLE IF NOT EXISTS tipos (
    codtip INT AUTO_INCREMENT PRIMARY KEY,
    costip VARCHAR(50),
    nomtip VARCHAR(50)
)";

$sql_productos = "CREATE TABLE IF NOT EXISTS productos (
    codpro INT AUTO_INCREMENT PRIMARY KEY,
    compro VARCHAR(50),
    nompro VARCHAR(50),
    prepro DECIMAL(10, 2),
    cantpro INT,
    fotpro VARCHAR(255),
    codtip INT,
    FOREIGN KEY (codtip) REFERENCES tipos(codtip)
)";*/
?>