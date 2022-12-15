<?php
function generatePassword($num){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
    $password = "";
    for ($i = 0; $i < $num; $i++) {
        $password .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $password;
}