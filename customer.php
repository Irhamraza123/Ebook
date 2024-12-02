<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');


if (isset($_POST['customer']))
 {
  $cust_name=$_POST['fname'];
  $cust_phone=$_POST['phone'];
  $cust_email=$_POST['email'];
  $cust_user=$_POST['user'];
  $cust_pass=$_POST['psw'];
  $cust_address=$_POST['address'];
  $cust_city=$_POST['city'];

  include "includes/config.php";
  $query="INSERT INTO `customer`(`Name`, `Phone`, `Email`, `Username`, `Password`, `Address`, `City`) VALUES ('{$cust_name}','{$cust_phone}','{$cust_email}','{$cust_user}','{$cust_pass}','{$cust_address}','{$cust_city}')";
  $result=mysqli_query($conn,$query);
  
  
}
?>


<div class="table-responsive">
              <?php
              include ('includes/config.php');
              $query= "SELECT * FROM customer";
              $result = mysqli_query($conn,$query);
              if(mysqli_num_rows($result)>0)
              {
                
              
              ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                      <th>C.Id</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Address</th>
                      <th>City</th>
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
                          <td><?php echo $row["C.Id"]?></td>
                          <td><?php echo $row["Name"]?></td>
                          <td><?php echo $row["Phone"]?></td>
                          <td><?php echo $row["Email"]?></td>
                          <td><?php echo $row["Username"]?></td>
                          <td><?php echo $row["Password"]?></td>
                          <td><?php echo $row["Address"]?></td>
                          <td><?php echo $row["City"]?></td>
                 
                 
                 <td class='edit'><a href="edit.php?id=<?php echo $row["C.Id"]; ?>"><i class='fa fa-edit'></i></a></td>
                 <td class='delete'><a href="erase.php?id=<?php echo $row["C.Id"]; ?>">Delete</a></td>
                 
                

                      </tr>
        <?php } ?>
                  </tbody>
              </table>
    <?php } ?>

          </div>
          <?php
          include('includes/scripts.php');

          include('includes/footer.php');

               ?>