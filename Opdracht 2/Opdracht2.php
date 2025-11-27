<?php
// auteur: Yusuf Simsek
// Functie: Oefening Php



echo "<h1>Hallo wereld,</h1>";
echo "Ik zit op het ";

$schoolnaam = "Techniek College Rotterdam!";
echo $schoolnaam . "<br>";

echo "Mijn lievlings game is :";

$Lievelingsgame = " Valorant";
echo $Lievelingsgame . "<br>";

$datum = date("j F Y");
echo "Vandaag is het : $datum  <br>" ;


$dagjaar = date("z");
echo "Vandaag is het : $dagjaar <br>" ; 
echo " dag van het jaar" ;
echo "<br>"; 
$days = array();
$days [0] = "zondag";
$days [1] = "maandag";
$days [2] = "dinsdag";
$days [3] = "woensdag";
$days [4] = "donderdag";
$days [5] = "vrijdag";
$days [6] = "zaterdag";

echo "eerste dag van de week is: ";
echo $days [1];


echo "<br>" ;
$month = date("F") ;
$daysinmonth = date("t") ;
echo "Deze maand, $month heeft $daysinmonth dagen";

echo "<br>" ;
$schrikkeljaarcontrole = date("L");
echo "Is het een schrikkeljaar : $schrikkeljaarcontrole"; 
echo " Dus nee 2025 is geen schrikkeljaar";


?>
