<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'ticket_management_system');

if(isset($_POST['create'])){
 $users_name = $_POST['users_name'];
 $emails = $_POST['emails'];
 $password = $_POST['password'];
 $sql = " INSERT INTO `client`(`client_name`,`email`,`password`,) VALUES ('$users_name','$emails','$password')";

 $query = mysqli_query($con,$sql);
 
      
        
       

}
 header('location:dashboard.php');

?>