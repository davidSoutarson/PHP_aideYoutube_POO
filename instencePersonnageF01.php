<p> video Programation Orienter Object 01 </p>
<p> video Programation Orienter Object 02 </p>
<p> video Programation Orienter Object 03 partie 1 </p>
<?php
require "classPersonnageF01.php";

//on l'instencie (ou creation de nouveau personage/objet)
#01 fason 
$merlin = new Personnage();

#01 fason 
$merlin->nom  = "Merlin"; //php autorise définition des prorierter a la voler (A EVITER MANQUE DE CLATER)

// axedes au propieter d'un ojet
var_dump($merlin);

var_dump($merlin->vie);

var_dump($merlin->atk);

var_dump($merlin->crier());

var_dump($merlin->regenerer());

//nous avons un de siéme pérsonage distin (objet difer mes partagen la class personage)
$harry = new Personnage();

#01 fason 
$harry->nom  = "Harry"; //php autorise définition des prorierter a la voler (A EVITER MANQUE DE CLATER)

var_dump($merlin);

// icie la vie de harie nes pas regenere
var_dump($harry);
