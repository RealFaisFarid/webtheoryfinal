<?php
session_start();

#unset($_SESSION);
#unset($_SESSION["password"]);
#$_SESSION = array();

session_destroy();

header("Location: index.php");
exit;
?>