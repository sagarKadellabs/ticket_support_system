<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Client!!</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/custom_stylesheet.css" />
  <script src="assets/javascript/custom_script.js"></script>
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle toggle_img"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img">
      <img src="assets/images/nav_image.png" class="rounded-circle">
      
  </header>
  <div class="l-navbar" id="nav-bar" style="background-color: #F4FBFF">
    <nav class="nav">
      <div>
        <div class="image"> <a href="#" class="nav_logo " style="padding-left:10px;"><img id="kl"
              src="assets/images/logo1.PNG" height="30px;"> <span class="nav_logo-name m-0">
              <img src="assets/images/logo.png" height="30px;" style="padding:0%;">
            </span> </a>
        </div>
        <div class="nav_list"> <a href="dashboard.php" class="nav_link active"> <i class=' bx bxs-dashboard nav_icon'></i>
            <span class="nav_name">Dashboard</span> </a> <a href="#" class="nav_link"> <i class="iconify nav_icon"
              data-icon="carbon:user-multiple"></i> Manage Users</span> </a> <a href="#" class="nav_link"><i
              class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a>
        </div>
        <a href="form.php" class="nav_link"> <i class='bx bx-log-in nav_icon' style="color:red;"></i> <span
            class="nav_name">SignOut</span> </a>
      </div>
    </nav>
  </div>

  <form style="padding:10px; margin-top:100px; margin-left:auto;">

    <h1>Create Client</h1>
    <div class="row mb-3 mt-3">
      <div class="col">
        <label for="name" class="form-label">Full Name*</label>

        <input type="text" class="form-control form-boxes" placeholder=" Full Name" name="name" required>
      </div>
      <div class="col">
        <label for="email" class="form-label">Email*</label>

        <input type="email" class="form-control form-boxes" placeholder="Email Address " name="email" required>
      </div>

    </div>
    <div class="row mb-3 mt-3">
      <div class="col">
        <label for="pass" class="form-label">Password*</label>

        <input type="password" class="form-control form-boxes" placeholder=" Password"  name="pass" required>
      </div>
      <div class="col" >
        <label for="rule" class="form-label" required>Roles*</label>

        <select class="form-select form-boxes" aria-label="Default select example">
          <option selected>Select Rules</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

      </div>
     

    </div>
    
    <div class="row mb-3 mt-3">
      <div class="col" >
        <label for="pos" class="form-label" required>Position*</label>

        <select class="form-select form-boxes" aria-label="Default select example">
          <option selected>Select Position</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

      </div>
      <div class="col">
        <label for="dep" class="form-label">Department*</label>

        <select class="form-select form-boxes" aria-label="Default select example" >
          <option selected>Select Department</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>



    </div>
    <label for="text" class="form-label" >Access to Ticket*</label><br>

    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
      <label class="form-check-label" for="inlineRadio1">View</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
      <label class="form-check-label" for="inlineRadio2">Edit</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
      <label class="form-check-label" for="inlineRadio2">Transfer</label>
    </div> <br><br>
    <button type="submit" class="btn" style="background-color:
          #044BA9; color:white; width:100px;">Create</button>

    <a href="#" style="font: Noto Sans; color:
#044BA9"><u>Discard</u></a>

  </form>

</body>

</html>