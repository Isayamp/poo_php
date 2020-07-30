<?php

    namespace Utilisateur\Administrateur\Administrteur;
    use Utilisateur\Utilisateur\Utilisateur;
    // require_once 'Utilisateur/Utilisateur.php';

    class Administrateur extends Utilisateur
    {
        // Property
        private $code_secret = "Isy@2020";

        // Constructor
        public function __construct()
        {
            // code
        }

        // Methods

        public function ajouterUtilisateur($name)
        {
            $this->$name = new Utilisateur;
            echo "New user added successfully ! <br/>";
        }

        public function supprimerUtilisateur($name)
        {
            $name = null;
        }

        /**
         * Get the value of code_secret
         */ 
        public function getCode_secret()
        {
                return $this->code_secret;
        }

        /**
         * Set the value of code_secret
         *
         * @return  self
         */ 
        public function setCode_secret($code_secret)
        {
                $this->code_secret = $code_secret;

                return $this;
        }
    }
    


?>