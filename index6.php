<?php

$miasto=$_POST['miasta'];
if ($miasto ){
    echo "Wybrano miasto: ".htmlspecialchars($miasto);

} else {
    echo "Nie wybrano miasta";
}





?>