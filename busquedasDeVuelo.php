<?php

require_once ("Buscador.php");

$buscador = new Buscador();

$busquedaPorBarato = $buscador->vueloMasBarato($vuelosJueves);
if($busquedaPorBarato === 0){
    echo "No hay registros";
}else{
    echo "<h3>El vuelo más barato es: <br></h3>" . $busquedaPorBarato . "<br>";
}

$busquedaPorDestino = $buscador->vueloPorDestino($vuelosJueves, "MAD");
if(empty($busquedaPorDestino)){
    echo "No hay registros";
}else{
    echo "<hr><h3>Los vuelos a ese destino, son: <br></h3>";
    foreach($busquedaPorDestino as $vuelo){
        echo $vuelo . "<br>";
    }
}

?>
