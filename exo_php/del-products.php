<?php

$produits = array(
    'Sopalin',
    'PQ',
    'Liquide Vaiselle')

?>

<form action="" method="post">
<input type="text" name="nom" id="nom">
<input type="submit" value="Ok">
</form>

<?php 

    if($_POST['nom']):
        
        $key = array_search($_POST['nom'], $produits);

        if($key) {

            unset($produits[$key]);

        } else {

            echo 'Kaaaath';
        }
        
    
    endif;
?>

<ul>    
<?php foreach ($produits as $key => $produit) { ?>

    <li><?php echo $produit ?></li> 
    
<?php } 
?>
</ul>
