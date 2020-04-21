<?php

require_once("autoload.php");

use exo\AdvancedString;
use exo\Point;

// exo transfo de style
$internalString = new AdvancedString("Programmation orientée objet en PHP");
echo $internalString->bold() . "\n";
echo $internalString->italic() . "\n";
echo $internalString->underline() . "\n";
echo $internalString->upperCase() . "\n";

// exo points x et y
$p1 = new Point(0, 0);
$p2 = new Point(0, 5);

echo "P1:" . $p1;
echo "\n==============\n";
echo "P2:" . $p2;
echo "\n Distance p1 à p2: " . $p1->distance($p2);
