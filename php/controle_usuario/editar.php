<?php 
require 'conexao.php';
$id = 0;

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = addslashes($_GET['id']);
  
    
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        
        $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id='$id'";
        $sql = $pdo->query($sql);
        
        header("Location: index.php");
    }
    
    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $sql = $pdo->query($sql);
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
        }
    }
?>

<form method="post">
		Nome:
		<input type="text" name="nome" value="<?php echo $dado['nome'];?>"><br><br>
		Email:
		<input type="email" name="email" value="<?php echo $dado['email'];?>"><br><br>
		<input type="submit" value="Atualizar">
</form>