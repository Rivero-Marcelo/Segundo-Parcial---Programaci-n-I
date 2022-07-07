<?php

require "../utils/autoload.php";


class PublicacionModelo extends Modelo{

    public $idPublicacion;
    public $idAutor;
    public $fechaHora;
    public $cuerpo;



    public function ObtenerPublicaciones(){


        $sql = "SELECT nombreAutor, apellidoAutor, idPublicacion, fechaHora, cuerpo";
        $sql .= " FROM usuario as u, publicacion as p";
        $sql .= " WHERE u.id = p.idAutor ORDER BY fechaHora";
    
        return $publicaciones = $this -> conexionBaseDeDatos -> query($sql)-> fetch_all(MYSQLI_ASSOC);
    
    }






}