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
        $valor = intval($_POST['val']); // recebendo valor do produto
        $imposto = intval($_POST['imposto']); // recebendo porcentagem do imposto
        $desconto = $valor * ($imposto / 100); // convertendo o desconto
        $valor_final = $valor - $desconto; // valor com desconto

        echo "Valor do produto: R$".$valor;
    ?>
    <br>    
    <?php
        echo "Taxa de imposto: ".$imposto."%";
    } else {
        Echo "valor não definido!";
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