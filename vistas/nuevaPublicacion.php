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
    <title>Document</title>
</head>
<body>

<h1>NUEVA PUBLICACION</h1>
<br><br><br>

<form action="/nuevaPublicacion" method="post">

<b>Creado por:</b> <?= $_SESSION['nombreUsuario'] ?> <br>
<b>Fecha:</b> <?= date('Y-m-d') ?> <br><br><br>

<textarea name="cuerpo" rows="20" cols="50"></textarea><br><br>


<input type="submit" value="Publicar">

</form>

<br><br>
<?php if(isset($parametros['error']) && $parametros['error'] === false ) :?>
        <div style="color: red;">Publicación exitosa.</div>
    <?php endif;?><br>
    
    <br>

<a href="/home">Volver</a>


    
</body>
</html>