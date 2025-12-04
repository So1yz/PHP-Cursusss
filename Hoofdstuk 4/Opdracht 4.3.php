<?php
//auteur: Yusuf Simsek
//functie: berekening met twee getallen

$a = 17;
$b = 9;

if ($a > $b) {
    $groot = $a;
    $klein = $b;
} else {
    $groot = $b;
    $klein = $a;
}

$uitkomst = ($groot * 2) + $klein;

echo "Uitkomst: $uitkomst";
