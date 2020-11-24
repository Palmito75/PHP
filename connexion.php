
<?php

// si la ligne : 'require "connection_bdd.php";', ci-dessous est décommentée, 
// il faut commenter la ligne : '$db = new PDO('mysql:host=localhost;charset=utf8;dbname=hotel', 'root', '');'
// et décommenter la ligne : '$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);'

//Rappel :
//Si vous décommentez la ligne 'require "connection_bdd.php";'ci-dessous, pour tester,
//vous devez commenter les 2 blocs try et catch ci-dessous
//et pensez également dans le fichier 'connection_bdd.php'
//à décommenter les 2 blocs try et catch;

//require "connection_bdd.php";

   try{        
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', '');
        //$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }

   catch (Exception $e) {
        echo "La connection à la base e données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connection ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode(). "<br>";
        die("Fin du script");
  }       
?>
