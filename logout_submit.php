<?php

include "connection.php";

session_start();

session_unset();

session_destroy();
$_SESSION['is_user_login'] =='no';

header("Location:index.php");

?>