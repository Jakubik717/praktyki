<?php

$plik_danych = json_decode(file_get_contents("data.json"), true);

$imie = $_GET["imie"];

if (!isset($plik_danych[$imie])) {
    echo "Uczeń nie istnieje!";
    exit();
}

echo "<h1>$imie</h1>";

echo "<h2>Przedmioty i oceny</h2>";

$przedmioty = $plik_danych[$imie]["przedmioty"];

foreach ($przedmioty as $przedmiot => $oceny) {
    echo "<b>$przedmiot:</b> " . implode(", ", $oceny) . "<br>";
}

echo "<br><a href='główna.php'>Powrót</a>";
?>

