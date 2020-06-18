<!DOCTYPE html>

<html>
<title>Say hello</title>
<body>

    <form method="post">
        Qual o seu nome?<br>
        <input type="text" name="nome"><br>
        <input type="submit" value="Enviar"><br><br>
    </form>

<?php
    if(!empty($_POST['nome'])) {
        $nome = $_POST['nome'];

        echo "E ai, ".$nome."!";
    }
?>
</body>
</html>