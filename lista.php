<?php
$plik = "data.json";

if (!file_exists($plik)) {
    file_put_contents($plik, json_encode([]));
}

$uczniowie = json_decode(file_get_contents($plik), true);

echo "<h1>Dzienniczek szkolny</h1>";

if (empty($uczniowie)) {
    echo "Brak uczniów.";
} else {
    foreach ($uczniowie as $imie => $info) {
        if ($imie !== "") {
            echo "<a href='uczen.php?imie=$imie'>$imie</a><br>";
        }
    }
}

echo "<br><br><a href='dodaj.html'>Dodaj ucznia</a>";
