<?php

$produits = array(
    'Sopalin' => 15,
    'PQ' => 4,
    'Liquide Vaiselle' => 6)

?>

<form action="" method="post">
<input type="text" name="qte" id="qte">
<input type="submit" value="Ok">
</form>

<?php 

    if($_POST['qte']):
        
        $key = array_search($_POST['qte'], $produits);

        if($key) {

            echo $key;

        } else {

            echo 'Kaaaath';
        }
        
    
    endif;
?>

