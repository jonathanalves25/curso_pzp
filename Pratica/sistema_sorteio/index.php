<!DOCTYPE html>
<html>
    <title>sorteio</title>
<body>
<?php
    $participantes = array();
    $participantes = file('lista.txt');
    $numParticipantes = count($participantes);

    $sorteado[1] = $participantes[rand(0, $numParticipantes -1)];
    ?>


    <h1>Sorteio</h1>
    Sorteado: <?php echo $sorteado[1];?>

</body>
</html>