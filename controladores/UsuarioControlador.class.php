<?php 
    require "../utils/autoload.php";

    class UsuarioControlador {
        public static function Alta($context){
            $u = new UsuarioModelo();
            $u -> Nombre = $context['post']['usuario'];
            $u -> Password = $context['post']['password'];
            $u -> NombreAutor = $context['post']['nombreAutor'];
            $u -> ApellidoAutor = $context['post']['apellidoAutor'];

            if($u -> Guardar()){
                render("nuevoUsuario",["error" => false]);
            }else render("nuevoUsuario",["error" => true]); 
        }

    }

