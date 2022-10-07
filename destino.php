<html>
<head>
    <meta charset="utf-8">
    <title>PHP-Post - Heróis</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<section id="image_container">

    <?php

        $repeticao = $_POST["hero_number"]; /*Quantas vezes a imagem vai se repetir*/
        $heroi = $_POST["hero_name"]; /*Nome do herói*/
        $universo = $_POST["hero_universe"]; /*Nome do universo*/

        if ($universo == "marvel" && ($heroi == "oneaboveall" || $heroi == "panteranegra" || $heroi == "homemaranha" || $heroi == "homemdeferro" || $heroi == "capitaoamerica" || $heroi == "homemformiga" || $heroi == "hulk" || $heroi == "visao" || $heroi == "thor" || $heroi == "wolverine")){
            for($x = 1; $x<=$repeticao; $x++){
    ?>          
                
                    <img src='img/marvel/<?php echo $heroi ?>.jpg'> 
                
    <?php
            }
        }
        else if ($universo == "dc" && ($heroi == "batman" || $heroi == "superman" || $heroi == "mulhermaravilha" || $heroi == "ajax" || $heroi == "robin" || $heroi == "flash" || $heroi == "aquaman" || $heroi == "ciborgue" || $heroi == "arqueiroverde" || $heroi == "raionegro")){
            $x=1;
            while($x<=$repeticao){
    ?>      
                <img src='img/dc/<?php echo $heroi ?>.jpg'>
    <?php
            $x++;
            }
        }
        else {
            ?>
            <h1>Universo com herói errado!</h1>
    <?php
        }
    ?>

</section>
</body>
</html>