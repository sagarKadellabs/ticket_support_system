<?php
include 'header.php';
include 'sidebar_user.php';
include 'connection.php';
?>
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
                         ?></h5>
                    <h5 class="p-2"><?php 
                        echo $data['status'];
                         ?></h5>

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


                <p>Assignee: <i class="bi bi-arrow-left-right" style="padding-left: 250px; "></i><i class="bi bi-pencil"
                        style="padding-left: 20px;"></i> </p>

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