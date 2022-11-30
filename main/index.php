<?php
session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['nome']);

header("Location: login.php");
exit;