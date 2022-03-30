<?php

class User    
{
    //Propriétés
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    //méthodes
    public function __construct($pseudo, $email, $signature) 
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->signature = $signature;
        $this->actif = true;
    }
    public function __destruct() 
    {
        echo "Destruct  de " . $this->pseudo . " !";
    }



    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($newPseudo)
    {
        if (!empty($newPseudo) and strlen($newPseudo) < 10 ) {
            $this->pseudo = $newPseudo;
        } else {
            echo" <p> Le pseudo est trop court où trop long </p> ";
        }
    }

    

    
    public function setEmail($newEmail)
    {
        if (!empty($newEmail) and strlen($newEmail) < 100 ) {
            $this->email = $newEmail;
        } else {
            echo" <p> L'email est trop court où trop long </p> ";
        }
    }
    public function envoyerEmail ($titre, $message)
    {
        return mail($this->email, $titre, $message);
    }
    public function bloquer() 
    {
        $this->actif = false;
        $this->envoyerEmail("Alert user !", "Vous étes bloqué !");
    }
}