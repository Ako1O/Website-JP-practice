<?php
session_start();
unset($_SESSION['user']); /* сносим сессию user*/
header('Location: ../login.php'); /* переадресация на форму входа*/
?>

