<?php 

    // inclusion des classes
    use Devoir_oop_php_Isaya\Utilisateur\Utilisateur\Utilisateur;
    use Devoir_oop_php_Isaya\Utilisateur\Administrateur\Administrateur;
    require_once ("Utilisateur/Utilisateur.php");
    require_once ("Utilisateur/Administrateur.php");  
    
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

        $User1->setPassword("NNNNNXXX"); // Change password
        echo "Votre nouveau mot de passe est {$User1->getPassword()} <br/>"; // Print new password
        echo "La date de votre inscription est {$User1->getDate_creation()} <br/>"; // Aficher la date d'inscription

        $User1->deconnection(); // User deconnection

        echo "<br/><br/>";

        $Admin1 = new Administrateur(); // New object Admin1

        // Definition of Admin1 properties
        $Admin1->setNom("Daniel");
        $Admin1->setPrenom("Byaombe");
        $Admin1->setMail("DanBya@tuto.com");

        $Admin1->connection();

        echo "Votre code secret pour adminitrateur est : <b>{$Admin1->getCode_secret()}</b> <br/>";

        $Admin1->ajouterUtilisateur($User4); // New user created by Admin1
        $Admin1->supprimerUtilisateur("User4"); // New user dropped by Admin1
        $Admin1->verifierUtilisateur($User1); // Check an existance of user by admin

        $Admin1->connection();

    ?>
</body>
</html>