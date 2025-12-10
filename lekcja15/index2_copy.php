<?php

echo "<h1>Informacje o serwerze</h1>";
echo "Nazwa serwera: ".$_SERVER["SERVER_NAME"]. "<br>";
echo "Adres IP serwera: ".(isset($_SERVER["SERVER_ADDR"]) ? $_SERVER["SERVER_ADDR"] : ""). "<br>";
echo "Ścieżka do pliku: ".$_SERVER["SCRIPT_FILENAME"]. "<br>";