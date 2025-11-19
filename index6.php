<?php

$miasto=$_POST['miasta'];
if ($miasto ){
    echo "Wybrano miasto: ".htmlspecialchars($miasto);

} else {
    echo "musisz wybrać miasto z listy";
}
?>
