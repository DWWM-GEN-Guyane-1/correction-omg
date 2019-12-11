<?php

$produits = array(
    'Sopalin' => 15,
    'PQ' => 4,
    'Liquide Vaiselle' => 6)

?>

<form action="" method="post">
<input type="text" name="nom" id="nom">
<input type="text" name="qte" id="qte">
<input type="submit" value="Ok">
</form>

<?php 

    if($_POST['nom']):
        
        $key = array_key_exists($_POST['nom'], $produits);

        if($key) {

            $produits[$_POST['nom']] = $_POST['qte'];

        } else {

            echo 'Kaaaath';
        }
        
    
    endif;
?>

<ul>    
<?php foreach ($produits as $key => $produit) { ?>

    <li><?php echo $produit.$key ?></li> 
    
<?php } 
?>
</ul>
