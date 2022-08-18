<?php 
$con = mysqli_connect('localhost','root','','ticket_management_system') or die('connection failed!');
 $uname = $_POST['uname'];
 $password = $_POST['password'];
$sql = "SELECT * from users where users_name='$uname' And password='$password'";
 if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){
        //print_r($row);
        print_r($row['role_id']);
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['users_name'] = $row['users_name'];
        header("location: http://localhost/ticket_support_system/createticket.php");
    }
}
   else
   {
        header("location: http://localhost/ticket_support_system/");
   }
?>

