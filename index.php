<?php
if(!empty($_GET['length'])) {
    $length = $_GET['length'];
}

function generatePassword($num){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
    $password = "";
    for ($i = 0; $i < $num; $i++) {
        $password .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $password;
}
$secure_password = generatePassword($length);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <div class="container">
        <h1 class="text-center text-secondary fw-bold">Strong Password Generator</h1>
        <h2 class="text-center text-white fw-bold">Genera una password sicura</h2>
        <div class="form-group my-3">
            <input type="text" class="form-control" id="text" placeholder="La tua password" value="La password generata è: <?php echo $secure_password ?>">
        </div>
        <form action="index.php" class="bg-white p-3" method="GET">
            <label for="password" class="w-50">Lunghezza password:</label>
            <input class="w-25" type="number" name="length" id="password" min="5" max="20">
            <div class="pt-3">
                <button class="btn btn-primary">Invia</button>
            </div>
        </form>
    </div>
</body>
</html>