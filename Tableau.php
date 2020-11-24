<?php
include("header.php")
?>


<!-- **********     connection à la base de données    ********** -->

<!-- 
host : adresse du serveur hébergeant la base de données (localhost ou votre serveur web)
dbname : nom de la base de données
charset : jeu de caractères utilisé
root : nom de l'utilisateur de la base de données, par exemple root
'' : Password
 -->

 <?php

include("connexion.php")    
?>

<!-- **********     construction d'une requête    **********      -->
<?php
include("requete.php")
?>
  
  


 
   <section>
  
  
    <div class="row">
   <div class="col-lg-12">
    
    <table class="table table-bordered">
      <thead>
        <tr>
        <th class="table-active">Photo</th>
          <th class="table-active">ID</th>
          <th class="table-active">Référence</th>
          <th class="table-active">Libellé</th>
          <th class="table-active">Prix</th>
          <th class="table-active">Stock</th>
          <th class="table-active">Couleur</th>
          <th class="table-active">Ajout</th>
          <th class="table-active">Modif</th>
          <th class="table-active">Bloqué</th>
        </tr>
</div>
</div>
      </thead>
   
     <?php while ($row = $result->fetch(PDO::FETCH_OBJ)) 
{ ?>

   
    <tbody>
       <tr>
        
         <td class="table-warning"><img src="public\images\bbq.jpg"  alt="jarditou_logo" height="50px" ></td>
         <td class="table-active"><?php echo $row->pro_id ?></td>
         <td class="table-active"><?php echo $row->pro_ref ?></td>
         <td class="table-warning"><a class="nav-link" href="detail.php?pro_id=<?php echo $row->pro_id;?>"><?php echo $row->pro_libelle ?></a></td>
         <td class="table-active"><?php echo $row->pro_prix ?></td>
         <td class="table-active"><?php echo $row->pro_stock ?></td>
         <td class="table-active"><?php echo $row->pro_couleur ?></td>
         <td class="table-warning"><?php echo $row->pro_d_ajout ?></td>
         <td class="table-active"><?php echo $row->pro_d_modif ?></td>
         <td class="table-active"><?php echo $row->pro_bloque ?></td>
       </tr>

     </tbody>
     
     </section>
     
    <?php
    

}
 // sert à finir proprement une série de fetch(), libère la connection au serveur de BDD
     $result->closeCursor();
?>

</table>

<a href="ajout.php" class="btn btn-info"  role="button" title="formulaire">Ajout </a>





<?php 
include("footer.php")
?>

   </body>

</html>


