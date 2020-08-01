<?php

    namespace Devoir_oop_php_Isaya\Utilisateur\Utilisateur;

    /**
     *  Trait
     */
    trait mainOption
    {
        function connection()
        {
                echo "Vous êtes connnectez en tant que <b>{$this->getNom()}</b> et votre mail est <b>{$this->getMail()}</b> <br/>";
        }
        
        function deconnection()
        {
                echo "Vous êtes bien déconnecter !";
        }
    }
    

    class Utilisateur
    {
        // Properties
        
        private $nom;
        private $prenom;
        private $mail;
        private $password;
        protected $date_creation;

        // Constructor
        public function __construct($nom, $prenom, $mail)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->password = "1234ABC";
            $this->date_creation = date("d-m-Y");;
        }

        // Getters & Setters functions

        public function getNom()
        {
                return $this->nom;
        }
 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        public function getPrenom()
        {
                return $this->prenom;
        }

        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        public function getMail()
        {
                return $this->mail;
        }


        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }

        public function getPassword()
        {
                return $this->password;
        }

        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
        
        public function getDate_creation()
        {
                return $this->date_creation;
        }

        // Call of Trait mainOption in the class
        use mainOption;
        
    }

?>