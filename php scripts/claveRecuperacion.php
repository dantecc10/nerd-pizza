<?php
function generateRandomString($length = 6)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = 0;
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(1, $charactersLength - 1)];
    }
        return $randomString;
    }
    echo generateRandomString();
    ?>