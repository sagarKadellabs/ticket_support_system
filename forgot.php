<?php
    include 'header.php';
    ?>
<header>
    <nav class="navbar navbar-info " style="background-color: #F4FBFF; height: 70px; ">

        <div class="container-fluid ">
            <img src="assets/images/logoi.png" height="40px" style="margin-left: 50px;">
        </div>
    </nav>
</header>
<div class="container p-5 my-5 border mb-4">
    <div style="margin-top:5px;">
    </div>

    <form style="text-align:left;">

        <div class="mb-3 mb-4">

            <label for="email" class="form-label">Email</label>

            <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required="">

        </div>

        <div class="mb-3 d-grid mb-5">

            <button type="submit" class="btn btn-primary">

                Reset Password

            </button>

        </div class="mb-5">

        <span>Back to login <a href="index.php">log in</a></span>

    </form>

</div>
<footer style="text-align: center;">
    <p>By Clicking Login, you accept the<br>
        <a href="#">Terms & Condition* </a>
    </p>
</footer>