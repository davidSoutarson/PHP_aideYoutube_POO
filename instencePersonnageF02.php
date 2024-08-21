<p> video Programation Orienter Object 01</p>
<p> video Programation Orienter Object 02</p>
<p> video Programation Orienter Object 03 partie 2</p>
<?php
require "classPersonnageF02.php";

//on l'instencie (ou creation de nouveau personage/objet)
#02 fason 
$merlin = new Personnage("Merlin"); // Le contenue des parentse font apelle a un contructeur

//icie on axedes au propieter d'un l'ojet (Personnage merlin)
$merlin->regenerer(5);


//nous avons un deuxiéme pérsonage distinct (objet diferent mes partagen la class personage)

$harry = new Personnage("Harry"); // Le contenue des parentse font apelle a un contructeur

$harry->mort(); // false ci le personnage est vivent et trou si le personage et morts

//icie on axedes au propieter de l'ojet (Personnage harry)

//$harry->vie = 0;//Teste presedant fontionnel 
//$harry->regenerer();//Teste presedant fontionnel 

$merlin->attaque($harry);

if ($harry->mort()) {
    echo "Harry est mort :( ";
} else {
    echo "Harry a survecue: Avec " . $harry->vie . " poin de vie.";
}

// ici vardup sur les deux personnage
var_dump($merlin);
var_dump($harry);

var_dump($harry->mort());
