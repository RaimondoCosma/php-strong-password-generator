<?php
session_start();

session_unset();
session_destroy();
header("Location: http://localhost/php-strong-password-generator/index.php");die;
