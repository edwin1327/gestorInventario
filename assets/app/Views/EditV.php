<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../Inventario.php">Inventario</a></li>
                    <li><a href="#">Añadir producto</a></li>
                </ul>
            </nav>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Precio</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($productos as $pro){
                        ?>
                        <form action="../controller/C_Update.php" method="post">
                            <tr>
                                <td><input type="hidden" value="<?php echo $pro['Id_productos']?>" name="Id"></td>
                                <td><input type="text" value="<?php echo $pro['Nombre']?>" name="Nombre"></td>
                                <td><textarea name="Descripcion" cols="20" rows="5"><?php echo $pro['Descripcion']?></textarea></td>
                                <td><input type="text" value="<?php echo $pro['Precio']?>" name="Precio"></td>
                                <td><button class="actualizar">Actualizar Producto</button></td>
                            </tr>
                        </form>    
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>