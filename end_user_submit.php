<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ticket_management_system');
if(isset($_POST['create']))
{
 $users_name = $_POST['users_name'];
 $emails = $_POST['emails'];
 $password = $_POST['password'];
 $pos = $_POST['pos'];
 $role = $_POST['role'];
 $dep = $_POST['dep'];
 $query=mysqli_query($con,"select * from `users` where emails = '$emails'"); 
 if(mysqli_num_rows($query)>0)
 {
    
   // echo"<script>window.location='http://localhost/ticket_support_system/create_client.php'</script>";
   // echo"email is already exist";
    echo"<script> window.location='http://localhost/ticket_support_system/create_client.php'; alert('Email is already exist')</script>";
 $sql = " INSERT INTO `users`(`users_name`,`emails`,`password`,`postion_id`,`role_id`,`department_id`) VALUES ('$users_name','$emails','$password','$pos','$role','$dep')";
 $query = mysqli_query($con,$sql);
 }
 else
 {
    header('location:dashboard_client.php');
 }
 $sql = " INSERT INTO `users`(`users_name`,`emails`,`password`,`postion_id`,`role_id`,`department_id`) VALUES ('$users_name','$emails','$password','$pos','$role','$dep')";
 $query = mysqli_query($con,$sql);
}
 
?>