<?php
$address="";

//if (!empty($_SERVER["SERVER_ADDR"])) {
if (isset($_SERVER["SERVER_ADDR"])) {
    $address=$_SERVER["SERVER_ADDR"];
}

echo "<h1>Informacje o serwerze</h1>";
echo "Nazwa serwera: ".$_SERVER["SERVER_NAME"]. "<br>";
echo "Adres IP serwera: ".$address. "<br>";
echo "Ścieżka do pliku: ".$_SERVER["SCRIPT_FILENAME"]. "<br>";