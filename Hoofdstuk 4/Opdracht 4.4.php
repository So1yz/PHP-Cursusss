<?php
// auteur: Yusuf Simsek
// functie: prijzen verhogen

$prijs = 100;

if ($prijs > 150) 
{
    $percentage = "19%";
    $nieuwe_prijs = $prijs * 1.19;
} 
elseif ($prijs < 55) 
{
    $percentage = "11%";
    $nieuwe_prijs = $prijs * 1.11;
} 
else 
{
    $percentage = "16%";
    $nieuwe_prijs = $prijs * 1.16;
}
echo "Oude prijs: € $prijs <br>";
echo "Na verhoging van $percentage is de prijs: € $nieuwe_prijs";
?>
