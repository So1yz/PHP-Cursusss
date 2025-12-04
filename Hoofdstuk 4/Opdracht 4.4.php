<?php
//auteur: Yusuf Simsek
//functi: prijzen verhogen

$prijs1 = 100;

if ($prijs1 > 150) {
    $prijs1 *= 1.90; // Verhoog met 19%
}

elseif ($prijs1 < 55) {
    $prijs1 *= 1.11; // Verhoog met 11
}

else {
    $prijs1 *= 1.16; // Verhoog met 16%
}

print "Oude prijs: $ 100. Na verhoging" . round($prijs1, 2);

?>  