<?php // “Utiliser” des classes situées dans un namespace

// appel classe et fichiers.
require_once("autoload.php");

use exo\User;

// déplacement du code qui crée  l'objet et appelle la méthode.
$raph = new User("Raphaelle", "Petipotame");

echo $raph->displayUser();
