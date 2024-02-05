<?php


class Giochi extends Prodotto{
    private $tipo;

    public function __construct($immagine, $titolo, $prezzo, $iconCategory, $type, $categoria, $_tipo){
        parent:: __construct($immagine, $titolo, $prezzo, $iconCategory, $type, $categoria);
        $this-> setTipo($_tipo);
    }

    //SET
    public function setTipo($tipo){
        $this -> tipo = $tipo;
    }
    //GET
    public function get(){
        return $this-> tipo;
    }
}