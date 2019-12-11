<?php

$produits = array(
    'Sopalin',
    'PQ',
    'Liquide Vaiselle')

?>

<form action="" method="post">
<input type="text" name="add" id="add">
<input type="submit" value="add">
</form>

<ul>    
<?php foreach ($produits as $produit) { ?>

    <li><?php echo $produit ?></li> 
    
<?php } 
?>
</ul>

<?php 

    if($_POST['add']):
        
        array_push($produits, $_POST['add']);
    
    endif;


?>

<ul>    
<?php foreach ($produits as $produit) { ?>

    <li><?php echo $produit ?></li> 
    
<?php } 
?>
</ul>

