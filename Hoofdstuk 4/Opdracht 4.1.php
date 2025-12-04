<?php
//auteur: Yusuf Simsek
//functie: dagdeel bepalen op basis van het huidige uur

$uur = date("H");
$dagdeel = "";

if ($uur >= 6 && $uur < 12) {
    $dagdeel = "ochtend";
} elseif ($uur >= 12 && $uur < 18) {
    $dagdeel = "middag";
} elseif ($uur >= 18 && $uur < 24) {
    $dagdeel = "avond";
} else {
    $dagdeel = "nacht";
}

echo "Het is nu $dagdeel.";
?>