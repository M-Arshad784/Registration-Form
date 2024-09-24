<?php
session_start();

session_destroy();

$success = base64_encode("You are successfully logged out");
header("Location:index.php?success=$success");
exit;

?>