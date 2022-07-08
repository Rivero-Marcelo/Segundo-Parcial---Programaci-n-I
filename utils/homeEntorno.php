<?php 

function Entorno(){

if(isset($_SESSION['autenticado'])){
    
    $entorno = [
        "nologueado" => "hidden",
        "logueado" => "",
        "desactivado" => "",
        "usuario" => $_SESSION['nombreUsuario'],
    ];
    }else{
        $entorno = [
            "nologueado" => "",
            "logueado" => "hidden",
            "desactivado" => "disabled",
        ];
        
        }
        return $entorno;
    }

