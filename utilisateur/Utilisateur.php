<?php

    namespace utilisateur\Utilisateur;

    /**
     *  Trait
     */
    trait mainOption
    {
        function connection()
        {
                echo "Vous êtes connnectez en tant que {$this->getNom()} et votre mail est {$this->getMail()}";
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
        private $date_creation;

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

        // Call ao Trait in the class
        use mainOption;

        // Methods

        function changePassword($_password)
        {
                $this->password = setPassword($_password);
        }
    }

?>