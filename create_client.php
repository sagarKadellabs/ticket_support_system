<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';
?>

<form action="create_client_submit.php" method="post" style="padding:10px; margin-top:100px; margin-left:auto;">
    <h1>Create Client</h1>
    <div class="row mb-3 mt-3">
        <div class="col">
            <label for="users_name" class="form-label">Full Name*</label>

            <input type="text" class="form-control form-boxes" placeholder=" Full Name" name="users_name">
        </div>
        <div class="col">
            <label for="emails" class="form-label">Email*</label>

            <input type="email" class="form-control form-boxes" placeholder="Email Address " name="emails">
        </div>

    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <label for="password" class="form-label">Password*</label>
            <input type="password" class="form-control form-boxes" placeholder=" Password" name="password">
        </div>
        <?php
        $role2 = mysqli_query($con,"select * from roles where role_id='2'");
  if(mysqli_num_rows($role2) > 0)
  {
      $role_name2 = mysqli_fetch_assoc($role2); 
  }?>
        <div class="col ">

            <label for="role" class="form-label">roles*</label>

            <input type="text" name="role" class="form-control form-control-lg form-boxes" value=<?php 
echo $role_name2['roles_name']; ?> readonly>
            <input type="hidden" name="role" class="form-control form-control-lg form-boxes" value=<?php 
echo $role_name2['role_id']; ?>>

        </div>

    </div>
    <div class="row mb-3 mt-3">
        <?php
      $sql= "SELECT * from positions ";
      $result= mysqli_query($con,$sql);
      if(mysqli_num_rows($result)>0)
      {
    ?>
        <div class="col">
            <label for="pos" class="form-label">Position*</label>
            <select class="form-select form-boxes" name="pos" aria-label="Default select example">
                <option selected>Select Position</option>
                <?php
        while($row=mysqli_fetch_assoc($result))
        {
      ?>
                <option value="<?=$row['position_id']?>"><?=$row['position_name']?></option>
                <?php
          }
        ?>
            </select>
        </div>
        <div class="col">
            <?php
      $sql= "SELECT * from departments ";
      $result= mysqli_query($con,$sql);
      if(mysqli_num_rows($result)>0)
       {
     ?>
            <label for="dep" class="form-label">Department*</label>
            <select class="form-select form-boxes" name="dep" aria-label="Default select example">
                <option selected>Select Department</option>
                <?php
        while($row=mysqli_fetch_assoc($result))
        {
      ?>
                <option value="<?=$row['department_id']?>"><?=$row['department_name']?></option>
                <?php
      }
    ?>
            </select>
        </div>
        <?php
     }
     }
   ?>
    </div><br>
    <label for="text" class="form-label">Access to Ticket*</label><br>
    <div class="form-check form-check-inline">

        <input class="form-check-input" type="radio" name="brands[]" id="inlineRadio1" value="View">

        <label class="form-check-label" for="inlineRadio1">View</label>

    </div>

    <div class="form-check form-check-inline">

        <input class="form-check-input" type="radio" name="brands[]" id="inlineRadio2" value="Edit">

        <label class="form-check-label" for="inlineRadio2">Edit</label>

    </div>

    <div class="form-check form-check-inline">

        <input class="form-check-input" type="radio" name="brands[]" id="inlineRadio2" value="Transfer">

        <label class="form-check-label" for="inlineRadio2">Transfer</label>

    </div> <br><br>
    <button type="submit" name="create" value="create" class="btn"
        style="background-color: #044BA9; color:white; width:100px;">Create</button>
    <a href="#" style="font: Noto Sans; color:#044BA9"><u>Discard</u></a>
</form>