<?php 
include 'connection.php';
session_start();

if(isset($_POST['login']))
{
 $uname = $_POST['uname'];
 $password = $_POST['password'];
 $sql = "SELECT * from users where users_name='$uname' And password='$password'";
 $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_assoc($result))
  { 
    $_SESSION['logged']='yes'; 
    $_SESSION['users_name'] = $row['users_name'];
    if($row["role_id"]==1)
    {
     
      $_SESSION['user_name'] = $uname;
      header("location: http://localhost/ticket_support_system/dashboard.php");
    }
      elseif($row["role_id"]==2)
    {
      $_SESSION['user_name'] = $uname;
       header("location: http://localhost/ticket_support_system/dashboard_client.php");
    }
      elseif($row["role_id"]==3)
    {  
       $_SESSION['user_name']=$uname;
        header("location: http://localhost/ticket_support_system/create_ticket.php");
    }
  }
}
  else
  { 
   echo"<script> window.location='http://localhost/ticket_support_system/index.php'; alert('oops! username and password is wrong')</script>";
  }
}
?>