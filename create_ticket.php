<?php
include 'header.php';
include 'sidebar_user.php';
include 'connection.php';
?>
<title>create ticket</title>
<form action="create_ticket_submit.php" method="post" enctype="multipart/form-data">

    <div class="row">
        <div class="col">
            <h2>Create Ticket</h2>
        </div>
        <div class="col-1">

        </div>
    </div>
    <div class="row">
        <!-- <div class="col p-4">
            <label for="TicketID" class="form-label">Ticket ID</label>
            <input type="text" class="form-control form-control-lg form-boxes" placeholder="45678" name="TicketID">
        </div> -->


        <div class="col p-4">

            <label for="user_id" class="form-label">Full Name*</label>
            <input type="hidden" name="user_id" class="form-control form-control-lg form-boxes" value=<?php 
            echo $_SESSION['user_id'];
            ?>>
            <input type="text" name="user" class="form-control form-control-lg form-boxes" value=<?php 
            echo $_SESSION['user_name'];
            ?> readonly>


        </div>
        <div class="col p-4">

            <label for="department" class="form-label">Department*</label>

            <input type="text" name="department" class="form-control form-control-lg form-boxes" value=<?php 
echo $_SESSION['department_name'];
?> readonly>
            <input type="hidden" name="department" class="form-control form-control-lg form-boxes" value=<?php 
echo $_SESSION['department_id'];
?>>

        </div>
    </div>


    <div class="row">

        <?php
                     $sql= "SELECT * from issue ";
                     $result= mysqli_query($con,$sql);
                     if(mysqli_num_rows($result)>0)
                     {
                    ?>
        <div class="col p-4">
            <label for="issue" class="form-label">Issue departments*</label>
            <select class="form-select form-boxes" name="issue" aria-label="Default select example" required>
                <option selected>Issue Department</option>
                <?php
                        while($row=mysqli_fetch_assoc($result))
                        {
                        ?>
                <option value="<?=$row['issue_id']?>"><?=$row['issue_name']?></option>
                <?php
                        }
                        ?>
            </select>
        </div>

        <?php
            }
            ?>

        <div class="col p-4 ">
            <label for="message" class="form-label">Message*</label>
            <textarea type="text" class="form-control form-control-lg form-boxes" placeholder="Enter text..."
                name="message" required></textarea>
        </div>
        <input type="hidden" name="status" class="form-control form-control-lg form-boxes" value=<?php 
            echo "Pending";?>>
        <input type="hidden" name="priority" class="form-control form-control-lg form-boxes" value=<?php 
            echo "Low";?>>
    </div>

    <div class="row">
        <div class="col p-4">
            <label for="file" class="form-label">File Upload*</label>
            <label for="fileinput" class="form-label form-control form-control-lg form-boxes">
                <div class="row justify-content">
                    <div class="col-6">File Upload*
                    </div>
                    <div class="col-6" style="text-align: right;">
                        <i class="bi bi-folder2-open"></i>
                    </div>
                </div>
        </div>
        </label>
        <input type="file" multiple="multiple" id="fileinput" class=" d-none form-control form-control-lg form-boxes"
            placeholder="Enter email" name="file_upload[]">
        <div class="col-10">
            <span id="selected_filename"></span>
        </div>
    </div>
    <button type="submit" class="btn btn-primary ml-4" name="create" style="margin-top: 10px;">Create</button>
    <button type="reset" class="btn btn-danger ml-4" style="margin-top: 10px;">Discard</button>
</form>

<script>
$(document).ready(function() {
    $('#falseinput').click(function() {
        $("#fileinput").click();
    });
});
$('#fileinput').change(function() {
    $('#selected_filename').text($('#fileinput')[0].files[0].name);
});
</script>