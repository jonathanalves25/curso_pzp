<?php 
require 'conexao.php';

    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));
        
        $sql = "INSERT INTO usuarios SET nome='$nome', email='$email', senha='$senha'";
        $sql = $pdo->query($sql);
        
        header("Location: index.php");
    } 
?>

<form method="post">
		Nome:
		<input type="text" name="nome"><br><br>
		Email:
		<input type="email" name="email"><br><br>
		Senha:
		<input type="password" name="senha"><br><br>
		<input type="submit" value="Cadastrar">
</form>