<?php

require "../utils/autoload.php";

class PublicacionControlador{


    

    


    public static function ListarTodos(){

        $p = new PublicacionModelo();
        return $publicaciones = $p -> ObtenerPublicaciones();

    }




}
