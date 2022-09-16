<?php

include 'connection.php';

$sql =  "UPDATE users set is_delete=1 where  id= ".$_GET['user_id'];
echo "$sql";


 mysqli_query($con, $sql);
 
 header('location:manage_client.php');

?>