<?php 
include('header.php');
include('connect.php');
if(isset($_POST['submit']))
{
    $url = 'http://'.$_SERVER['HTTP_HOST'].'/bevkoof1/admin/';
    $dayoffer = $_POST['offer'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $cid = $_POST['catid'];
    $description = $_POST['description'];
    // $position = $_POST['position'];
    $target_dir = "../img/";
    $target_file = $target_dir.basename($_FILES["fileUpload"]["name"]);
    
    if (!file_exists($_FILES["fileUpload"]["tmp_name"]))
    { 
      $resMessage = array(
        "status" => "alert-danger",
        "message" =>"Image coudn't be uploaded."
      );
    }else
    { 
    
     if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],$target_file))
     {
       $target_file = $url.$target_file;

       $q = " INSERT INTO product (`category`,`dayoffer`,`image`,`title`, `price`, `description`) VALUES ('$cid','$dayoffer','$target_file','$title','$price','$description')";
    
      $query=mysqli_query($conn,$q);
       header('location:product.php');
       
     } 
     else
     {
       $resMessage = array(
         "status" => "alert-danger",
         "message"=>"image coudn't find."
       );
     }
    }
    // die("kiran");
    header('location:product.php');
}

?>
<body class="hold-transition sidebar-mini layout-fixed">

  <!-- Preloader -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include('sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="card-body">
      <form method = "post" enctype="multipart/form-data">                 
                
        <?php
                include 'connect.php';
                $q1 = " SELECT * from subchild";
                $subcategory = mysqli_query($conn,$q1);
                
                ?>
      <div class="form-group">
                    <label for="exampleSelectBorder">Category</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder" name="catid" >
                    <?php 
                    while($res1 = mysqli_fetch_array($subcategory))
                    {?>
                      <option value="<?php echo $res1['id']; ?>"><?php echo $res1['title']; ?></option>
                    <?php } ?>
                     </select>
                </div>    
                <div class="form-group">
                    <label for="exampleInputPassword1">Day Offer</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter day offer of the image"name="offer">
                  </div>    
                  <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Choose image " name="fileUpload"  >
                   <br> <img id = "display_image" style = "width:80px; margin-left:21px;"> 
                    <div id ="preview"></div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title Of The Image"name="title">
                  </div>
                   
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Price"name="price">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Description"name="description">
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleSelectBorder">Position</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder" name="position" >
                    <option>left</option>
                    <option>Right</option>
                    <option>Center</option>
                    <option>Top</option>
                    <option>Down</option>
                    </select>
                </div> -->

                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
                </div>
            
        </form>

</div>    
  
  <!-- /.content-wrapper -->
  

  
<?php 
  include('footer.php');
 echo '<script>
 
  const image_input = document.querySelector("#exampleInputEmail1");
  var uploaded_image = "";
  
  image_input.addEventListener("change",function(){
     const reader = new FileReader();
     
     reader.addEventListener("load",()=>{
      uploaded_image = reader.result;
      
      document.querySelector("#display_image").src=`${uploaded_image}`;
     })
      reader.readAsDataURL(this.files[0]);
  })
</script>'  ;        

 ?>


<!-- Control Sidebar -->
