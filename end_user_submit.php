<?php
session_start();
include 'connection.php';
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
   
    echo"<script> window.location='create_end_user.php'; alert('Email is already exist')</script>";
 }   else
 {
    $sql = " INSERT INTO `users`(`users_name`,`emails`,`password`,`position_id`,`role_id`,`department_id`) VALUES ('$users_name','$emails','$password','$pos','$role','$dep')";
 $query = mysqli_query($con,$sql);
 
    header('location:manage_user.php');
 }
}
?>