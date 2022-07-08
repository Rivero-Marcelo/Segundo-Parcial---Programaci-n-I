<?php 
    require "../utils/autoload.php";

 
    Routes::AddView("/home", "home");
    Routes::Add("/home", 'post', "SesionControlador::IniciarSesion");
   
    
    Routes::AddView("/nuevoUsuario", "nuevoUsuario");
    Routes::Add("/nuevoUsuario", 'post', "UsuarioControlador::Alta");

   


    Routes::AddView("/nuevaPublicacion", "nuevaPublicacion");
    Routes::Add("/nuevaPublicacion", 'post', "PublicacionControlador::Nueva");


    Routes::Add("/verPublicacion", 'post', "PublicacionControlador::VerPublicacion");

    Routes::Add("/logout", 'post', "SesionControlador::CerrarSesion");




    Routes::Run();

       