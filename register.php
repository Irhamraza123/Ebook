<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">

          <div class="form-group">
              <label>Name</label>
              <input type="text" name="fname" class="form-control" placeholder="Enter Full Name" required>      
          </div>
          <div class="form-group">
              <label>Phone</label>
              <input type="text" name="phone" class="form-control" placeholder="Enter Number" required>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" placeholder="Enter Email " required>
          </div>
          <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" class="form-control" placeholder="Enter username" required>
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
          </div>
          <div class="form-group">
              <label>Address</label>
              <input type="text" name="address" class="form-control" placeholder="Enter your address" required>
          </div>
          <div class="form-group">
              <label>City</label>
              <input type="text" name="city" class="form-control" placeholder="Enter your city" required>
          </div>
          <div class="form-group">
              <label>User Role</label>
               <select class="form-control" name="role" required>
                 <option value="0">Librarian</option>
                 <option value="1">Assistant Librarian</option>
                 <option value="2">Normal Users</option>

                </select>
          </div>
          <div class="form-group">
                 <label for="exampleInputPassword1">User image</label>
                 <input type="file" name="fileToUpload" required>
          </div>
                    

        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
    </div>
 </form>
       
    </div>
   </div>
  </div>


  <div class="container-fluid">

  <!--DataTables Examples-->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">User Profile
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Add User
              </button>


   
          </h6>
      </div>
  
      <div class="card-body">


      <?php
      
      if(isset($_SESSION['success']) && $_SESSION['success'] !='')
      {
          echo '<h2>'.$_SESSION['success'].'</h2>';
          unset($_SESSION['success']);
      }
      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
      {
          echo '<h2>'.$_SESSION['status'].'</h2>';
          unset($_SESSION['status']);
      }
      
      ?>
          <div class="table-responsive">
              <?php
              include ('includes/config.php');
              $query= "SELECT * FROM users";
              $result = mysqli_query($conn,$query);
              if(mysqli_num_rows($result)>0)
              {
              
              ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                      <th>U.Id</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Role</th>
                      <th>User Image</th>
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
                          <td><?php echo $row["U.id"]?></td>
                          <td><?php echo $row["Name"]?></td>
                          <td><?php echo $row["Phone"]?></td>
                          <td><?php echo $row["Email"]?></td>
                          <td><?php echo $row["Username"]?></td>
                          <td><?php echo $row["Password"]?></td>
                          <td><?php echo $row["Address"]?></td>
                          <td><?php echo $row["City"]?></td>
                          <td><?php if($row["role"]=="0")
                  {
                    echo "Librarian";
                  }
              else if($row["role"]=="1")
                   {
                    echo "Assistant Libranian";
                   }
                   else{
                       echo"Normal User";
                   }

                 ?></td>
                 <td>
                     <img style="height:40px; width:50px;" src="upload/<?php echo $row["image"];?> " alt="">
                 </td>
                 
                 <td class='edit'><a href="update-user.php?id=<?php echo $row["U.id"]; ?>"><i class='fa fa-edit'></i></a></td>
                 <td class='delete'><a href="delete.php?id=<?php echo $row["U.id"]; ?>">Delete</a></td>
                 
                

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