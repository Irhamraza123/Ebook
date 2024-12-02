
<?php 
session_start();
include "includes/header.php"; 
 include "includes/navbar.php"; 

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify Product Details</h1>
              </div>
              <?php

include ('includes/config.php');


$p_id = $_GET["id"];


$query= "SELECT * FROM `products` WHERE `p_id`='{$p_id}'";

$result = mysqli_query($conn,$query);


if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);



?>
    
    <div class="modal-content">
                  <!-- Form Start -->
        <form action="add.php" method="POST">
          <div class="modal-body">
          <div class="form-group">
             <input type="hidden" name="user_id"  class="form-control" value='<?php echo $row["p_id"]; ?>' placeholder="" >
          </div>
          <div class="form-group">
          <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value='<?php echo $row["p_name"]; ?>' required>
                    </div>
                    <div class="form-group">
                    <label>Description</label>
                        <input type="text" name="detail" class="form-control" placeholder="Name" value='<?php echo $row["p_description"]; ?>' required>
                    </div>
                    <div class="form-group">
                    <label>Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Price"style="resize:none;"value='<?php echo $row["p_price"]; ?>' required>
                    </div>
                    <div class="form-group">
                    <label>Author Name</label>
                        <input type="text" name="auth" class="form-control" placeholder="Name"style="resize:none;"value='<?php echo $row["p_author"]; ?>' required>
                    </div>
 
                    <div class="form-group">
                          <label for="exampleInputPassword1">Product image</label>
                          <input type="file" name="fileToUpload" value='<?php echo $row["p_img"]; ?>' required>
                      </div>
          <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
        </div>   
    </form>

<?php } ?>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php include ('includes/footer.php'); ?>
