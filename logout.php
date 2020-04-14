<?php
session_start();
unset($_SESSION['user']);
//session_destroy();
unset($_SESSION[message]);
header('Location: index.php?page=auth');
?>

