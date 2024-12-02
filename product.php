<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>



<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                    <label>Description</label>
                        <textarea type="text" name="detail" class="form-control" placeholder="Name"style="resize:none;" required></textarea>
                    </div>
                    <div class="form-group">
                    <label>Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Price"style="resize:none;" required>
                    </div>
                    <div class="form-group">
                    <label>Author Name</label>
                        <input type="text" name="auth" class="form-control" placeholder="Name"style="resize:none;" required>
                    </div>
 
                    <div class="form-group">
                          <label for="exampleInputPassword1">Product image</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                      
                    <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                </form>   
      
       
    </div>
   </div>
  </div>
  <?php

if(isset($_FILES["fileToUpload"]))
{
    $error = array();
    
    $file_name = $_FILES["fileToUpload"]["name"];
    $file_size = $_FILES["fileToUpload"]["size"];
    $file_type = $_FILES["fileToUpload"]["type"];
    $file_temp = $_FILES["fileToUpload"]["tmp_name"];
    $file_ext  = explode(".",$file_name);
    $file_ext = end($file_ext);
    $file_ext = strtolower($file_ext);
    $extension = array("jpg","jpeg","png");
    

    if(in_array($file_ext,$extension) === false)
    {
        $error = "extension must be png , jpg , jpeg";
    }
    if($file_size > 2097152)
    {
        $error = "file size must be less than 2 mb";
    }
    if(empty($error)== true)
    {
        move_uploaded_file($file_temp,"upload/".$file_name);
    }
    else
    {
        print_r($error);
      

    }

}


if(isset($_POST["save"]))
{
    include "includes/config.php";

    $product_name = $_POST["name"];
    $product_des = $_POST["detail"];
    $product_price=$_POST["price"];
    $product_author=$_POST["auth"];
    
    

    $query =  "INSERT INTO `products`(`p_name`, `p_description`,`p_img`,`p_price`,`p_author`) VALUES ('{$product_name}','{$product_des}','{$file_name}','{$product_price}','{$product_author}')";

    mysqli_query($conn,$query);

    // header("location:");


}



?>
      


  <div class="container-fluid">

  <!--DataTables Examples-->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Products
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Add product
              </button>


   
          </h6>
      </div>
  
      <div class="card-body">

      
  
      
      
          <div class="table-responsive">
              <?php
              include ('includes/config.php');
              $query= "SELECT * FROM products";
              $result = mysqli_query($conn,$query);
              if(mysqli_num_rows($result)>0)
              {
              
              ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                      <th>P.Id</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Author Name</th>
                      <th>Product Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      
                      <?php
                           while($row = mysqli_fetch_assoc($result))
                           {
                      ?>
                      <tr>
                          <td><?php echo $row["p_id"]?></td>
                          <td><?php echo $row["p_name"]?></td>
                          <td><?php echo $row["p_description"]?></td>
                          <td><?php echo $row["p_price"]?></td>
                          <td><?php echo $row["p_author"]?></td>
                 <td>
                     <img style="height:40px; width:50px;" src="upload/<?php echo $row["p_img"];?> " alt="">
                 </td>
                 
                 <td class='edit'><a href="update-product.php?id=<?php echo $row["p_id"]; ?>"><i class='fa fa-edit'></i></a></td>
                 <td class='delete'><a href="del.php?id=<?php echo $row["p_id"]; ?>">Delete</a></td>
                 
                

                      </tr>
        <?php } ?>
                  </tbody>
              </table>
    <?php } ?>
          </div>
      </div>
    </div>
 </div>
 <!-- /.container-fluid-->
 <?php

 include('includes/scripts.php');

 include('includes/footer.php');

                ?>