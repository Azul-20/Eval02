<?php

include('conexion.php');

$conexion = conectar();

$nombre = $producto['Nombre'];
$descripcion = $producto['Descripcion'];
$stock = $producto['Stock'];
$precioVenta = $producto['PrecioVenta'];

$sql = "INSERT INTO 'producto' ('Nombre', 'Descripcion', 'Stock', 'PrecioVenta') VALUES ('$nombre', '$descripcion', $stock, $precioVenta);";

$resultado = mysqli_query($conexion, $sql);

desconectar($conexion);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvaLab08 || Create</title>
</head>
<body>
    <h1>Nuevo producto</h1>
    <h3>
        <?php

        if (!$resultado) {
            echo 'El producto no fue registrado';
        }
        else {
            echo 'El producto ha sido registrado';
        }

        ?>
    </h3>
    <a href="index.php">Regresar</a>
</body>
</html>