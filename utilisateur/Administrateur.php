<?php

    namespace Utilisateur\Administrateur;
    use Utilisateur\Utilisateur\Utilisateur;
    require_once "Utilisateur/Utilisateur.php";

    class Administrateur extends Utilisateur
    {
        // Property
        private $code_secret = "Isy@2020";
        //const DAETE = date(Y-m-d);

        // Constructor
        public function __construct()
        {
            // code
        }

    
        // Setter and Getter
        public function getCode_secret()
        {
                return $this->code_secret;
        }
 
        public function setCode_secret($code_secret)
        {
                $this->code_secret = $code_secret;

                return $this;
        }

        // Methods

        public function ajouterUtilisateur($name)
        {
            $name = new Utilisateur();
            echo "New user added successfully ! <br/>";
        }

        public function supprimerUtilisateur($name)
        {
            $name = null;

        }
    }
    


?>