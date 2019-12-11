<?php

$array = [
    "sonia" => "saugrin",
    "naima" => "cimper",
];

if(array_key_exists($_POST['login'], $array) ) {

    if($_POST['pwd'] == $array[$_POST['login']]) { ?>

        <a href="list-produit.php"> Lister les produits </a>
        
 <?php   }
  
} else { ?>

<p>N'existe pas</p>

<?php }