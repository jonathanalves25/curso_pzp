<!DOCTYPE html>
<html>
<title>Ordenando numeros</title>
<body>
    <h1>Ordenador de números</h1>

    <form method="post">
        Digite os números:<br>
        <input type="text" name="numeros"><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php
if(!empty($_POST['numeros']))  {
    $numeros = explode(' ', $_POST['numeros']);
    sort($numeros);

    echo '<pre>';
    print_r($numeros);
    echo '<pre>';
}
?>