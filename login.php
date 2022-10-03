<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<?php

include('menu.php');

if (isset($_POST['acao'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    include('config.php');
    $select = $pdo->prepare("SELECT * FROM `usuario` WHERE `email` = ? AND senha = ?");
    $select->execute(array($email, $senha));

    $sql = $select->fetchAll(PDO::FETCH_ASSOC);

    foreach ($sql as $key => $value) {
    }

    if (count($sql) == 1) {
        session_start();
        $_SESSION['login'] = 'logado';
        $_SESSION['nome'] = $value['nome'];
        // setcookie('email', $value['email'], time() + (60 * 60 * 24), '/');
        header('location: home.php');
    } else {
        echo '<script> alert("Usuário ou senha incorretos!");</script>';
    }
}

?>

<body>

    <form class="login" method="post">
        <h3>email</h3>
        <input type="text" name='email'>
        <h3>senha</h3>
        <input type="password" name='senha'>
        <br>
        <br>
        <input id="botao2" type="submit" name="acao" value="Logar">
    </form>

</body>

</html>