<?php

session_start();

if ($_SESSION['login'] == 'logado') {
    echo '<h1>BEM-VINDO AO SISTEMA!</h1>', '<h1>' . $_SESSION['nome'] . '<h1>';
    // echo $_COOKIE['email'];
    include('data.php');
} else {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div>
        <a href="<?php include('sair.php'); ?>">Sair</a>
    </div>
</body>

</html>