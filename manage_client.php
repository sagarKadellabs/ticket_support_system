<?php

  include 'header.php';
  include 'sidebar.php';
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
                        <input type="search" id="form1" class="form-control" placeholder="Search by ID, Department" />
                    </div>
                </div>
                &emsp; &emsp; &emsp; &emsp; &emsp;
                <div class="col  ">
                    <form action="create_client.php">
                        <button type="submit " class="btn "><i class=' bx bx-plus-circle'></i>Add New User</button>
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
                <tbody class="t_body">
                    <tr>
                        <th scope="row">1</th>
                        <td>John Deo</td>
                        <td>Sale Executives </td>
                        <td>Sales</td>
                        <td>View</td>
                        <td>
                            <a class=" " href="#"><i class=' bx bx-edit '
                                    style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                            <a class=" " href="#"><i class='  bx bx-trash'
                                    style="color:red; font-size:20px; margin-left:10px;"></i></a>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>John Deo</td>
                        <td>Manager</td>
                        <td>Sales</td>
                        <td>Edit</td>
                        <td>
                            <a class=" " href="#"><i class=' bx bx-edit '
                                    style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                            <a class=" " href="#"><i class='  bx bx-trash'
                                    style="color:red; font-size:20px; margin-left:10px;"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>John Deo</td>
                        <td>Marketing</td>
                        <td>Sales</td>
                        <td>Transfer</td>
                        <td>
                            <a class=" " href="#"><i class=' bx bx-edit '
                                    style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                            <a class=" " href="#"><i class='  bx bx-trash'
                                    style="color:red; font-size:20px; margin-left:10px;"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>John Deo</td>
                        <td>Sale Executives </td>
                        <td>Sales</td>
                        <td>Edit</td>
                        <td>
                            <a class=" " href="#"><i class=' bx bx-edit '
                                    style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                            <a class=" " href="#"><i class='  bx bx-trash'
                                    style="color:red; font-size:20px; margin-left:10px;"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>John Deo</td>
                        <td>Sale Executives </td>
                        <td>Sales</td>
                        <td>Transfer</td>
                        <td>
                            <a class=" " href="#"><i class=' bx bx-edit '
                                    style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                            <a class=" " href="#"><i class='  bx bx-trash'
                                    style="color:red; font-size:20px; margin-left:10px;"></i></a>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>John Deo</td>
                        <td>Sale Executives </td>
                        <td>Sales</td>
                        <td>View</td>
                        <td>
                            <a class=" " href="#"><i class=' bx bx-edit '
                                    style="color:#777777; font-size:20px; margin-left:5px;"></i></a>
                            <a class=" " href="#"><i class='  bx bx-trash'
                                    style="color:red; font-size:20px; margin-left:10px;"></i></a>
                        </td>

                    </tr>

                </tbody>
            </table>
</body>

</html>