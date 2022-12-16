<?php
function generatePassword($num){    
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specials = '!@#$%^&*()_+-=';
    $characters = $letters . $uppercase . $numbers . $specials;
    $password = "";
    for ($i = 0; $i < $num; $i++) {
        $password .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $password;
}