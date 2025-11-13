<?php

require_once ("Vuelo.php");

$vuelo1 = new Vuelo("BCN", "MAD", 95, 90, "IBERIA");
//var_dump($vuelo1);
$vuelo2 = new Vuelo("VLC","MAD", 45, 60, "RYANAIR");
$vuelo3 = new Vuelo("AGP", "SVQ", 50, 100, "IBERIA");
$vuelo4 = new Vuelo("PMI", "BIO", 120, 110, "VUELING");

$vuelosJueves = [$vuelo1, $vuelo2, $vuelo3, $vuelo4];

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

$busquedaPorBarato = vueloMasBarato($vuelosJueves);
if($busquedaPorBarato === 0){
    echo "No hay registros";
}else{
    echo "<h3>El vuelo más barato es: <br></h3>" . $busquedaPorBarato . "<br>";
}

$busquedaPorDestino = vueloPorDestino($vuelosJueves, "MAD");
if(empty($busquedaPorDestino)){
    echo "No hay registros";
}else{
    echo "<hr><h3>Los vuelos a ese destino, son: <br></h3>";
    foreach($busquedaPorDestino as $vuelo){
        echo $vuelo . "<br>";
    }
}

?>