<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Inventario</a></li>
                    <li><a href="#">Añadir Producto</a></li>
                </ul>
            </nav>
            <div class="table">
                <div class="busqueda">
                    <a href="Busqueda.php"><button class="busq">Editar Producto</button></a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>descripción</td>
                            <td>Precio</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($productos as $pro) {
                                echo"<tr>";
                                    echo "<td>". $pro["Nombre"] ."</td>";
                                    echo "<td>". $pro["Descripcion"] ."</td>";
                                    echo "<td>". $pro["Precio"] ."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>