<?php
require_once("./Models/traits.php");
require_once("./Models/prodotto.php");
require_once("./Models/categoria.php");
require_once("./Models/giochi.php");
require_once("./Models/cibo.php");
require_once("./Models/cucce.php");


$categoriaCani = new Categoria("Cani");
$categoriaGatti = new Categoria("Gatti");
try{
    $negozio = [
        
        $prodotto1 = new Cibo("imgprod1", "Nutrix+", 13.99, "icon1", "tipo", $categoriaCani, "1kg"),
        $prodotto2 = new Giochi ("imgprod2", "BoneGioco", 16.99, "icon2", "tipo", $categoriaCani, "osso"),
        $prodotto3 = new Cibo("imgprod3", "Ultima", 11.99, "icon3", "tipo", $categoriaGatti, "0,5kg"),
        $prodotto4 = new Giochi ("imgprod4", "FishGioco", 10.99, "icon4", "tipo", $categoriaGatti, "pesce"),
        $prodotto5 = new Cucce("imgprod5", "CucciaPlanet", 3.99, "icon5", "tipo", $categoriaCani, "arcaplanet"),

    ];

} catch (Exception $e) {

    echo "Errore nella creazione dell'utente 1: " . $e -> getMessage();
}









?>