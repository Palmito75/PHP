<?php 
//dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

//récupération des informations passées en POST, nécessaires à la modification

$reference_produit=$_POST['Refs'];
$reference_ID=$_POST['ID'];
$reference_ID=$_POST['price'];



//**********     connection à la base de données    **********

// si la ligne : 'require "connection_bdd.php";', ci-dessous est décommentée, 
// il faut commenter la ligne : '$db = new PDO('mysql:host=localhost;charset=utf8;dbname=hotel', 'root', '');'
//et décommenter la ligne : '$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);'

//require "connection_bdd.php";

try{        
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', '');
    //$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}  

//construction de la requête UPDATE sans injection SQL


$requete = $db->prepare("INSERT INTO produits SET pro_ref=:pro_ref  WHERE pro_id=:pro_id");

$requete->bindValue(':pro_ref', $reference_produit, PDO::PARAM_STR);
$requete->bindValue(':pro_id', $reference_ID, PDO::PARAM_INT);
$requete->bindValue(':pro_id', $reference_ID, PDO::PARAM_STR);




$requete->execute();

//libère la connection au serveur de BDD
$requete->closeCursor();

//redirection vers la page index.php 
header("Location: tableau.php");

?>