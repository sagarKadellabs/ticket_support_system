<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

?>

<title>Manage Client!!</title>

<body id="body-pd">

    <div class="row ">


        <div class="col">

            <!-- D Dashboard start -->
            <div class="row  mt-4 ">

                <div class="col  h2"><b>Manage Client</b></div>
                <div class="col ">
                    <div class="box">
                        <i class='  bx bx-search-alt-2'></i>
                        <input id="myInput" type="text" placeholder="Search..">
                    </div>
                </div>
                &emsp; &emsp; &emsp; &emsp; &emsp;
                <div class="col  ">
                    <form action="create_client.php">
                        <button type="submit " class="btn "><i class=' bx bx-plus-circle'></i>Add New Client</button>
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
                        <th scope="col">PERMISSION</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody class="t_body" id="table_body">

                    <?php
                   

$query = "SELECT *

                    FROM users U 
                 
                    JOIN departments D ON (U.department_id  = D.department_id)
                    JOIN positions P ON (U.position_id = P.position_id)
                    WHERE U.role_id= '2' AND is_delete='0' 
                     order by U.id";

$query_run = mysqli_query($con ,$query);

if(mysqli_num_rows( $query_run)> 0)

{

    while ($row = mysqli_fetch_assoc($query_run))

    {
        ?>
                    <tr>

                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['users_name']; ?></td>
                        <td><?php echo $row['position_name']; ?></td>
                        <td><?php echo $row['department_name']; ?></td>
                        <td><?php echo $row['permission']; ?></td>
                        <td>
                            <a class=" " href="update_client.php?id=<?= $row['id']; ?>"><i class=' bx bx-edit '
                                    style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                            <a class=" " href="delete_client.php?user_id=<?= $row['id']; ?>"><i class='  bx bx-trash'
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





</body>

</html>