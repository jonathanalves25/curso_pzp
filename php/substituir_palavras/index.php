<!DOCTYPE html>
<html>
<title>Substituidor</title>
<body>
<h1>Substituidor</h1>
<form method="post">
    Frase:<br>
    <input type="text" name="frase1"><br><br>
    Procurar por:<br>
    <input type="text" name="frase2"><br><br>
    Trocar por:<br>
    <input type="text" name="frase3"><br><br>
    <input type="submit" value="Enviar">
    <hr>
</form>

<?php
    if(isset($_POST['frase1']) && !empty($_POST['frase1'])) {
        $frase1 = $_POST['frase1'];
        $frase2 = $_POST['frase2'];
        $frase3 = $_POST['frase3'];

        $frasefinal = str_replace($frase2, $frase3, $frase1);
        echo "Frase inicial: ".$frase1."<br>";
        echo "Frase modificada: ".$frasefinal;
    }
?>
</body>
</html>