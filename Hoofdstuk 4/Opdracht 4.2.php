<?php
//auteur: Yusuf Simsek
//functie: dagdeel bepalen op basis van het huidige uur

$uur = date("H");

$dagdeel = match (true) {
    $uur >= 6 && $uur < 12 => "ochtend",
    $uur >= 12 && $uur < 18 => "middag",
    $uur >= 18 && $uur < 24 => "avond",
    default => "nacht"
};

echo "Het is nu $dagdeel.";
?> 