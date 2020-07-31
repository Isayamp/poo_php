<?php 

    use Utilisateur\Utilisateur\Utilisateur;
    use Utilisateur\Utilisateur\Administrateur;
    require_once "Utilisateur/Utilisateur.php";
    require_once "Utilisateur/Administrateur.php";
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
        echo "<h1>PHP orienté Object<br/></h1>";

        $User1 = new Utilisateur;
        
        echo "$User1->connection()";

    ?>

</body>
</html>