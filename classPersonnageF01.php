<?php
//nom de la class ici Personage
class Personnage
{
    //prorierter de notre personage
    public $vie = 80;
    public $atk = 20;

    public $nom; // sans paramter(valeur) par défeau

    //creation de methode
    public function crier()
    {
        echo 'LEEROY JENKINS';
    }

    public function regenerer()
    {
        $this->vie = 100;
    }
}
