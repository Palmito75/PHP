<?php
include("header.php")
?>


<?php
include("connexion.php")
?>

<!-- construction d'une requête -->

<?php

$pro_id=$_GET['pro_id'];//récupération de l'identifiant envoyé en méthode Get --> dans l'URL

// construction de la requête
$requeteDetail = "SELECT * from produits INNER JOIN categories where pro_cat_id=cat_id and pro_id=".$pro_id;
$resultDetail = $db->query($requeteDetail);


$row = $resultDetail->fetch(PDO::FETCH_OBJ);
//libère la connection au serveur de BDD
$resultDetail->closeCursor();
 
 ?>

<div>





<!-- action ="http://bienvu.net/script.php" pour tester le passage des informations à traiter -->
<form action ="script_modif.php" method="post">

    <div>
         
    <label for="references">ID :</label>
     <input type="text" class="form-control" id="Identifiant" name="ID" value="<?php echo $row->pro_id ?>" >
  
        <label for="references">Référence :</label>
     <input type="text" class="form-control" id="reference" name="Refs" value="<?php echo $row->pro_ref ?>" >
     
     <label for="Catégorie">Catégorie :</label>
     <input type="text" class="form-control" id="libelle" name="Catégo" value="<?php echo $row->cat_nom;?>" >

     <label for="libelles">Libellé :</label>
     <input type="text" class="form-control" id="libelle" name="Libel" value="<?php echo $row->pro_libelle;?>" >

     <label for="descriptions">Description :</label>
     <input type="text" class="form-control" id="description" name="Descript" value="<?php echo $row->pro_description; ?>" >

     <label for="prixs">Prix :</label>
     <input type="text" class="form-control" id="prix" name="price" value="<?php echo $row->pro_prix; ?>" >

     <label for="stocks">Stock :</label>
     <input type="text" class="form-control" id="stock" name="stocks" value="<?php echo $row->pro_stock; ?>">

     <label for="couleurs">Couleur :</label>
     <input type="text" class="form-control" id="couleur" name="color" value ="<?php echo $row->pro_couleur; ?>">

   
     <label for="CheckBox">Produit bloqué ? : </label><br>
    <br><input type="radio"  id="Yes" name="products"> Oui <input type="radio" id="No" name="products"> Non <br>  <br>
   

    <label for="DateAjouts">Date d'ajout :</label>
     <input type="text" class="form-control" id="DateAjout" name="Date" value="<?php echo $row->pro_d_ajout ?>" >

     <label for="DateModifs">Date de modification :</label>
     <input type="text" class="form-control" id="DateModif" name="ModifDate" value="<?php echo $row->pro_d_modif ?>" >  <br><br>

    <br>

    
</form>
<a href="tableau.php" class="btn btn-secondary"  role="button" title="formulaire">Retour </a>
<input type="submit" value="Enregistrer" class ="btn btn-success" onclick="verif();">



<script>

//vérifie si on envoit ou non le formulaire à "script_modif.php"
function verif(){ 

    //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir modifier cet enregistrement ?");

    //alert("retour :"+ resultat);

    if (resultat==false){

    alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cet enregistrement !");

    //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
    event.preventDefault();    

    }

    
}



</script>


<?php
include("footer.php")
?>


    
</body>
</html>