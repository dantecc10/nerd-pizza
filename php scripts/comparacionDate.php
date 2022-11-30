<?php
    $date1 = new DateTime("25 Dec 2021");
    $date2 = new DateTime("now");

    $diffDays = $now->diff($next);

    echo $days_next->format('%a days');

    if ($date2 < $date1) {
        echo "aun no es navidad";
    }
?>