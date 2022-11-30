<?php
    $date1 = new DateTime("25 Dec 2022");
    $now = new DateTime("now");

    $diffDays = $now->diff($date1);

    echo $diffDays->format('%a days');
   
    if ($now < $date1) {
        echo "aun no es navidad";
    }
?>