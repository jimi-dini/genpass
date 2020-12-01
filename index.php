<?php
function randomPassword() {
    $alphabet = "abcdefghijklmopqrstuvwxyz";
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    $alphaLength = "5" ;// Need to be change before prod 
    for ($i = 0; $i < 9; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

echo randomPassword();
?>
