<?php

class Prodotto {

    private $immagine;
    private $titolo;
    private $prezzo;
    private $iconCategory;
    private $type;
    private $categoria;

    public function __construct($_immagine, $_titolo, $_prezzo, $_iconCategory, $_type, $_categoria) {

        $this -> setImmagine($_immagine);
        $this -> setTitolo($_titolo); 
        $this -> setPrezzo($_prezzo);
        $this -> setIconCategory($_iconCategory);
        $this -> setType($_type);
        $this -> setCategoria($_categoria);
        
    }


    //SET 
    public function setImmagine($immagine){
        $this -> immagine = $immagine;
    }
    public function setTitolo($titolo){

        if (!is_string($titolo) || strlen($titolo) < 3)
                throw new Exception("$titolo is not a valid titolo");

            $this -> titolo = $titolo;
    }
    public function setPrezzo($prezzo){
        $this -> prezzo = $prezzo;
    }
    public function setIconCategory($iconCategory){
        $this -> iconCategory = $iconCategory;
    }
    public function setType($type){
        $this -> type = $type;
    }
    public function setCategoria($categoria){
        $this -> categoria = $categoria;
    }


    //GET
    public function getImmagine(){
        return $this -> immagine;
    }
    public function getTitolo(){
        return $this -> titolo;
    }
    public function getPrezzo(){
        return $this -> prezzo . "$";
    }
    public function getIconCategory(){
        return $this -> iconCategory;
    }
    public function getType(){
        return $this -> type;
    }
    public function getCategoria(){
        return $this -> categoria;
    }

    //POLIGET
    protected function get(){
       return "Nulla";
    }
}