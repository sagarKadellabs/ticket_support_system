<?php

include 'connection.php';

$sql =  "UPDATE users set is_delete=1 where  id= ".$_GET['user_id'];


 mysqli_query($con, $sql);
 
 header('location:manage_user.php');

?>