<?php

setcookie("sport", "siatkówka", time() +(86400 * 2));
setcookie("zawód", "programista", time() + (86400 * 2));
setcookie("jedzenie", "pierogi", time() + (86400 * 3));
setcookie("picie", "woda" ,time() + (86400 * 4));
setcookie("przedmiot_szkolny", "polski", time() + (86400 * 5));
setcookie("lektura", "Pan Tadeusz", time() + (86400 * 6));
setcookie("choroba", "grypa" ,time() + (86400 * 7));

if(isset($_COOKIE["sport"])){
    echo "twój sport to : {$_COOKIE ["sport"]}";
}



?>