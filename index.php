<?php
session_start();
include 'connection.php';
$_SESSION['is_user_login']='no';
if(isset($_POST['login']))
{
 $uname = $_POST['uname'];
 $password = $_POST['password'];
 $sql = "SELECT * from users where users_name='$uname' And password='$password'";
 $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_assoc($result))
  { 
    $_SESSION['is_user_login']='yes'; 
    $_SESSION['users_name'] = $row['users_name'];
    $_SESSION['users_name']=$row['department_id'];
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

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    function preventBack() {
        window.history.forward()
    };
    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null;
    }
    </script>
</head>
<header>

    <title>User Login</title>
    <nav class="navbar navbar-info " style="background-color: #F4FBFF; height: 70px; ">

        <div class="container-fluid ">
            <img src="assets/images/logoi.png" height="30px" style="margin-left: 50px;">
        </div>
    </nav>
</header>
<div class="container p-5 my-5 border mb-4">
    <div>
        <h2>Welcome to Kadel Labs</h2>
        <h3>Login</h3>
    </div>
    <form action="" method="post">
        <div class="mb-4 mt-3 user" style="text-align: left; ">

            <label for="uname" class="form-label">Username:</label>

            <input type="text" class="form-control" style="padding:15px; border: 0px;" id="uname"
                placeholder="Enter username" name="uname" required>
        </div>

        <div class="mb-4 " style="text-align: left;">

            <label for="password" class="form-label">Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" name="password" style="padding:15px; border: 0px;"
                    id="password" placeholder="Enter password" imgname="pswd" required>
                <span class="input-group-text color" id="basic-addon2"><i class="bi bi-eye-slash m-0"
                        id="togglePassword"></i></span>
            </div>

        </div>

        <div class="mb-4" style="text-align: right;">

            <a href="forgot.php">Forgot password?</a>

        </div>

        <button type="submit" name="login" class="btn btn-primary">LOGIN</button>

    </form>

</div>
<footer style="text-align: center;">
    <p>By Clicking Login, you accept the<br>
        <a href="#">Terms & Condition* </a>
    </p>
</footer>
<script>
const togglePassword = document
    .querySelector('#togglePassword');

const password = document.querySelector('#password');

togglePassword.addEventListener('click', () => {

    // Toggle the type attribute using
    // getAttribure() method
    const type = password
        .getAttribute('type') === 'password' ?
        'text' : 'password';

    password.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    this.classList.toggle('bi-eye');
});

$("#uname").on("keypress", function(e) {
    if ((e.which === 32 && !this.value.length) || (e.which >= 33 && e.which <= 64) || (e.which >= 123 && e
            .which <= 126) || (e.which >= 91 && e.which <= 96))
        e.preventDefault();
});
</script>