<?php 
session_start();

if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    
    $dsn = "mysql:dbname=pratica_curso;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    
    try {
        $db = new PDO($dsn, $dbuser, $dbpass);
        $sql = $db->query("SELECT * FROM login WHERE email='$email' AND senha='$senha'");
        
        
        if ($sql->rowCount() > 0) {
            
            $dado = $sql->fetch();
            
            $_SESSION['id'] = $dado['id'];
            
            header("Location: index.php");
        }
    } catch (PDOException $e) {
        echo "Falhou...".$e->getMessage();
    }
}

?>
Pagina de login

<form method="post">
		Email:<br>
		<input type="email" name="email"><br><br>
		Senha:<br>
		<input type="password" name="senha"><br><br>
		<input type="submit" value="Fazer login">
	
</form>