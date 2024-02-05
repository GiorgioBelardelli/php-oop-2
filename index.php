<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once("./db.php");
    ?>

    <h1>LA NOSTRA LISTA PRODOTTI:</h1>

    <!-- <ul>
        <?php
            foreach($negozio as $prodotti){
        ?>
        <li> 
            <?php 
        echo " " . $prodotti -> getImmagine();
        echo " " . $prodotti -> getTitolo();
        echo " " . $prodotti -> getPrezzo();
        echo " " . $prodotti -> getIconCategory();
        echo " " . $prodotti -> getCategoria() -> getNomeCategoria() ;

            ?>    
        </li>




        <?php
        }
        ?> 
    </ul> -->

    <div class="container d-flex">

        <?php
            foreach($negozio as $prodotti){
        ?>
        
        <div class="card">
            <div class="card-top">
                <div class="img-container">
                    <?php
                        echo $prodotti -> getImmagine();
                    ?>
                </div>
                <div class="title-container">
                    <h3>
                        <?php
                        echo $prodotti -> getTitolo();
                        ?>
                    </h3>
                    <p>
                        <?php
                        // echo $prodotti -> getType();
                        echo "<br>" . $prodotti -> get();
                        ?>
                    </p>
                </div>
            </div>
            <div class="card-bot">
                <div class="category-container">
                    <p>
                        <?php
                        echo $prodotti -> getIconCategory();
                        echo " Pensato per: " . $prodotti -> getCategoria() -> getNomeCategoria();
                        ?>
                    </p>
                </div>
                <div class="price-container">
                    <?php
                        echo $prodotti -> getPrezzo();
                    ?>
                </div>
            </div>
        </div>

        <?php
        }
        ?> 

    </div>
            
</body>