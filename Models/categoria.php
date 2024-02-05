<?php
class Categoria {

    private $nomeCategoria;

    public function __construct($_nomeCategoria){
        
        $this -> setNomeCategoria($_nomeCategoria);

    }

    public function setNomeCategoria($nomeCategoria){
        $this -> nomeCategoria = $nomeCategoria;
    }
    public function getNomeCategoria(){
        return $this -> nomeCategoria;
    }

};