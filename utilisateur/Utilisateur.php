<?php

    namespace utilisateur\Utilisateur\Utilisateur;

    class Utilisateur
    {
        // Properties
        
        private $nom;
        private $prenom;
        private $mail;
        private $password;

        // Constructor
        public function __construct($nom, $prenom, $mail, $password)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->password = $password;
        }

        // Getters & Setters functions

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of mail
         */ 
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