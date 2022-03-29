<?php

class User    
{
    //Propriétés
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    //méthodes

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

    

    public function envoyerEmail ($titre, $message)
    {
        mail($this->email, $titre, $message);
    }
    public function setEmail($newEmail)
    {
        if (!empty($newEmail) and strlen($newEmail) < 100 ) {
            $this->email = $newEmail;
        } else {
            echo" <p> L'email est trop court où trop long </p> ";
        }
    }
}