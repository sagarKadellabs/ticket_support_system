<?php
include 'header.php';
include 'sidebar_user.php';
include 'connection.php';
?>
<title>Dashboard!!</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

<body id="body-pd">


    <div class="row">


        <div class="col">

            <!-- D Dashboard start -->
            <div class="row  mt-4 ">
                <span><b>Welcome Client,</b></span>
                <div class="col  h2"><b>Dashboard</b></div>
                <!-- <div class="col ">
                         <div class="box">
                        <i class='  bx bx-search-alt-2'></i>
                        <input id="myInput" type="text" placeholder="Search..">
                    </div> 
            </div> -->


            </div> <br>

            <!-- D Dashboard end -->

            <!-- D checkbox row start -->

            <form action="dashboard.php" method="POST">
                <div class="row  mt-2">
                    <div class="col pt-2">
                        <div class="check_item">

                            <div class="form-check form-check-inline">
                                <label class="form-check-label " for="flexCheckChecked">
                                    ALL
                                </label>
                                <input class="form-check-input" type="checkbox" value="" name="status[0]"
                                    id="flexCheckChecked">

                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="open" name="status[1]"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    OPEN
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="pending" name="status[2]"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    HOLD
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="closed" name="status[3]"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    CLOSED
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="in-progress" name="status[4]"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    IN PROGRASS
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col  ">
                        <button type="submit" name="submit" value="submit" class=" btn1 "><i class=' bx bx-slider'></i>
                            Filter</button>
                    </div>
                </div>
            </form>
            <br>
        </div>

        <table class="table " id="data" style="margin-top: 15px;
    padding: 20px;
    width: 95%;
    border: #F4FBFF;
    border-collapse: separate;
    border-spacing: 0 0.5em;">

            <thead style="color:#777777;">
                <tr>
                    <th scope="col">TICKET #</th>
                    <th scope="col">DEPARTMENT</th>
                    <th scope="col">ASSIGNIEE NAME</th>
                    <th scope="col">ASSIGNIEE DEPARTMENT</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody class="t_body" id="table_body">
                <?php
                
            if (isset($_POST['submit'])) {
                if (count($_POST['status']) > 1) {

                    $queryString ="";

                    $queryString = "status IN ('" . implode("','", $_POST['status']) . "')";
                }
                else
                {
                foreach ($_POST['status'] as $value) {

                    

                    $queryString = "";

                    switch ($value) {

                        case 'open':

                            $queryString = $queryString . "status ='open'";

                            break;

                        case 'pending':

                            $queryString = $queryString . "status ='pending'";

                            break;

                        case 'closed':

                            $queryString = $queryString . "status ='closed'";

                            break;

                        case 'in-progress':

                            $queryString = $queryString . "status ='in-progress'";

                            break;
                            

                        default:

                            $queryString = $queryString . "status IN ('open', 'pending', 'in-progress','closed')";

                            break;
                        }

                    }
                }
            
?>

                <?php
                



                $query= "SELECT *

                FROM tickets T JOIN users U ON (T.user_id = U.id )

                JOIN departments D ON (T.department_id = D.department_id ) JOIN issue I ON (T.issue_department =
                I.issue_id) where I.issue_id='". $_SESSION['department_id']."' AND $queryString ";

                $query_run = mysqli_query($con ,$query);

                if(mysqli_num_rows( $query_run)> 0)

                {

                while ($row = mysqli_fetch_assoc($query_run))

                {
                    
                ?>

                <tr>

                    <td><?php echo $row['ticket_id']; ?></td>

                    <td><?php echo $row['issue_name']; ?></td>

                    <td><?php echo $row['users_name']; ?></td>

                    <td><?php echo $row['department_name'];  ?></td>

                    <td><?php echo $row['status']; ?></td>


                    <td>
                        <a class=" " href="ticket_detail_client.php?ticket_id=<?= $row['ticket_id']; ?>"> <i
                                class=' bx bx-show' style="color:blue; font-size:20px; margin-left:5px;"></i>view</a>
                        &nbsp;
                        <a class=" " href="#" style="color:gray;"><i class=' bx bx-edit '
                                style=" color:gray; font-size:20px; margin-left:5px;"></i>edit</a> &nbsp;
                        <a class=" " href="#" style="color:#7DBA00;"><i class=' bx bx-transfer '
                                style="color:#7DBA00; font-size:20px; margin-left:5px;"></i>transfer</a>

                    </td>
                </tr>

                <?php
                        }

                    }

                    else
                    {

                
                ?>
                <tr>
                    <td colspan="6"> No record found</td>
                </tr>
                <?php
                    }
            }
             
            else
            {
               
                $query= "SELECT *
                
                FROM tickets T JOIN users U ON (T.user_id = U.id )
                
                JOIN departments D ON (T.department_id = D.department_id ) JOIN issue I ON (T.issue_department = I.issue_id) where I.issue_id='". $_SESSION['department_id']."'" ;
                
                $query_run = mysqli_query($con ,$query);
                
                if(mysqli_num_rows( $query_run)> 0)
                
                {
                
                    while ($row = mysqli_fetch_assoc($query_run))
                
                    {
                        ?>

                <tr>

                    <td><?php echo $row['ticket_id']; ?></td>

                    <td><?php echo $row['issue_name']; ?></td>

                    <td><?php echo $row['users_name']; ?></td>

                    <td><?php echo $row['department_name'];  ?></td>

                    <td><?php echo $row['status']; ?></td>


                    <td>
                        <a class=" " href="ticket_detail_client.php?ticket_id=<?= $row['ticket_id']; ?>"> <i
                                class=' bx bx-show' style="color:blue; font-size:20px; margin-left:5px;"></i>view</a>
                        &nbsp;
                        <a class=" " href="#" style="color:gray;"><i class=' bx bx-edit '
                                style=" color:gray; font-size:20px; margin-left:5px;"></i>edit</a> &nbsp;
                        <a class=" " href="#" style="color:#7DBA00;"><i class=' bx bx-transfer '
                                style="color:#7DBA00; font-size:20px; margin-left:5px;"></i>transfer</a>

                    </td>
                </tr>

                <?php
                                        }
                
                                    }
                
                                    else
                                    {
                
                                
                                ?>
                <tr>
                    <td colspan="6"> No record found</td>
                </tr>
                <?php
                                    }
                                
                                
                }
                ?>

            </tbody>
        </table>

</body>
<br>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    $('#data').DataTable();
});
</script>

</html>