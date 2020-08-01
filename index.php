<?php 
    use Utilisateur\Utilisateur\Utilisateur;
    use Utilisateur\Administrateur\Administrateur;
    require_once "Utilisateur/Administrateur.php";  
    require_once "Utilisateur/Utilisateur.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoir_oop_php_prénom</title>
</head>
<body>
    <?php
        echo "<h1>PHP Orienté Object<br/></h1>";

        $User1 = new Utilisateur("Isaya", "Pombo", "isayamp@icloud.com"); // Creation d'un objet utilisateur
        
        echo "{$User1->connection()} <br/>"; // User1 connection

        echo "Votre mot de passe par defaut est {$User1->getPassword()} <br/>"; // Printing of default user password

        // $User1->changePassword("T0CO7@");
        $User1->setPassword("NNNNNXXX");
        echo "Votre nouveau mot de passe est {$User1->getPassword()} <br/>";
        echo "La date de votre inscription est {$User1->getDate_creation()} <br/>"; // Aficher la date d'inscription

        $User1->deconnection();


        //echo "\n\n";

        //$Admin1 = new Administrateur(/* "Daniel", "Mwanga", "dan.mwa@live.com" */);
        $Admin1 = new Administrateur("Matine", "Mlela", "Yz6#è");

        $Admin1->setNom("Daniel");
        $Admin1->setPrenom("Byaombe");
        $Admin1->setMail("Daniel");

        $Admin1->connection();
    ?>
</body>
</html>