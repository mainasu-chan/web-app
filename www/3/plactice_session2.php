<?php
session_start();
$_SESSION['age'] = 40;
unset($_SESSION['age']);

echo $_SESSION['age'] . '<br>';
?>