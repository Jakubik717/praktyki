<?php

    $ocena1=$_POST["ocena1"];
    $ocena2=$_POST["ocena2"];
    $ocena3=$_POST["ocena3"];
    $ocena4=$_POST["ocena4"];
    $ocena5=$_POST["ocena5"];

    $tab = [$ocena1, $ocena2,$ocena3, $ocena4, $ocena5];

    $sum=0;
    $i=0;

    if(is_array($tab)){

foreach($tab as $srednia){
    if(is_numeric($srednia) and $srednia >= 1 and $srednia <= 5){
        $sum += $srednia;
        $i++;
    }

}
if($i > 0){
    $srednia = $sum / $i
    echo "Średnia ocen wynosi: ". number_format($srednia,2);
}
else {
    echo "Nie podano żadnej oceny ";
}
if($srednia >= 2.0){
    echo " zdałeś ";
} else {
    echo " nie zdałeś ";
}
}

?>
