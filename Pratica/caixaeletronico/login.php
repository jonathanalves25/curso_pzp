<?php
session_start();
require 'config.php';

if (isset($_POST['agencia']) && !empty($_POST['agencia'])) {
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);

    $sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();

    if($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $_SESSION['banco'] = $sql['id'];
        header("Location: index.php");
        exit;
    }
}
?>

<html>
<title>
    Caixa Eletrônico
</title>
<body>
<form method="post">
    Agência:<br>
    <input type="text" name="agencia"><br>
    Conta:<br>
    <input type="number" name="conta"><br>
    Senha:<br>
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Entrar">
</form>
</body>
</html>
