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
    $status = $_POST['status'];
    $sql = " INSERT INTO `tickets`(`user_id`,`department_id`,`issue_type`,`message`,`status`) VALUES (' $user_id','$department','$issue','$message','$status')";
    $query = mysqli_query($con,$sql);
    $last_id = mysqli_insert_id($con);
   
   for($i=0;$i<=sizeof($_FILES);$i++)
   {
      $file_name = $_FILES['file']['name'][$i];
     $file_type = $_FILES['file']['type'][$i];
     $file_tem_Loc = $_FILES['file']['tmp_name'][$i];
     $file_store = "assets/uploaded_files/" .$file_name;
     move_uploaded_file($file_tem_Loc,$file_store);

     $date = date('Y-m-d H:i:s');

     $upload_file = "INSERT INTO `files`(`files_name`,`file_upload_path`,`user_id`,`ticket_id`,`created_at`,`created_by`) VALUES ('$file_name','$file_store','$user_id','$last_id','$date','$user_id')";
     $query = mysqli_query($con,$upload_file);
   }

}

 header('location:create_ticket.php');
?>