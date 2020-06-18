<!DOCTYPE html>
<html>
    <title>Invertendo</title>
<body>
    <h1>Inverter Palavra</h1>

    <form method="post">
        Palavra/frase:<br>
        <input type="text" name="frase"><br><br>
        <input type="submit" value="Enviar">
        <hr>
    </form>
    <?php
    if(isset($_POST['frase']) && !empty($_POST['frase'])) {
        $frase = $_POST['frase'];
        $fraseRev = strrev($frase);

        echo "frase normal: ".$frase.'<br>';
        echo "frase invertida: ".$fraseRev.'<br>';
    }

    ?>
</body>
</html>