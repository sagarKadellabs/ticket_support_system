<?php
include 'header.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>

<body>
    <div class="container p-5 my-5 border mb-4">
        <div>
            <h2>Welcome to Kadel Labs</h2>
            <h3>Login</h3>
        </div>
        <form action="#">
            <div class="mb-4 mt-3 user" style="text-align: left; ">

                <label for="uname" class="form-label">Username:</label>

                <input type="text" class="form-control" style="padding:15px; border: 0px;" id="uname"
                    placeholder="Enter username" name="uname" required>
            </div>

            <div class="mb-4 " style="text-align: left;">
                
                <label for="password" class="form-label">Password:</label>
                <div class="input-group">
                <input type="password" class="form-control" style="padding:15px; border: 0px;" id="password"
                    placeholder="Enter password" imgname="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                    <span class="input-group-text color" id="basic-addon2"><i class="bi bi-eye-slash m-0" id="togglePassword"></i></span>
                </div>

            </div>

            <div class="mb-4" style="text-align: right;">

                <a href="forgot.php">Forgot password?</a>

            </div>

            <button type="submit" class="btn btn-primary">LOGIN</button>

        </form>

    </div>
    <?php
    include 'footer.php';
    ?>
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

</script>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

<!-- Code for removing string from 1st position in a text box !-->
<script type="text/javascript">
$("#uname").on("keypress", function (e) {
    if ((e.which === 32 && !this.value.length) || (e.which >= 33 && e.which <= 64) || (e.which >= 123 && e.which <= 126) || (e.which >= 91 && e.which <= 96))
        e.preventDefault();
});


</script>
</body>

</html>