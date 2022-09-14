<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>



<div style="margin-top: 130px; margin-left: 100px;">

    <h3>
        Ticket Details
    </h3><br>

    <h2 class="mb-4">
        Ticket ID: &nbsp <?php 
        echo $_GET['ticket_id'];
        ?>
    </h2>
    <?php
    $getTicketQuery = mysqli_query($con,"select * from tickets where ticket_id = ".$_GET['ticket_id']);
    $data = mysqli_fetch_assoc($getTicketQuery);
        ?>
    <div class="row ">
        <div class="col-7 ">
            <div class="row ">
                <div class="col-1">
                    <h4 class="text-primary mb-4 "> Details</h4>
                </div>
                <div class="col-9 ml-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="mb-4 col-6 ">
                    <p class="p-1">Ticket Department:</p>
                    <p class="p-1">Priority:</p>
                    <p class="p-1">Status :</p>
                </div>
                <?php
                $getissue = mysqli_query($con,"select * from issue where  issue_id =" .$data['issue_department']);
     $details = mysqli_fetch_assoc($getissue);
     ?>
                <div class="mb-4 col-6 ">
                    <h5 class="p-2 ">
                        <?php 
                        echo $details['issue_name'];
                         ?>
                    </h5>
                    <h5 class="p-2"><?php 
                        echo $data['priority'];
                         ?><button type="button" class="dot" data-bs-toggle="dropdown"
                            style="margin-left: 30px; background-color:white; border:none;">

                            <i class="bx bx-pencil"></i>

                        </button></h5>
                    <h5 class="p-2"><?php 
                        echo $data['status'];
                         ?><button type="button" class="dot" data-bs-toggle="dropdown"
                            style="margin-left: 30px; background-color:white; border:none;">

                            <i class="bx bx-pencil"></i>

                        </button></h5>

                </div>

            </div>
            <?php
            $selectquery = "SELECT * from files where ticket_id =  ".$_GET['ticket_id'];
            $query = mysqli_query($con,$selectquery);
        
            
            ?>

            <div class="row">
                <div class="col-2">
                    <h4 class="text-primary mb-4"> Attachement</h4>
                </div>
                <div class="col-9">
                    <hr>
                </div>

                <?php
                        while($result = mysqli_fetch_assoc($query)){
     ?>
                <div class="box ">


                    <?php 
             echo $result['files_name'] ."<br>";
                            
            
                        
                         ?> <a download="<?php echo$result['file_name']; ?>"
                        href=" <?php echo $result['file_upload_path']; ?>">
                        <?php echo $file_name; ?> <i class="bx bx-download" style="font-size: 30px; "></i></a>

                </div>
                <?php
                        }
                        ?>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-2">
                    <h4 class="text-primary mb-4"> Message:</h4>
                </div>
                <div class="col-8">
                    <hr>
                </div>

            </div>
            <?php
            echo $data['message'];
            ?>
        </div>

        <br>
        <br>



        <?php
       $getuserid = mysqli_query($con,"select * from users  where  id =" .$data['user_id']);
     $detail = mysqli_fetch_assoc($getuserid);
    ?>
        <div class="col-5 ">
            <div class="row">
                <div class="col-2">
                    <h4 class="text-primary mb-4"> Pepole </h4>
                </div>
                <div class="col-6">
                    <hr>
                </div>
            </div>
            <div class="mb-4">


                <p>Assignee:

                    <button type="button" class="bi
                    bi-arrow-left-right" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="margin-left: 30px; background-color:white; border:none;"></button>

                </p>

                <h5><?php echo $detail['users_name']; ?></h5>
                <p>Created By :</p>
                <h5><?php echo $detail['users_name']; ?></h5>
            </div>
            <div class="row">
                <div class="col-1">
                    <h4 class="text-primary mb-4"> Date </h4>
                </div>
                <div class="col-7">
                    <hr>
                </div>
            </div>
            <div class="mb-4">

                <h6>Created :</h6>
                <h6><?php echo $data['created_at']; ?></h6>
                <h6>Updated :</h6>
                <h6><?php echo $data['updated_at']; ?></h6>
                <h6>Solved:</h6>
                <h6>3/31/2022, 14:34 M</h6>
            </div>
        </div>


    </div>
</div>
<div class="modal fade container" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Transfer issue department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">current issue department:</label>
                        <input type="text" class="form-control" id="recipient-name" value="<?php 
                        echo $details['issue_name'];
                         ?>" readonly>
                    </div>
                    <div>
                        <?php
                     $sql= "SELECT * from issue where issue_id != ".$data['issue_department'];
                     $result1= mysqli_query($con,$sql);
                     if(mysqli_num_rows($result1)>0)
                     {
                    ?>

                        <label for="dep" class="form-label"> issue Department*</label>
                        <select class="form-select form-boxes" name="dep" aria-label="Default select example">
                            <option selected>Select issue Department</option>
                            <?php
      while($row=mysqli_fetch_assoc($result1))
                        {
                        ?>
                            <option value="<?=$row['issue_id']?>"><?=$row['issue_name']?></option>
                            <?php
                        }
                    }
                        ?>
                        </select>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Save change</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php

 
if(isset($_POST['submit']))
{
  $dep =$_POST['dep'];

    $sqle= "UPDATE tickets SET issue_department = '$dep' where ticket_id = ".$data['ticket_id'] ;
    $change = mysqli_query($con,$sqle);
    if($change)
    {
        echo "<script>window.location='dashboard.php';alert(' issue department Transfered')</script>";
    }
    
    
}   
?>