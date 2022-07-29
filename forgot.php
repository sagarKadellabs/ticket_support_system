<?php
    include 'header.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
</head>
<body>
    <div class="container p-5 my-5 border mb-4">
        <div style="margin-top:5px;">
        </div>

        <form style="text-align:left;">

            <div class="mb-3 mb-4">

                <label for="email" class="form-label">Email</label>

                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email"
                    required="">

            </div>

            <div class="mb-3 d-grid mb-5">

                <button type="submit" class="btn btn-primary">

                    Reset Password

                </button>

            </div class="mb-5"> 

            <span>Back to login <a href="index.php">log in</a></span>

        </form>

    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>