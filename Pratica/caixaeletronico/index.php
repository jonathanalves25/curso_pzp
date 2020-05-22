<?php
session_start();
require 'config.php';
if(isset($_SESSION['banco']) && !empty($_SESSION['banco'])) {
    $id = $_SESSION['banco'];

    $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if ($sql->rowCount() > 0 ) {
        $info = $sql->fetch();
    } else {
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>

<html>
<title>
    Caixa Eletrônico
</title>
<body>
    <h1>Banco Ximbicudos</h1>
    Titular: <?php echo $info['titular']; ?><br>
    Agência: <?php echo $info['agencia']; ?><br>
    Conta: <?php echo $info['conta']; ?><br>
    Saldo: <?php echo $info['saldo']; ?><br>
    <a href="sair.php">Sair</a>
</body>
</html>