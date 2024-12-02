
<?php 
session_start();
include "includes/header.php"; 
 include "includes/navbar.php"; 

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify Customer Details</h1>
              </div>
              <?php

include ('includes/config.php');


$cust_id = $_GET["id"];


$query= "SELECT * FROM `customer` WHERE `C.Id`='{$cust_id}'";

$result = mysqli_query($conn,$query);


if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);



?>
    
    <div class="modal-content">
                  <!-- Form Start -->
        <form action="modify.php" method="POST">
          <div class="modal-body">
          <div class="form-group">
             <input type="hidden" name="cust_id"  class="form-control" value='<?php echo $row["C.Id"]; ?>' placeholder="" >
          </div>
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="cname" class="form-control" placeholder="" value='<?php echo $row["Name"]; ?>'>      
          </div>
          <div class="form-group">
              <label>Phone</label>
              <input type="text" name="phone" class="form-control" placeholder="" value='<?php echo $row["Phone"]; ?>'>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" placeholder="" value='<?php echo $row["Email"]; ?>'>
          </div>
          <div class="form-group">
              <label>Username</label>
              <input type="text" name="cust" class="form-control" placeholder="" value='<?php echo $row["Username"]; ?>'>
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" value='<?php echo $row["Password"]; ?>'>
          </div>
          <div class="form-group">
              <label>Address</label>
              <input type="text" name="address" class="form-control" placeholder="" value='<?php echo $row["Address"]; ?>'>
          </div>
          <div class="form-group">
              <label>City</label>
              <input type="text" name="city" class="form-control" placeholder="" value='<?php echo $row["City"]; ?>'>
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
