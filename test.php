<label for="ville">Ville : </label>

<?php


$req = $db->query("SELECT Ville FROM villes ORDER BY Ville") ;
    
    while ($result = mysql_fetch_array($req)) {
        echo "<OPTION VALUE='$result[0]'>$result[0]</OPTION>\n";
    }
    echo "</SELECT>"; 
mysql_close();

?>


<?php
     $requete = "SELECT cat_nom from categories";
     $result = $db->query($requete);
     while ($row = $result->fetch_array(PDO::FETCH_OBJ)) {
        echo "<OPTION VALUE='$result[0]'>$result[0]</OPTION>\n";

     
     }
     
     $result->closeCursor();
?>

<?php

$sql = "SELECT cat_nom from categories"; // la requête SQL
 
$stmt = $pdo->prepare($sql);
$stmt->execute();
 
        while ( $row = $stmt->fetch() ) { // on récupère une ligne à la fois
            echo $row['...'];
        }
        
        <?php
        $requete = "SELECT cat_nom from categories";
        $result = $db->query($requete);
        while ($row = $result->fetch_array(PDO::FETCH_OBJ)) {
           echo "<OPTION VALUE='$result[0]'>$result[0]</OPTION>\n";
   
        
        }
        
        $result->closeCursor();
   ?>



   