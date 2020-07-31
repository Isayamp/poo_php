<?php

    namespace utilisateur\Utilisateur;

    class Utilisateur
    {
        // Properties
        
        private $nom = "User";
        private $prenom;
        private $mail;
        private $password = "1234ABC";
        private $date_creation;

        // Constructor
        public function __construct($nom, $prenom, $mail, $password)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->password = $password;
            $this->date_creation = date("Y-m-d");;
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

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
    }

    // Methods

    function connection()
    {
        echo "Vous êtes connnectez en tant que {$this->getNom()} et votre mail est {$this->getMail()}";
    }
    
    function deconnection()
    {
        echo "Vous êtes bien déconnecter !";
    }

?>