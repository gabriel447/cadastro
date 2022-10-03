<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<?php

include('menu.php');

if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    if ($_POST['senha1'] == $_POST['senha2']) {
        $senha = $_POST['senha1'];
        include('config.php');
        $insert = $pdo->prepare("INSERT INTO `usuario` VALUES (null,?,?,?,?)");
        $insert->execute(array($nome, $telefone, $email, $senha));
        echo "<script>alert('Cadastro Realizado com Sucesso!');</script>";
    } else {
        echo "<script>alert('As Senhas não Conferem!');</script>";
    }
}

?>

<body>
    <div>
        <form class="cadastro" method="post">
            <h3>nome</h3>
            <input type="text" name="nome" required value="<?php if (isset($_POST['nome'])) {
                                                                echo $nome;
                                                            } ?>">
            <h3>telefone</h3>
            <input type="number" name="telefone" required value="<?php if (isset($_POST['telefone'])) {
                                                                        echo $telefone;
                                                                    } ?>">
            <h3>email</h3>
            <input type="text" name="email" required value="<?php if (isset($_POST['email'])) {
                                                                echo $email;
                                                            } ?>">
            <h3>senha</h3>
            <input type="password" name="senha1" required>
            <h3>repita a senha</h3>
            <input type="password" name="senha2" required>
            <br>
            <br>
            <input id="botao1" name="acao" type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>