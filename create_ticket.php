<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';
?>
<title>create ticket</title>
<form action="create_ticket_submit.php" method="post" style="margin-top:130px;">
    <h2>Create Ticket</h2>
    <div class="row">
        <div class="col p-4">
            <label for="TicketID" class="form-label">Ticket ID</label>
            <input type="text" class="form-control form-control-lg form-boxes" placeholder="45678" name="TicketID"
                required>
        </div>
        <?php
                     $sql= "SELECT * from issue ";
                     $result= mysqli_query($con,$sql);
                     if(mysqli_num_rows($result)>0)
                     {
                    ?>
        <div class="col p-4">
            <label for="issue" class="form-label">Issue type*</label>
            <select class="form-select form-boxes" name="issue" aria-label="Default select example" required>
                <option selected>Issue</option>
                <?php
                        while($row=mysqli_fetch_assoc($result))
                        {
                        ?>
                <option value="<?=$row['id']?>"><?=$row['issue_name']?></option>
                <?php
                        }
                        ?>
            </select>
        </div>
    </div>
    <?php
            }
            ?>
    <div class="row">
        <div class="col p-4">

            <label for="FullName" class="form-label">Full Name*</label>
            <input type="text" class="form-control form-control-lg form-boxes" value=<?php 
            echo $_SESSION['user_name'];
            ?> name="FullName" required>
        </div>

        <div class="col p-4">
            <label for="department" class="form-label">Department*</label>
            <input type="text" class="form-control form-control-lg form-boxes" value=<?php 
            echo $_SESSION['department_id'];
            ?> name="department" required>
        </div>
    </div>
    <?php
            
            ?>
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
            </label>
            <input type="file" multiple="multiple" id="fileinput"
                class=" d-none form-control form-control-lg form-boxes" placeholder="Enter email" name="file">
            <span id="selected_filename">No file selected</span>
        </div>
        <div class="col p-4 ">
            <label for="message" class="form-label">Message*</label>
            <textarea type="text" class="form-control form-control-lg form-boxes" placeholder="Enter text..."
                name="message" required></textarea>
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