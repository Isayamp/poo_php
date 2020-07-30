<?php

    namespace utilisateur\Utilisateur\Utilisateur;

    class Utilisateur
    {
        // Properties
        
        private $nom;
        private $prenom;
        private $mail;
        private $password;

        public function __construct($nom, $prenom, $mail, $password)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->password = $password;
        }
    }
    

?>