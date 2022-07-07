<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body>
<h1>NUEVO USUARIO</h1>
<form action="/nuevoUsuario" method="post">
        Usuario <input type="text" name="usuario"> <br />
        Password <input type="password" name="password"> <br />
        <br><br>
        Nombre <input type="text" name="nombreAutor"> <br />
        Apellido <input type="text" name="apellidoAutor"> <br /><br>
        <input type="submit" value="Crear Usuario">

</form>
<br><br>

<?php if(isset($parametros['error']) && $parametros['error'] === false ) :?>
        <div style="color: red;">Usuario creado con exito.</div>
    <?php endif;?><br>
    
    <br>
<a href="/home">Volver</a>
    
</body>
</html>