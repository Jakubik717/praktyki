<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login=$_POST["login"];
    $password=$_POST["password"];
    $repeat_password=$_POST["repeat_password"];

    if (isset($login) && !empty($login) && isset($password) && !empty($password) && isset($repeat_password) && !empty($repeat_password)){
        echo "dane odebrane prawidłowo";

    } else {
        echo " błąd: uzupęnij pola";
    }
}


?>
