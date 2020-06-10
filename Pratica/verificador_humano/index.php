<html>
<title>Verificador Humano</title>
<body>

<?php
session_start();
// gera dois numeros aleatorios e depois salva a soma desses valores na sessão "v"
$n1 = rand(0,15);
$n2 = rand(0,15);
$_SESSION['v'] = $n1 + $n2;
?>
<h1>Verificador Humano</h1>

<form method="post" action="verificador.php">
<?php echo $n1; ?> + <?php echo $n2; ?> =

<input type="number" name="calc">
<input type="submit" value="Calcular">
</form>
</body>
</html>