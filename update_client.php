<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

?>
<?php  
$id= $_GET['id']; 
$query = "SELECT *FROM users where id = '$id' ";
$query_run = mysqli_query($con ,$query);
$result = mysqli_fetch_assoc($query_run);

//echo "<pre>"; print_r($result); exit;  
?>
<form action="" method="POST" style="padding:10px; margin-top:100px; margin-left:auto;">
    <h1>Updated End User</h1>

    <div class="row mb-3 mt-3">
        <div class="col">
            <label for="users_name" class="form-label">Full Name*</labe>
                <input type="text" class="form-control form-boxes" placeholder=" Full Name" name="users_name"
                    value="<?php echo $result['users_name']; ?>">
        </div>
        <div class="col">
            <label for="emails" class="form-label">Email*</label>
            <input type="email" class="form-control form-boxes" placeholder="Email Address " name="emails"
                value="<?php echo $result['emails']; ?>">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <?php
                     $sql12= "SELECT * from departments ";
                     $result12= mysqli_query($con,$sql12);
                     if(mysqli_num_rows($result12)>0)
                     {
                    ?>
        <div class="col">
            <label for="dep" class="form-label">Department*</label>

            <select class="form-select form-boxes" name="dep" aria-label="Default select example">
                <?php 
                  
                
                while($row=mysqli_fetch_assoc($result12))
{ 
?>
                <option value="<?=$row['department_id']?>"
                    <?php if($row['department_id'] == $result['department_id']){ echo"Selected";} ?>>
                    <?=$row['department_name']?></option>
                <?php
}

}
?>
            </select>
        </div>


        <?php
                     $sql1= "SELECT * from positions ";
                     $result1= mysqli_query($con,$sql1);
                     if(mysqli_num_rows($result1)>0)
                     {
                    ?>
        <div class="col">
            <label for="pos" class="form-label">Position*</label>

            <select class="form-select form-boxes" name="pos" aria-label="Default select example">
                <?php 
                  
                
                while($row=mysqli_fetch_assoc($result1))
{ 
?>
                <option value="<?=$row['position_id']?>"
                    <?php if($row['position_id'] == $result['position_id']){ echo"Selected";} ?>>
                    <?=$row['position_name']?></option>
                <?php
}

}
?>
            </select>
        </div>
    </div>
    <div class="row  mt-3">
        <?php
        $role11 = mysqli_query($con,"select * from roles where role_id='2'");
        if(mysqli_num_rows($role11) > 0)
        {
            $role_name11 = mysqli_fetch_assoc($role11);
        }
        ?>
        <div class="col ">

            <label for="role" class="form-label">roles*</label>

            <input type="text" name="role" class="form-control form-control-lg form-boxes" value=<?php 
echo $role_name11['roles_name']; ?> readonly>
        </div>
    </div>
    <br>
    <br>


    <button type="submit" name="submit" value="submit" class="btn"
        style="background-color:#044BA9; color:white; width:100px;">Edit</button>

</form>
<?php
if($_POST['submit'])
{
    
    $users_name =$_POST['users_name'];
    $emails =$_POST['emails'];
     $pos =$_POST['pos'];
     $dep =$_POST['dep'];

$query ="UPDATE USERS SET  users_name=' $users_name', emails='$emails',position_id='$pos', department_id='$dep' where id='$id'"; 
    $data = mysqli_query($con,$query);
    if($data)
    {
        echo "<script>window.location='manage_client.php';alert('Record Updated')</script>";
    }
    else
    {
       echo "Failed update record";
    }
    
}   
?>