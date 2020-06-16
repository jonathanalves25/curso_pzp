<!DOCTYPE html>
<html>
<title>Calculadora de imposto</title>
<body>
<h1>Calculadora de imposto</h1>

    <form method="post">
        Valor do produto:<br>
        <input type="number" name="val"><br><br>
        Taxa de imposto: (em %)<br>
        <input type="number" name="imposto"><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php

    if(isset($_POST['val']) && !empty($_POST['val']) AND isset($_POST['imposto']) && !empty($_POST['imposto'])) {
        $valor = intval($_POST['val']);
        $imposto = intval($_POST['imposto']);
        $desconto = $valor * ($imposto / 100);
        $valor_final = $valor - $desconto;

        echo "Valor do produto: R$".$valor;
    ?>
    <br>    
    <?php
        echo "Taxa de imposto: ".$imposto."%";
    }

    ?>
    <hr>
    <?php
    echo "Imposto: R$".$desconto;
    ?>
    <br>
    <?php
    echo "Produto: R$".$valor_final;
    ?>

</body>
</html>