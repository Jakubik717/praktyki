<?php

if(isset($_POST["wiek"])){
    $wiek=$_POST["wiek"];
    if(filter_var($wiek, FILTER_VALIDATE_INT)){
        echo "wartość jest liczbą całkowitą"
    } else {
        echo "wartość nie jest liczbą całkowitą"
    }
}
?>