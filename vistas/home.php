<?php $entorno = Entorno(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <br>

<div><form <?= $entorno['nologueado'] ?>  action="/home" method="post">
Usuario  <input type="text" name="usuario"> Contraseña 
<input type="password" name="password">  
<input type="submit" value="Iniciar Sesión"></form><br>
 
<?php if(isset($parametros['error']) && $parametros['error'] === true ) :?>
        <div style="color: red;">Credenciales invalidas.</div>
    <?php endif;?><br>
    </div>

<div <?= $entorno['nologueado'] ?> ><a href="/nuevoUsuario"> Registrarse</a> </div>

<div <?= $entorno['logueado'] ?> > <h3>USUARIO: <?= $_SESSION['nombreUsuario'] ?></h3></div> 
<br>

<div <?= $entorno['logueado'] ?>><form action="/logout" method="post"> <button type="submit">Cerrar Sesion</button></form></div>
<br>

<div <?= $entorno['logueado'] ?> > <a href="/nuevaPublicacion">Nueva Publicacion</a> </div> 

<div align="center"><h1> ----- BLOG HOME PAGE ----- </h1></div>
<br><br><br><br>
<h2>PUBLICACIONES</h2>
<br><br>

<?php foreach(($publicaciones=PublicacionControlador::ListarTodos()) as $publicacion) :?>
    <b>Creado por:</b> <?=  $publicacion['username'] ?>
    <B> Publicado:</B> <?=  $publicacion['fechaHora'] ?><br>
    <form action="/verPublicacion" method="post"><input type="hidden" name="idPublicacion" value= <?= $publicacion['idPublicacion'] ?>><button type="submit" 
    <?= $entorno['desactivado'] ?> >Ver</button></form><br>
<?php endforeach; ?>

</body>
</html>