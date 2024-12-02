<?php
session_start();
$conn=mysqli_connect("localhost","root","","eproject-irham");

if(isset($_POST['add_to_cart']))
{
  if(isset($_SESSION['cart']))
  {
    $session_array_id=array_column($_SESSION['cart'],"id");

   if(!in_array($_GET['id'],$session_array_id)){
    $session_array=array(
      'id'=> $_GET['id'],
      "name"=> $_POST['name'],
      "price"=> $_POST['price'],
      "quantity"=>$_POST['quantity']

    );

    $_SESSION['cart'][]=$session_array;
   }

  }
  else{
    $session_array=array(
      'id'=> $_GET['id'],
      "name"=> $_POST['name'],
      "price"=> $_POST['price'],
      "quantity"=>$_POST['quantity']

    );

    $_SESSION['cart'][]=$session_array;
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-BOOK LIBRARY</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <style>
     nav{
       display: flex;
       width: 100%;
       height: 70px;
       background-color:black;
       color: wheat;
     }
     nav a{
       color: white;
       text-decoration: none;
     }
     nav a:hover{
       color: darkblue;
     }
   </style>
  <nav class="navbar">
  <a href="index.php" class="logo">E-BOOK <span> |</span> LIBRARY</a>

            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="books.php">Our Books</a>
            <a href="library.php">Library</a>
            <a href="contact.php">Contact</a>
            
         <div class="icons">
         
            <a href="search_page.php" class="fa fa-search"></a>
            <a href="login.php" id="user-btn" class="fa fa-user"></a>
    </div>
           

         </nav>
<body>
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
            <h2 class="text-center">Book Shopping</h2>
            <div class="col-md-12">
              <div class="row">
                
            <?php 
            
            $query="SELECT * FROM `products`";
            $result=mysqli_query($conn,$query);


            while ($row=mysqli_fetch_array($result)) {?>
            <div class="col-md-4">
              <form method="post" action="books.php?id=<?=$row['p_id']?>">
              <img src="upload/<?= $row['p_img']?>" style='height:150px;'>
              <h5 class="text-center"><?= $row['p_name'];?></h5>
              <h5 class="text-center">$<?= number_format($row['p_price'],2);?></h5>
              <input type="hidden" name="name" value="<?= $row['p_name']?>">
              <input type="hidden" name="price" value="<?= $row['p_price']?>">
              <input type="number" name="quantity" value="1" class="form-control">
              <input type="submit" name="add_to_cart" class="bt btn-warning btn-block my-2" value="Add To Cart">

              </form>
              
              </div>
            <?php }
            
            
            ?>
            
            </div>
            </div>
        </div>
        <div class="col-md-6">
          <h2 class="text-center">Item Selected</h2>

          <?php 

          $total= 0;

          $output="";

          $output .="
          <table class='table table-bordered table-striped'>
          <tr>
          <th>ID</th>
          <th>Book Name</th>
          <th>Book Price</th>
          <th>Book Quantity</th>
          <th>Total Price</th>
          <th>Action</th>
          </tr>
          ";
          if(!empty($_SESSION['cart'])){
              foreach($_SESSION['cart']as $key=>$value){
                $output .="
                <tr>
                 <td>".$value['id']."</td>
                 <td>".$value['name']."</td>
                 <td>".$value['price']."</td>
                 <td>".$value['quantity']."</td>
                 <td>".number_format($value['price'] * $value['quantity'])."</td>
                 <td>
                  <a href='books.php?action=remove&id=".$value['id']."'>
                  <button class='btn btn-danger btn-block'>Remove</button>
                  </a>
                 </td>

                </tr>
                
                ";

                $total=$total + $value['quantity'] * $value['price'];


              }
              $output .="
              <tr>
               <td colspan='3'></td>
               <td><b>Total Price</b></td>
               <td>".number_format($total,2)."</td>
               <td>
                <a href='books.php?action=clearall'>
                <button class='btn btn-warning btn-block'>Clear</button>
                </a>
               </td>

              </tr>
              
              ";
          }
          
          
          
          echo $output;
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  
  if(isset($_GET['action'])){
    if($_GET['action']=="clearall"){
      unset($_SESSION['cart']);
    }


    if($_GET['action']=="remove"){
      foreach($_SESSION['cart'] as $key => $value){
        if($value['id']== $_GET['id']){
          unset($_SESSION['cart'][$key]);
        }
      }
    }
  }
  
  ?>
</body>
</html>
 <!-- Javascript files-->
 <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   