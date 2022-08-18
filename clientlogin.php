<?php
include 'header.php';
?>


<header>
        <nav class="navbar navbar-info " style="background-color: #F4FBFF; height: 70px; ">

            <div class="container-fluid ">
                <img src="assets/images/logoi.png.png" height="30px" style="margin-left: 50px;">
            </div>
        </nav>
    </header>
    <div class="container p-5 my-5 border mb-4">
        <div>
            <h2>Welcome to Kadel Labs</h2>
            <h3>Login</h3>
        </div>
        <form   action="clientdb.php" method="post">
            <div class="mb-4 mt-3 user" style="text-align: left; ">

                <label for="uname" class="form-label">Username:</label>

                <input type="text" class="form-control" style="padding:15px; border: 0px;" id="uname"
                    placeholder="Enter username" name="uname" required>
            </div>

            <div class="mb-4 " style="text-align: left;">
                
                <label for="password" class="form-label">Password:</label>
                <div class="input-group">
                <input type="password" class="form-control" name="password" style="padding:15px; border: 0px;" id="password"
                    placeholder="Enter password" imgname="pswd"    required >
                    <span class="input-group-text color" id="basic-addon2"><i class="bi bi-eye-slash m-0" id="togglePassword"></i></span>
                </div>

            </div>

            <div class="mb-4" style="text-align: right;">

                <a href="forgot.php">Forgot password?</a>

            </div>

            <button type="submit"  name="clientlogin"class="btn btn-primary">LOGIN</button>

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

$("#uname").on("keypress", function (e) {
    if ((e.which === 32 && !this.value.length) || (e.which >= 33 && e.which <= 64) || (e.which >= 123 && e.which <= 126) || (e.which >= 91 && e.which <= 96))
        e.preventDefault();
});

        </script>