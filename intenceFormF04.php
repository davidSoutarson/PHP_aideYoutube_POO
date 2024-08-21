<p> video Programation Orienter Object 05</p>
<p>cas concres creation de formulaire</p>
<?php
require 'classFormF04.php';



$form = new Form($_POST);
?>

<form action="#" method="$_POST">

    <?php

    echo $form->input('username'); //$form->input('nom du champ');
    echo $form->input('name');
    echo $form->input('firstname');

    echo $form->submit();

    ?>

</form>
<?php
echo "<hr> Un deusime formulaire partie a dupliquer (suprimer pour bon fonctionnemant) teste <hr>";

$form = new Form(array(

    'username' => 'Roger'

));

/* var_dump($form);
die(); */

echo $form->input('username'); //$form->input('nom du champ');
echo $form->input('name');
echo $form->input('firstname');
echo $form->input('pasword');
echo $form->input('emaile');

echo $form->submit();

echo "<hr> 3eme formulaire meto post <hr>";

$form = new Form();

echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');

echo $form->submit();


?>