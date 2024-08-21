<p>Video Programation Orienter Object 04</p>
<p>La visibilité Pulic / Private </p>
<p>
    - On utilise priver pour faciliter la conpreention du code par des tier (autre developeur ou colaborateur) <br>
    - Pour indique se qui peut ou ne peux pas être modifier. <br>
    - Aventage private permet des créer des méthode (fonction) juste pour resoudre un probleme doner a linterieur de notre class. <br>
</p>
<?php
require "classPublicPrivatF03.php";

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");

echo $merlin->getNom(); //On utilise ici la fontion getNon pour accéder a la proprieter

//$harry->vie = 10;

$harry->setVie('10');

$merlin->attaque($harry);

echo "<br>";

if ($harry->mort()) {
    echo "Harry est mort :( ";
} else {
    echo "Harry a survecue: Avec " . $harry->getVie() . " poin de vie.";
}

echo "<br>" . $harry->getVie();

// ici vardup sur les deux personnage
var_dump($merlin);
var_dump($harry);
