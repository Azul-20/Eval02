<?php

include('conexion.php');

$conexion = conectar();

$sql = 'SELECT IdProducto, Nombre, Descripcion, Stock, PrecioVenta FROM producto';

$resultado = mysqli_query($conexion, $sql);

desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvaLab08 || CRUD</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="table_header">
            <h2>Productos</h2>
            <button><a href="agregarProductos.html">Agregar nuevo <i class="bi bi-plus-circle-fill" id="icons"></i></a></button>
            <div class="input_search">
                <input type="search" placeholder="Buscar producto">
                <i class="bi bi-search" id="search"></i>
            </div>
        </div>
        <table class="table">
            <thead class="table-light">
                <tr><th>Id del producto <i class="bi bi-chevron-expand"></i></th></tr>
                <tr><th>Nombre<i class="bi bi-chevron-expand"></i></th></tr>
                <tr><th>Descripción del producto <i class="bi bi-chevron-expand"></i></th></tr>
                <tr><th>Stock del producto <i class="bi bi-chevron-expand"></i></th></tr>
                <tr><th>Precio de venta de producto <i class="bi bi-chevron-expand"></i></th></tr>
            </thead>
            <tbody>
            <?php

            while ($producto = mysqli_fetch_array($resultado)) {
                $idProducto = $producto['IdProducto'];
                $nombre = $producto['Nombre'];
                $descripcion = $producto['Descripcion'];
                $stock = $producto['Stock'];
                $precioVenta = $producto['PrevioVenta'];

                echo '<tr>';
                echo '<td>' . $idProducto . '</td>';
                echo '<td>' . $nombre . '</td>';
                echo '<td>' . $descripcion . '</td>';
                echo '<td>' . $stock . '</td>';
                echo '<td>' . $precioVenta . '</td>';
                echo '<td><i class="bi bi-pencil-square" id="icons"></i> | <i class="bi bi-trash-fill" id="icons"></i></td>';
                echo '</tr>';
            }

            ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>