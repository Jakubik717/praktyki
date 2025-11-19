<?php


$liczba1 = $_GET["liczba1"];
$liczba2 = $_GET["liczba2"];
$liczba3 = $_GET["liczba3"];

$liczby = array($liczba1,$liczba2,$liczba3);

$najwieksza_liczba = max($liczby);
$najmniejsza_liczba = min($liczby);

echo " <p>Największa liczba: ".$najwieksza_liczba. "</p>";
echo "<p>Najmniejsza liczba: ".$najmniejsza_liczba. "</p>";



?>