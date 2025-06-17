<?php

// Llamar la conexión
require('models/conection.php');

// Crear un objeto para acceder a la clase "Conection"
$con = new Conection();

// Crear una variable que guarde los datos obtenidos de la función
$productos = $con->getProducts();

// Enviar los datos a la vista correspondiente para visualizar
require('Views/ProductosV.php');