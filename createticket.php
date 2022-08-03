
<?php
include 'header.php';
?>
<?php
include 'sidebar.php';
?>

        <form style="margin-top:130px; margin-left: 100px;">
            <h2>Create Ticket</h2>
            <div class="row">
                <div class="col-5 p-4">
                    <label for="Ticket ID" class="form-label">Ticket ID</label>
                    <input type="text" class="form-control form-control-lg form-boxes" placeholder="45678"
                        name="Ticket ID" required>
                </div>

                <div class="col-5 p-4">
                    <label for="Ticket ID" class="form-label">Issue type*</label>
                    <select class="form-select form-boxes" aria-label="Default select example" required >

                        <option selected>Issue</option>

                        <option value="1">One</option>

                        <option value="2">Two</option>

                        <option value="3">Three</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-5 p-4">
                    <label for="Full Name" class="form-label">Full Name*</label>
                    <input type="text" class="form-control form-control-lg form-boxes" placeholder="Full Name"
                        name="Full Name" required>
                </div>

                <div class="col-5 p-4">
                    <label for="Department" class="form-label">Department*</label>
                    <select class="form-select  form-boxes" aria-label="Default select example" required>

                        <option selected>Select Department</option>

                        <option value="1">sales executive</option>

                        <option value="2">Two</option>

                        <option value="3">Three</option>

                    </select>
                </div>
            </div>
            <div class="row">
            <div class="col-5 p-4">
                    <label for="Department" class="form-label">File Upload*</label>
                    <label for="fileinput" class="form-label form-control form-control-lg form-boxes">
                        <div class="row justify-content">
                            <div class="col-6">File Upload*
                            </div>
                            <div class="col-6" style="text-align: right;">
                                <i class="bi bi-folder2-open"></i>

                            </div>
                        </div>
                    </label>
                    <input type="file" id="fileinput" class=" d-none form-control form-control-lg form-boxes"
                        placeholder="Enter email" name="File Upload">
                    <span id="selected_filename">No file selected</span>



                </div>
                <div class="col-5 p-4 ">
                    <label for="email" class="form-label">Message*</label>
                    <textarea type="text" class="form-control form-control-lg form-boxes" placeholder="Enter text..."
                        name="email" required></textarea>
                </div>

            </div>


            <button type="submit" class="btn btn-primary ml-4"  style="margin-top: 10px;">Create</button>

            <button type="reset" class="btn btn-danger ml-4"  style="margin-top: 10px;">Discard</button>
            <!-- <a href="#" style="font: noto sans; color:#044BA9; margin-left:50px;"><u>Discard </u></a> -->

        </form>
        <script>
             $(document).ready(function () {
            $('#falseinput').click(function () {
                $("#fileinput").click();
            });
        });
        $('#fileinput').change(function () {
            $('#selected_filename').text($('#fileinput')[0].files[0].name);
        });

    </script>
 