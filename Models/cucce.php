<?php

class Cucce extends Prodotto{
    private $marca;

    public function __construct($immagine, $titolo, $prezzo, $iconCategory, $type, $categoria, $_marca){
        parent:: __construct($immagine, $titolo, $prezzo, $iconCategory, $type, $categoria);
        $this-> setMarca($_marca);
    }

    //SET
    public function setMarca($marca){
        $this -> marca = $marca;
    }
    //GET
    // public function getMarca(){
    //     return $this -> marca;
    // }

    public function get(){
        return $this-> marca;
    }
}