<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

?>



<title>Dashboard!!</title>

<body id="body-pd">


    <div class="row ">


        <div class="col">

            <!-- D Dashboard start -->
            <div class="row  mt-4 ">
                <span><b>Welcome Admin,</b></span>
                <div class="col  h2"><b>Dashboard</b></div>
                <div class="col ">
                    <div class="box">
                        <i class='  bx bx-search-alt-2'></i>
                        <input id="myInput" type="text" placeholder="Search..">
                    </div>
                </div>
                &emsp; &emsp; &emsp; &emsp; &emsp;
                <div class="col  ">
                    <button type="button" class="btn "><i class=' bx bx-plus-circle'></i>Add New User</button>
                </div>
            </div> <br>

            <!-- D Dashboard end -->

            <!-- D checkbox row start -->
            <div class="row  mt-2">
                <div class="col pt-2">

                    <div class="form-check form-check-inline">
                        <label class="form-check-label " for="flexCheckChecked">
                            ALL
                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>

                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            OPEN
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            HOLD
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            CLOSED
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            IN PROGRASS
                        </label>
                    </div>

                </div>
                <div class="col  ">
                    <button type="button" class=" btn1 "><i class=' bx bx-slider'></i> Filter</button>
                </div>
            </div>
        </div>


        <table class=" table tbl">

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
                    $query= "SELECT * FROM tickets ";
                    $query_run = mysqli_query($con ,$query);
                    
                    if(mysqli_num_rows( $query_run)> 0)
                    {
                        foreach($query_run as $row)
                        {

                            ?>
                             <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['tickets_id']; ?></td>
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['department_id'];  ?></td>
                                
                                <td>
                                    <div class="dropdown dropstart  text-end dot">
                                        <button type="button" class="dot" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded "></i>
                                        </button>
                                        <ul class="dropdown-menu drop_list">
                                            <li><a class="dropdown-item active" href="ticket_detail.php">View<i style="margin-left:100px;" class=' bx bx-show'></i></a></li>
                                            <li><a class="dropdown-item " href="#">Edit<i style="margin-left:110px;" class='bx bx-pencil'></i></a></li>
                                            <li><a class="dropdown-item " href="#">Transfer<i style="margin-left:80px;" class='  bx bx-transfer'></i></a></li>
                                        </ul>
                                    </div>
                                </td>
                              </tr>

                    <?php
                        }


                    }

                    else
                    {

                
                ?>
                    <tr>
                        <td  colspan ="6"> No record found</td>
                    </tr>
                <?php
                    }
                ?>

               
                <!-- <tr>
                    <th scope="row">#2345</th>
                    <td>Sales</td>
                    <td>John Deo</td>
                    <td>Sales Executive</td>
                    <td>open</td>
                    <td>
                        <div class="dropdown dropstart text-end dot">
                            <button type="button" class="dot" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded "></i>
                            </button>
                            <ul class="dropdown-menu drop_list">
                                <li><a class="dropdown-item active " href="ticket_detail.php">View<i style="margin-left:100px;" class=' bx bx-show'></i></a> </li>
                                <li><a class="dropdown-item " href="#">Edit<i style="margin-left:110px;" class='bx bx-pencil'></i></i></a></li>
                                <li><a class="dropdown-item " href="#">Transfer<i style="margin-left:80px;" class='  bx bx-transfer'></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">#2345</th>
                    <td>Sales</td>
                    <td>John Deo</td>
                    <td>Sales Executive</td>
                    <td>open</td>
                    <td>
                        <div class="dropdown dropstart text-end dot">
                            <button type="button" class="dot" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded "></i>
                            </button>
                            <ul class="dropdown-menu drop_list">
                                <li><a class="dropdown-item active" href="ticket_detail.php">View<i style="margin-left:100px;" class=' bx bx-show'></i></a></li>
                                <li><a class="dropdown-item " href="#">Edit<i style="margin-left:110px;" class='bx bx-pencil'></i></a></li>
                                <li><a class="dropdown-item " href="#">Transfer<i style="margin-left:80px;" class='  bx bx-transfer'></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">#2345</th>
                    <td>Sales</td>
                    <td>John Deo</td>
                    <td>Sales Executive</td>
                    <td>open</td>
                    <td>
                        <div class="dropdown dropstart text-end dot">
                            <button type="button" class="dot" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded "></i>
                            </button>
                            <ul class="dropdown-menu drop_list">
                                <li><a class="dropdown-item active" href="ticket_detail.php">View<i style="margin-left:100px;" class=' bx bx-show'></i></a></li>
                                <li><a class="dropdown-item " href="#">Edit<i style="margin-left:110px;" class='bx bx-pencil'></i></a></li>
                                <li><a class="dropdown-item " href="#">Transfer<i style="margin-left:80px;" class='  bx bx-transfer'></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">#2345</th>
                    <td>Sales</td>
                    <td>John Deo</td>
                    <td>Sales Executive</td>
                    <td>open</td>
                    <td>
                        <div class="dropdown dropstart text-end dot">
                            <button type="button" class="dot" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded "></i>
                            </button>
                            <ul class="dropdown-menu drop_list">
                                <li><a class="dropdown-item active" href="ticket_detail.php">View<i style="margin-left:100px;" class=' bx bx-show'></i></a></li>
                                <li><a class="dropdown-item " href="#">Edit<i style="margin-left:110px;" class='bx bx-pencil'></i></a></li>
                                <li><a class="dropdown-item " href="#">Transfer<i style="margin-left:80px;" class='  bx bx-transfer'></i></a></li>
                            </ul>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">#2345</th>
                    <td>Sales</td>
                    <td>John Deo</td>
                    <td>Sales Executive</td>
                    <td>open</td>
                    <td>
                        <div class="dropdown dropstart text-end dot">
                            <button type="button" class="dot" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded "></i>
                            </button>
                            <ul class="dropdown-menu   drop_list">
                                <li><a class="dropdown-item active" href="ticket_detail.php">View<i style="margin-left:100px;" class=' bx bx-show'></i></a></li>
                                <li><a class="dropdown-item " href="#">Edit<i style="margin-left:110px;" class='bx bx-pencil'></i></a></li>
                                <li><a class="dropdown-item " href="#">Transfer<i style="margin-left:80px;" class='  bx bx-transfer'></i></a></li>
                            </ul>
                        </div>
                    </td>

                </tr> -->

            </tbody>
        </table>



</body>

</html>