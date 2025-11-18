<?php

class Vuelo{
    private string $origen;
    private string $destino;
    private int $precio;
    private string $duracion;
    private string $companyia;

    public function __construct($origen, $destino, $precio, $duracion, $companyia){
        $this->origen=$origen;
        $this->destino=$destino;
        $this->precio=$precio;
        $this->duracion=$duracion;
        $this->companyia=$companyia;
    }

    public function getDestino():string{
        return $this->destino;
    }

    public function getPrecio():int{
        return $this->precio;
    }

    public function __toString(){
        return "<b>INFO VUELO:</b><br>
                Origen: $this->origen <br>
                Destino: $this->destino <br>
                Precio: $this->precio <br>
                Duración: $this->duracion <br>
                Compañía: $this->companyia <br>";
    }

}


?>