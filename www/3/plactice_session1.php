<?php
session_start();
$_SESSION['age'] = 36;
$_SESSION['email'] = 'smaple@sample.com';

echo $_SESSION['age'] . '<br>';
echo $_SESSION['email'] . '<br>';
?>