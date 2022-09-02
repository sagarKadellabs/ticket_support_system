<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';
?>

<title>Manage End User!!</title>

<body id="body-pd">
    <br>
    <div class="col">

        <!-- D Dashboard start -->
        <div class="row  mt-4 ">

            <div class="col  h2"><b>Manage End User</b></div>
            <div class="col ">
                <div class="box">
                    <i class='  bx bx-search-alt-2'></i>
                    <input id="myInput" type="text" placeholder="Search..">
                </div>
            </div>
            &emsp; &emsp; &emsp; &emsp; &emsp;
            <div class="col  ">
                <form action="create_end_user.php">
                    <button type="submit" class="btn "><i class=' bx bx-plus-circle'></i>Add New User</button>
                </form>
            </div>
        </div> <br>

        <!-- D Dashboard end -->

        <table class=" table tbl">

            <thead style="color:#777777;">
                <tr>
                    <th scope="col">S.NO.</th>
                    <th scope="col">NAME</th>
                    <th scope="col">POSITION</th>
                    <th scope="col">DEPARTMENT</th>

                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody class="t_body" id="table_body">

                <?php

$query= "SELECT *

FROM tickets T JOIN users U ON (T.user_id = U.id )

JOIN departments D ON (T.department_id = D.department_id )  ORDER BY ticket_id";

$query_run = mysqli_query($con ,$query);

if(mysqli_num_rows( $query_run)> 0)

{

    while ($row = mysqli_fetch_assoc($query_run))

    {
        ?>

                <tr>

                    <td><?php echo $row['ticket_id']; ?></td>

                    <td><?php echo $row['users_name']; ?></td>
                    <td><?php echo $row['position_name']; ?></td>
                    <td><?php echo $row['issue_type']; ?></td>






                    <td>
                        <a class=" " href="#"><i class=' bx bx-edit '
                                style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                        <a class=" " href="delete.php"><i class='  bx bx-trash'
                                style="color:red; font-size:20px; margin-left:10px;"></i></a>

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
                ?>


            </tbody>
        </table>
    </div>


</body>

</html>