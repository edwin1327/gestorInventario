<?php

class Conection{
    // Variable conexión privada
    private $conect;

    // Constructor guarda la conexión
    public function __construct() { 

        // Se crea una sub variable para que esta pueda ser accedida y se crea la conexión
        $this->conect = new mysqli('localhost', 'root', '', 'inventario'); 
    }

    // Función para mandar a llamar los productos generales
    public function getProducts() {

        // Petición a la conexión de los datos a la base de datos
        $peticion = $this->conect->query('SELECT * FROM productos');
        $datos = [];
        $i = 0;

        // Ejecución de ciclo que recorra los datos obtenidos de la petición a la base de datos
        while ($row = $peticion->fetch_assoc()) {
            //Guardar los datos en un arreglo
            $datos[$i] = $row;
            $i++;
        }

        // Se retornan los registros obtenidos de la BD
        return $datos;
    }

    // Funcion para pedir un producto general
    public function Product($Nombre) {
        // Realizamos la petición a la base de datos con la condición si el campo nombre es igual a la variable
        $peticion = $this->conect->query("SELECT * FROM productos WHERE Nombre = '$Nombre'");
        $datos = [];
        $i = 0;

        // Recorremos los datos y guardamos en un arreglo
        while ($row = $peticion->fetch_assoc()) {
            $datos[$i] = $row;
            $i++;

            return $datos;
        }
    }

    public function EditProduct($id) {
        // Realizamos la petición a la base de datos con la condición si el campo id es igual a la variable
        $peticion = $this->conect->query("SELECT * FROM productos WHERE Id_productos = '$id'");
        $datos = [];
        $i = 0;

        // Recorremos los datos y guardamos en un arreglo
        while ($row = $peticion->fetch_assoc()) {
            $datos[$i] = $row;
            $i++;

            return $datos;

        }
    }

    // Función para actualizar productos
    public function UpdateProduct($id, $Nombre, $Descripcion, $Precio) {
        $peticion = $this->conect->query("UPDATE productos SET Nombre = '$Nombre', Descripcion = '$Descripcion', Precio = '$Precio' WHERE id_productos = $id");
    }

    // Función para agregar productos
    public function InsertProduct($Nombre,$Descripcion,$Precio) {
        $peticion = $this->conect->query("INSERT INTO productos (Nombre, Descripcion, Precio) VALUES ('$Nombre','$Descripcion','$Precio')");
    }

    // Función para eliminar productos
    public function DeleteProduct($id) {
        $peticion = $this->conect->query("DELETE FROM productos WHERE id_productos = '$id'");
    }

}
