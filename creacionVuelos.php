<?php

require_once("Vuelo.php");

$vuelo1 = new Vuelo("BCN", "MAD", 95.40, 90, "IBERIA");
//var_dump($vuelo1);
$vuelo2 = new Vuelo("VLC","MAD", 45.30, 60, "RYANAIR");
$vuelo3 = new Vuelo("AGP", "SVQ", 50.99, 100, "IBERIA");
$vuelo4 = new Vuelo("PMI", "BIO", 120.40, 110, "VUELING");

$vuelosJueves = [$vuelo1, $vuelo2, $vuelo3, $vuelo4];


?>