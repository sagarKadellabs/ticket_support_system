<?php
session_start();
include 'connection.php';
if(isset($_POST['create'])){
    // echo "<pre>";
 //($_SESSION['user_id']);
 //die;
 
 $user_id = $_POST['user_id'];
 $department = $_POST['department'];
 $issue = $_POST['issue'];
 $message = $_POST['message'];
 //$file = $_POST['file'];
 $sql = " INSERT INTO `tickets`(`user_id`,`department_id`,`issue_type`,`message`) VALUES (' $user_id','$department','$issue','$message')";
 $query = mysqli_query($con,$sql);
}
 header('location:ticket_detail.php');
?>