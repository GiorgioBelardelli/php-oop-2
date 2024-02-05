<?php

class Cibo extends Prodotto{
    private $peso;

    public function __construct($immagine, $titolo, $prezzo, $iconCategory, $type, $categoria, $_peso){
        parent:: __construct($immagine, $titolo, $prezzo, $iconCategory, $type, $categoria);
        $this-> setPeso($_peso);
    }

    //SET
    public function setPeso($peso){
        $this -> peso = $peso;
    }
    //GET
    // public function getPeso(){
    //     return $this -> peso;
    // }

    public function get(){
        return $this-> peso;
    }
}