<?php

    namespace Utilisateur\Administrateur\Administrateur;
    use Utilisateur\Utilisateur\Utilisateur;
    require_once "Utilisateur/Utilisateur.php";

    class Administrateur extends Utilisateur
    {
        // Property
        private $code_secret;

        // Constructor
        public function __construct($nom, $prenom, $mail)
        {
            $this->code_secret = "A2-1";
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
            $name = new Utilisateur("Sephani", "Mledja", "se.mle@yopmail.com");
            echo "New user added successfully ! <br/>";
        }

        public function supprimerUtilisateur(Utilisateur $name)
        {
            $name = null;

        }

        public function verifierUtilisateur($name)
        {
            if (is_object($User)) {
                echo "L'utilisateur exixte ! <br/>";
            } else {
                echo "L'utilisateur n'exixte pas ! <br/>";
            }
            
        }
    }
    


?>