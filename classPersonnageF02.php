<?php
//nom de la class ici Personage
class Personnage
{
    //proriété de notre personage
    public $vie = 80;
    public $atk = 20;
    public $nom; // sans paramter(valeur) par défeau

    //creation du contructeur (exitant par defeau sur tout les ojets)
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    //creation de methode
    public function crier()
    {
        echo 'LEEROY JENKINS';
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

    /*
    *  execie auto corection.
    *  creer une fontion qui verifie si un personage et mort
    *  le nom de cete doit etre mort
    */
    public function mort()
    {
        return $this->vie <= 0;
    }

    /*
    *   Dans le parametre de la fonction nous pouvons passer (envoyer) ce que l'on veux
    *   Nous ne sommes pas obligés de paser que des varibles.
    *   Nous pouvons passer envoyer des objet.
    *   !!! ATENTION !!! a la posibiliter d'un chagemen de variable
    */

    public function attaque($cible)
    {
        var_dump($cible); // Permet d'illustrer le fait que la cible soit:Notre ojet $harry Harry

        // Ecriture a eviter
        //$cible = $this->vie = 30; //!!! ATENTION !!! l'utilisati de $this->vie=20. Modifi la propriété (varible generale)

        //on modifie la vie de la cible 
        // $cible->vie = 20; //!!! ATENTION !!! N'utilise pas la valeur propriété : atk Mes modifi la valeur :vie de la cible

        $cible->vie -= $this->atk;
    }
}
