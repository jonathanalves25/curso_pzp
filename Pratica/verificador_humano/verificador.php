<?php
session_start();

if(!empty($_POST['calc'])) {
    // transformando valor em int
    $calc = intval($_POST['calc']);

    if($_SESSION['v'] == $calc) {
        echo "Humano";
    } else {
        echo "Fake";
    }

} else {
    header("Location: index.php");
    exit;
}
?>