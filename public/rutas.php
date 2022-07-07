<?php 
    require "../utils/autoload.php";

    Routes::AddView("/login","login");
    Routes::Add("/login","post","SesionControlador::IniciarSesion");


    Routes::AddView("/home", "home");
   
    
    Routes::AddView("/nuevoUsuario", "nuevoUsuario");
    Routes::Add("/nuevoUsuario", 'post', "UsuarioControlador::Alta");


    Routes::AddView("/nuevaPublicacion", "nuevaPublicacion");




    Routes::Run();

       