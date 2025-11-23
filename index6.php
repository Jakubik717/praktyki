<?php

$miasto=$_POST['miasta'];
if ($miasto ){
    echo "Wybrano miasto: ".$miasto;

} else {
    echo "musisz wybrać miasto z listy";
}
?>