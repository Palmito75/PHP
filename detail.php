<?php
include("header.php")
?>

<?php
include("connexion.php")
?>
 
 <?php
 $pro_id=$_GET['pro_id'];
$requeteDetail = "SELECT * from produits INNER JOIN categories where pro_cat_id=cat_id and pro_id=".$pro_id;
$resultDetail = $db->query($requeteDetail);
?>
 

<?php
try {







$row = $resultDetail->fetch(PDO::FETCH_OBJ);

$resultDetail->closeCursor();

}
catch (Exception $e) {
    echo "La connection à la base de données a échoué ! <br>";
    echo "Merci de bien vérifier vos paramètres de connection ...<br>";
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode(). "<br>";
    die("Fin du script");
}   
?>




<body>
    
    <form id ="inscription" action="traitement.php" method="post">
  
     <label for="references">Référence :</label>
     <input type="text" class="form-control" id="reference" value="<?php echo $row->pro_ref ?>" >
     
  



     <label for="libelles">Libellé :</label>
     <input type="text" class="form-control" id="libelle" value="<?php echo $row->pro_libelle;?>" >

     <label for="descriptions">Description :</label>
     <input type="text" class="form-control" id="description" value="<?php echo $row->pro_description; ?>" >

     <label for="prixs">Prix :</label>
     <input type="text" class="form-control" id="prix" value="<?php echo $row->pro_prix; ?>" >

     <label for="stocks">Stock :</label>
     <input type="text" class="form-control" id="stock" value="<?php echo $row->pro_stock; ?>">

     <label for="couleurs">Couleur :</label>
     <input type="text" class="form-control" id="couleur" value ="<?php echo $row->pro_couleur; ?>">

   
     <label for="CheckBox">Produit bloqué ? : </label><br>
    <br><input type="radio"  id="Yes" name="products"> Oui <input type="radio" id="No" name="products"> Non <br>  <br>
   

    <label for="DateAjouts">Date d'ajout :</label>
     <input type="text" class="form-control" id="DateAjout" value="<?php echo $row->pro_d_ajout ?>" >

     <label for="DateModifs">Date de modification :</label>
     <input type="text" class="form-control" id="DateModif" value="<?php echo $row->pro_d_modif ?>" >  <br><br>

</form>
   

   


     
     <a href="tableau.php" class="btn btn-secondary"  role="button" title="formulaire">Retour </a>
     <a href="modif.php?pro_id=<?php echo $row->pro_id  ?>" class="btn btn-warning"  role="button" title="formulaire">Modifier </a>
     <a href="suppr.php?pro_id=<?php echo $row->pro_id  ?>"  class="btn btn-danger" onclick="Suppression();">Supprimer</a>

     <br>
   
     <br>
   <script>
     function Suppression(){ 
     
     //Rappel : confirm() -> Bouton OK et Annuler, renvoit true (OK) ou false (Annuler)
     var resultat = confirm("Etes-vous certain de vouloir supprimer cet enregistrement ?");



  
     if (resultat==false){

     event.preventDefault();

     }
}

</script>




<?php
include("footer.php")
?>
</body>
</html>