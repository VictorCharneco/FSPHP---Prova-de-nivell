<?php

require_once("Vuelo.php");


    function vueloMasBarato(array $vuelos): ?Vuelo{
    if(empty($vuelos)){
        return null;
    }
    $vueloChollo= $vuelos[0];
    foreach($vuelos as $vuelo){
        if($vuelo->getPrecio() < $vueloChollo->getPrecio()){
            $vueloChollo = $vuelo;
        }
    }
    return $vueloChollo;
}

function vueloPorDestino(array $vuelos, string $destino):array{
    if(empty($vuelos)){
        return [];
    }
    $resultado = [];
    foreach($vuelos as $vuelo){
        if(strtolower($vuelo->getDestino()) === strtolower($destino)){
            $resultado[] = $vuelo;
        }
    }
    return $resultado;
}

?>