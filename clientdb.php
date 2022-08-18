
<?php 
$con = mysqli_connect('localhost','root','','ticket_management_system') or die('connection failed!');

//include 'connection.php';


if(isset($_POST['clientlogin'])){
    
 $uname = $_POST['uname'];
 $password = $_POST['password'];

 $sql = "SELECT client_name  password from client where client_name='$uname' And password='$password'";

 

 $result = mysqli_query($con,$sql);
 if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['client_name'] = $row['client_name'];
        header("location: http://localhost/ticket_support_system/dashboard.php");
    }
}
    else{
        header("location: http://localhost/ticket_support_system/clientlogin.php");
    }


}
?>

