<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
        background-image: linear-gradient(to right top, #030b16, #212041, #5b265f, #9f1c63, #da1d4b);
    }
    .box {
        text-align: center;
        background-color: white;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 5px 5px 10px 0px #0d1b41;
    }   
    span {
        font-size: 22px;
        color: blue;
        font-weight: bolder;
    }
    a {
        display: inline-block;
        text-decoration: none;
        padding: 5px 10px;
        color: white;
        background-color: red;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>
<body>
    <div class="box">
        <h2 class="text-center bg-white py-3">La tua password è:</h2>
        <span><?php echo $_SESSION['psw']; ?></span>
        <div>
            <a href="quit-recovery.php">Esci</a>
        </div>
    </div>
</body>
</html>