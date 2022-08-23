<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ticket_management_system');
if(isset($_POST['create'])){
 $TicketID = $_POST['Ticket ID'];
 $issue = $_POST['issue'];
 $FullName = $_POST['FullName'];
 $department = $_POST['department'];
 $message = $_POST['message'];
 //$file = $_POST['file'];
 $sql = " INSERT INTO `tickets`(`tickets_id`,`issue_type`,`user_id`,`department_id`,`message`) VALUES ('$TicketID','$issue','$FullName','$department','$message')";
 $query = mysqli_query($con,$sql);
}
 header('location:ticketdetail.php');
?>