<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'ticket_management_system');

if(isset($_POST['create'])){
 $users_name = $_POST['users_name'];
 $emails = $_POST['emails'];
 $password = $_POST['password'];
 $pos = $_POST['pos'];
 $role = $_POST['role'];
 $dep = $_POST['dep'];
 $sql = " INSERT INTO `users`(`users_name`,`emails`,`password`,`postion_id`,`role_id`,`department_id`) VALUES ('$users_name','$emails','$password','$pos','$role','$dep')";

 $query = mysqli_query($con,$sql);
 
      
        
       

}
 header('location:dashboard.php');

?>