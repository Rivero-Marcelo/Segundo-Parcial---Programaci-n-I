<?php
require "../utils/autoload.php";


class PublicacionModelo extends Modelo{

    public $idPublicacion;
    public $idAutor;
    public $fechaHora;
    public $cuerpo;

    public function ObtenerPublicaciones(){
     $sql = "SELECT username, idPublicacion, fechaHora";
     $sql .= " FROM usuario as u, publicacion as p";
     $sql .= " WHERE u.id = p.idAutor ORDER BY fechaHora";
    
        return $publicaciones = $this -> conexionBaseDeDatos -> query($sql)-> fetch_all(MYSQLI_ASSOC);  
    }

    public function ObtenerPublicacionPorId(){
        $sql = "SELECT nombreAutor, apellidoAutor, idPublicacion, fechaHora, cuerpo";
        $sql .= " FROM usuario as u, publicacion as p";
        $sql .= " WHERE p.idPublicacion = " . $_POST['idPublicacion']; 
        $sql .= " AND p.idAutor = u.id";

        return $publicacion = $this-> conexionBaseDeDatos -> query($sql) -> fetch_assoc();
    }


    public function Guardar(){
        if($this -> idPublicacion == NULL) return $this -> insertar();
        else $this -> actualizar();
    }

    private function insertar(){
        $sql = "INSERT INTO publicacion (idAutor,fechaHora,cuerpo) VALUES (
            '" . $this -> idAutor . "',
            '" . $this -> fechaHora . "',
            '" . $this -> cuerpo . "')";

      if($this -> conexionBaseDeDatos -> query($sql)){
        return true;
         }else return false;   
    }





    private function actualizar(){

        // no implementado


    }






}