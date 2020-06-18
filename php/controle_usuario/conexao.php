<?php

$dsn = "mysql:dbname=pratica_curso;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO ($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "conexão falhou".$e->getMessage();
}

?>