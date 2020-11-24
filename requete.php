<?php
$requete = ("SELECT * from produits,categories where pro_cat_id = cat_id" )  ;
$result = $db->query($requete);

?>

