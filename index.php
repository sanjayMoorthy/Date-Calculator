<?php

$firstDate = "12-09-2022";
$secondDate = "20-05-2023";

function dateCaluculation($firstDate, $secondDate) {
  
    $caluculation = strtotime($secondDate) - strtotime($firstDate);
    return abs(round($caluculation / 86400));
}
$datebetween = dateCaluculation($firstDate, $secondDate);
printf("Days between two dates = ".$datebetween);





