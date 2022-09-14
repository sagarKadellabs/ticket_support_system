<?php
include 'connection.php';
require 'vendor/autoload.php';
$api_key = "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";

if(isset($_POST['create']))
{
 $users_name = $_POST['users_name'];
 $emails = $_POST['emails'];
 $password = $_POST['password'];
 $pos = $_POST['pos'];
 $role = $_POST['role'];
 $dep = $_POST['dep'];
 $message = "<H1>Hi, ".$users_name." Your password is ".$password."</H1>"; 
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
 $email = new \SendGrid\Mail\Mail(); 
$email->setFrom("pooja.anjana@kadellabs.com", "pooja.anjana@kadellabs.com");
$email->setSubject("Test Mail");
$email->addTo($emails,$users_name);
// $email->addContent("text/plain","Welcome the TSS project");
$email->addContent("text/html", $message);
$sendgrid = new \SendGrid($api_key);

if( $sendgrid->send($email))
{
 echo "Email send successfully";
}
 
// try {
//     $response = $sendgrid->send($email);
//     print $response->statusCode() . "\n";
//     print_r($response->headers());
//     print $response->body() . "\n";
// } catch (Exception $e) {
//     echo 'Caught exception: '. $e->getMessage() ."\n";
// }
}

?>