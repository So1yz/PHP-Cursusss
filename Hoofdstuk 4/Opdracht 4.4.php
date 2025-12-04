<?php
// auteur: Yusuf Simsek
// functie: prijzen verhogen

$prijs1 = 150;
$oudePrijs = $prijs1;

if ($prijs1 > 150) {
    $prijs1 *= 1.19; // Verhoog met 19%
} elseif ($prijs1 < 55) {
    $prijs1 *= 1.11; // Verhoog met 11%
} else {
    $prijs1 *= 1.16; // Verhoog met 16%
}

print "Oude prijs: €$oudePrijs<br>Nieuwe prijs: €" . round($prijs1, 2);
?>
