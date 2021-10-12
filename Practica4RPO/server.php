<?php
    require_once "lib/nusoap.php";
    function getAnimales($datos){
        if($datos == "Animales"){
            return join(",", array(
                "Hervivoros",
                " Oviparos",
                " Mamifero",
                " Carnivoros"
            ));
        }else{
            return "No existe este animal";
        }
    }
    $server = new soap_server(); //Creamos una instancia de SOAP
    $server->register("getAnimales"); //Indica el método o función a devolver
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA=file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>