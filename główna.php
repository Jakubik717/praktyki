<?php

$plik = "data.json";
if (!file_exists($plik)) {
    file_put_contents($plik, json_encode([]));
}
$uczniowie = json_decode(file_get_contents($plik), true);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $przedmioty = [
        "Język polski" => $_POST["polski_oceny"],
        "Matematyka" => $_POST["matematyka_oceny"],
        "Język angielski" => $_POST["angielski_oceny"],
        "Język niemiecki" => $_POST["niemiecki_oceny"],
        "Fizyka" => $_POST["fizyka_oceny"]
    ];
    $lista_przedmiotow = [];
    foreach ($przedmioty as $przedmiot => $oceny) {
        if (!empty($oceny)) {
            $lista_przedmiotow[$przedmiot] = explode(",", $oceny);
        }
    }
    $uczniowie[$imie] = [
        "przedmioty" => $lista_przedmiotow
    ];
    file_put_contents($plik, json_encode($uczniowie, JSON_PRETTY_PRINT));
}
echo "<h1>Lista uczniów</h1>";
if (empty($uczniowie)) {
    echo "Brak uczniów.";
} else {
    foreach ($uczniowie as $imie => $info) {
        echo "<a href='uczen.php?imie=$imie'>$imie</a><br>";
    }
}
echo "<br><br><a href='dodaj.html'>Dodaj ucznia</a>";
?>


