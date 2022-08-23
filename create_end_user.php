<?php
include 'header.php';
include 'sidebar.php';
?>
<form action="end_user_submit.php" method="post" style="padding:10px; margin-top:100px; margin-left:auto;">
    <h1>Create End User</h1>
    <div class="row mb-3 mt-3">
        <div class="col">
            <label for="users_name" class="form-label">Full Name*</labe>
                <input type="text" class="form-control form-boxes" placeholder=" Full Name" name="users_name" required>
        </div>
        <div class="col">
            <label for="emails" class="form-label">Email*</label>
            <input type="email" class="form-control form-boxes" placeholder="Email Address " name="emails" required>
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <label for="password" class="form-label">Password*</label>
            <input type="password" class="form-control form-boxes" placeholder=" Password" name="password" required>
        </div>
        <?php
                     $sql= "SELECT * from roles ";
                     $result= mysqli_query($con,$sql);
                     if(mysqli_num_rows($result)>0)
                     {
                    ?>
        <div class="col">
            <label for="role" class="form-label" required>Roles*</label>
            <select class="form-select form-boxes" name="role" aria-label="Default select example">
                <option selected>Select Roles</option>
                <?php
                        while($row=mysqli_fetch_assoc($result))
                        {
                        ?>
                <option value="<?=$row['id']?>"><?=$row['roles_name']?></option>
                <?php
                        }
                        ?>
            </select>
        </div>
    </div>
    <?php
            }
            ?>
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
                <option value="<?=$row['id']?>"><?=$row['position_name']?></option>
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
                <option value="<?=$row['id']?>"><?=$row['department_name']?></option>
                <?php
                        }
                        ?>
            </select>
        </div>
        <?php
            }
          }
            ?>
    </div>
    <button type="submit" name="create" class="btn"
        style="background-color:#044BA9; color:white; width:100px;">Create</button>
    <a href="#" style="font: Noto Sans; color:#044BA9"><u>Discard</u></a>
</form>