<?php
if(!isset($_SESSION['autenticado']))
header("Location: /home");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Publicacion</title>
</head>
<body>
    
<h3><b> AUTOR:</b>  <?= $parametros['nombreAutor'] . " " . $parametros['apellidoAutor'] ?> </h3>
<h3><b> Fecha de Publicación:</b> <?= $parametros['fechaHora'] ?> </h3>
<b>--------------------------------------------------------------------------------</b><br><br>

<b>id Publicacion <?= $parametros['idPublicacion'] ?>:</b><p> <?= $parametros['cuerpo'] ?></p>

<br><br><br><br>
<a href="/home">Volver</a>

</body>
</html>