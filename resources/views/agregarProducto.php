<?php
include 'conexion.php';

$nombre = "";
$color = "";
$talle = "";
$precio = "";
$foto = "";


if ($_POST) {
  $nombre = $_POST['nombre'];
  $color = $_POST['color'];
  $talle = $_POST['talle'];
  $precio = $_POST['precio'];
  $foto = $_POST['foto'];

  $errores = false;

  $consulta = $conex->query("INSERT INTO productos (id, nombre, color, talle, precio, foto) VALUES (NULL, '$nombre', '$color', '$talle', $precio, '$foto') ");
  header('location:productos.php');

  //$consulta->bindValue('nombre', $_POST['nombre'], PDO::PARAM_STR);
  //$consulta->bindValue('color', $_POST['color'], PDO::PARAM_STR);
  //$consulta->bindValue('talle', $_POST['talle'], PDO::PARAM_INT);
  //$consulta->bindValue('precio', $_POST['precio'], PDO::PARAM_INT);
  //$consulta->bindValue('foto', $_POST['foto'], PDO::PARAM_STR);
}

//var_dump($consulta);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Productos</h1>
    <form class="" action="agregarProducto.php" method="post">

        <div class="">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="<?php $nombre ?>">
        </div>
        <div class="">
          <label for="color">Color</label>
          <input type="text" name="color" value="<?php $color ?>">
        </div>
        <div class="">
          <label for="talle">Talle</label>
          <input type="text" name="talle" value="<?php $talle ?>">
        </div>
        <div class="">
          <label for="precio">Precio</label>
          <input type="number" name="precio" value="<?php $precio ?>">
        </div>
        <div class="">
          <label for="foto">Foto</label>
          <input type="file" name="foto" value="<?php $foto ?>">
        </div>
        <br>
        <div class="">
          <input type="submit" value="Agregar Prodcuto" name="submit"/>
        </div>
        <button type="button" name="button"><a href="productos.php">Volver</a></button>





    </form>
  </body>
</html>
