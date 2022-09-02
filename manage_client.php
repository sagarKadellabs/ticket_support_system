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
                    FROM tickets T 
                    JOIN positions P ON (T.ticket_id = P.id )  
                    JOIN  users U ON (T.user_id = U.id )
                    WHERE U.role_id= '2'";
                   
                   
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {

                    ?>
                    <tr>
                        <td><?php echo $row['ticket_id']; ?></td>
                        <td><?php echo $row['users_name']; ?></td>
                        <td><?php echo $row['position_name']; ?></td>
                        <td><?php echo $row['issue_type'];  ?></td>
                        <td><?php echo $row['status']; ?></td>

                        <td>
                            <a class=" " href="#"><i class=' bx bx-edit '
                                    style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                            <a class=" " href="#"><i class='  bx bx-trash'
                                    style="color:red; font-size:20px; margin-left:10px;"></i></a>
                        </td>
                    </tr>

                    <?php
                        }
                    } else {


                        ?>
                    <tr>
                        <td colspan="6"> No record found</td>
                    </tr>
                    <?php
                    }
                    ?>

                    <!-- <tbody class="t_body" id="table_body">          
              <tr>
                <th scope="row">1</th>
                <td>John Deo</td>
                <td>Sale Executives </td>
                <td>Sales</td>
                <td>View</td>
                <td> 
                <a class=" "  href="#" ><i  class=' bx bx-edit '  style="color:#777777; font-size:20px; margin-left:5px;"></i></a> 
                <a class=" "  href="#" ><i  class='  bx bx-trash'  style="color:red; font-size:20px; margin-left:10px;"></i></a> 
               
                </td>
            </tr>
            <tr>
            <th scope="row">2</th>
                <td>John Deo</td>
                <td>Manager</td>
                <td>Sales</td>
                <td>Edit</td>
                <td>
                <a class=" "  href="#" ><i  class=' bx bx-edit '  style="color:#777777; font-size:20px; margin-left:5px;"></i></a> 
                <a class=" "  href="#" ><i  class='  bx bx-trash'  style="color:red; font-size:20px; margin-left:10px;"></i></a> 
                </td>
            </tr>
            <tr>
            <th scope="row">3</th>
                <td>John Deo</td>
                <td>Marketing</td>
                <td>Sales</td>
                <td>Transfer</td>
                <td>
                <a class=" "  href="#" ><i  class=' bx bx-edit '  style="color:#777777; font-size:20px; margin-left:5px;"></i></a> 
                <a class=" "  href="#" ><i  class='  bx bx-trash'  style="color:red; font-size:20px; margin-left:10px;"></i></a> 
                </td>
            </tr>
            <tr>
            <th scope="row">4</th>
                <td>John Deo</td>
                <td>Sale Executives </td>
                <td>Sales</td>
                <td>Edit</td>
                <td>
                <a class=" "  href="#" ><i  class=' bx bx-edit '  style="color:#777777; font-size:20px; margin-left:5px;"></i></a> 
                <a class=" "  href="#" ><i  class='  bx bx-trash'  style="color:red; font-size:20px; margin-left:10px;"></i></a> 
                </td>
            </tr>
            <tr>
            <th scope="row">5</th>
                <td>John Deo</td>
                <td>Sale Executives </td>
                <td>Sales</td>
                <td>Transfer</td>
                <td>
                <a class=" "  href="#" ><i  class=' bx bx-edit '  style="color:#777777; font-size:20px; margin-left:5px;"></i></a> 
                <a class=" "  href="#" ><i  class='  bx bx-trash'  style="color:red; font-size:20px; margin-left:10px;"></i></a> 
                </td>
              
            </tr>
            <tr>
            <th scope="row">6</th>
                <td>John Deo</td>
                <td>Sale Executives </td>
                <td>Sales</td>
                <td>View</td>
                <td>
                <a class=" "  href="#" ><i  class=' bx bx-edit '  style="color:#777777; font-size:20px; margin-left:5px;"></i></a> 
                <a class=" "  href="#" ><i  class='  bx bx-trash'  style="color:red; font-size:20px; margin-left:10px;"></i></a> 
                </td>
                
            </tr> -->

                </tbody>
            </table>





</body>

</html>