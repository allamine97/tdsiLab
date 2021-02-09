<?php

class Etudiant {
    
    private $numCarte;
    private $nom;
    private $prenom;
    private $email;
    private $photo;
    private $motDePasse;
    

    public function getNom()
    {
        return $this->nom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getNumCarte()
    {
        return $this->numCarte;
    }
    
    public function getPhoto()
    {
        return $this->photo;
    }
    
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }
    
    public function setNom($nom)
    {
        if ($nom != '') {
            $this->nom = $nom;
        }
    }
    
    public function setPrenom($prenom)
    {
        if ($prenom != '') {
            $this->prenom = $prenom;
        }
    }
    
    public function setEmail($email)
    {
        if ($email != '') {
            $this->email = $email;
        }
    }
    
    public function setNumCarte($numCarte)
    {
        if ($numCarte != '') {
            $this->numCarte = $numCarte;
        }
    }
    
    public function setPhoto($photo)
    {
        if ($photo != '') {
            $this->photo = $photo;
        }
    }
    
    public function setMotDePasse($motDePasse)
    {
        if ($motDePasse != '') {
            $this->motDePasse = $motDePasse;
        }
    }

    public  function __construct() {
        
    }
    
    
}