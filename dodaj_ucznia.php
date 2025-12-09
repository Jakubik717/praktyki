<?php
$plik = "data.json";

if (!file_exists($plik)) {
    file_put_contents($plik, json_encode([]));
}

$uczniowie = json_decode(file_get_contents($plik), true);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $imie = trim($_POST["imie"] ?? "");

    $przedmioty = [
        "Język polski" => $_POST["polski_oceny"] ?? "",
        "Matematyka" => $_POST["matematyka_oceny"] ?? "",
        "Język angielski" => $_POST["angielski_oceny"] ?? "",
        "Język niemiecki" => $_POST["niemiecki_oceny"] ?? "",
        "Fizyka" => $_POST["fizyka_oceny"] ?? ""
    ];

    $lista_przedmiotow = [];
    foreach ($przedmioty as $przedmiot => $oceny) {
        if (!empty($oceny)) {
            $lista_przedmiotow[$przedmiot] = explode(",", $oceny);
        }
    }

    if (empty($imie) || empty($lista_przedmiotow)) {
        echo "<p style='color:red;'>Uzupełnij wymagane pola</p>";
        echo "<a href='dodaj.html'>Powrót</a>";
        exit;
    }

    $uczniowie[$imie] = [
        "data_dodania" => date("Y-m-d H:i"),
        "przedmioty" => $lista_przedmiotow
    ];

    file_put_contents($plik, json_encode($uczniowie, JSON_PRETTY_PRINT));

    header("Location: lista.php");
    exit;
}

echo "Brak danych. Wejdź przez <a href='dodaj.html'>formularz dodawania</a>.";
?>
