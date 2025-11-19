<?php

session_start();
print_r($_SESSION);

if(isset($zmienna_s)){
    print_r($_SESSION);
} else{
    echo "nie ma zmiennych sesyjnych";
}




?>