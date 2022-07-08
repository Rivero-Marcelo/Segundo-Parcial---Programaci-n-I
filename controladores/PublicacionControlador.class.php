<?php

require "../utils/autoload.php";

class PublicacionControlador{


    public static function Nueva($contexto){

        $p = new PublicacionModelo();
        $p -> idAutor = self::ObtenerIdparaAutor($nombre = $contexto['session']['nombreUsuario']);
        $p -> fechaHora = date('Y-m-d H:i:s');
        $p -> cuerpo = $contexto['post']['cuerpo']; 
       
        if($p -> Guardar()){render("nuevaPublicacion",["error" => false]);
        }else  echo "ERROR AL PUBLICAR";

    }
    


    public static function ListarTodos(){

        $p = new PublicacionModelo();
        return $publicaciones = $p -> ObtenerPublicaciones();

    }


    public static function ObtenerIdparaAutor($nombre){

        $p = new UsuarioModelo();
        $p -> ObtenerPorNombre($nombre);
        return $p -> Id;

    }


    public static function VerPublicacion(){

        $p = new PublicacionModelo();
        $publicacion = $p -> ObtenerPublicacionPorId();
        render("verPublicacion", $publicacion);

                      
    }





}
