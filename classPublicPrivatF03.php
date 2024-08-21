<?php
class Personnage
{

    private $vie = 80;
    private $atk = 20;

    private $nom; //une proprieter priver (private) nes axecible (que par l'interiure de notre class)

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom() // cette fontion getNom() cervira de poi 'accès' a prorieter : private $nom
    {
        return $this->nom;
    }

    public function getVie() // cette fontion getVie() cervira de poi 'accès' a prorieter : private $vie
    {
        return $this->vie;
    }

    // un exemple de  seteure 
    public function setVie($vie) // cette fontion setVie() cervira de poi 'accès' a prorieter : private $vie
    {
        return $this->vie = $vie;
    }

    public function getAtk() // cette fontion getAtk() cervira de poi 'accès' a prorieter : private $atk
    {
        return $this->atk;
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)) {
            $this->vie = 100;
        } else {

            /*$this->vie = $this->vie + $vie; Autre fason d'écrie */
            $this->vie += $vie;
        }
    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    private function empecher_negatif()
    {
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }

    public function attaque($cible)
    {
        $cible->vie -= $this->atk;

        $cible->empecher_negatif();
    }
}
