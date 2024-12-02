<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>E-BOOK | LIBRARY</title>
     <link rel="icon" type="image" href="/images/logo121.webp">
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
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--> 
    <style>
        /* Bordered form */
 form {
  border: 3px solid #f1f1f1;
 }

 /* Full-width inputs */
 input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
 }

 /* Set a style for all buttons */
 button {
   background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  
 }
 button:hover {
  background-color: black;
}

 /* Add a hover effect for buttons */
 button:hover {
  opacity: 0.8;
 }

 /* Extra style for the cancel button (red) */
 .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
 }

 /* Center the avatar image inside this container */
 .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
 }

 /* Avatar image */
 img.avatar {
  width: 40%;
  border-radius: 50%;
 }

 /* Add padding to containers */
 .container {
  padding: 16px;
 }

 /* The "Forgot password" text */
 span.psw {
  float: right;
   padding-top: 16px;
 }

 /* Change styles for span and cancel button on extra small screens */
 @media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
 }
 .header-2{
   /* background-color: var(--white); */
   box-shadow: var(--box-shadow);
   color:white;
}

.header-2.active{
   position: fixed;
   top:0; left:0; right:0;
   z-index: 1000;
}

.header-2 .flex{
   padding:1rem;
   display: flex;
   align-items: center;
   justify-content: space-between;
   max-width: 2800px;
   margin-left: 20px;
   position: relative;
   height: 70px;
}
.header-2 .flex .navbar {
   display: flex;
       width: 100%;
       height: 70px;
       background-color:black;
       color: wheat;
}

 

 .header-2 .flex .logo{
   font-size: 1.5rem;
   color:var(--purple);
}

 .header-2 .flex .navbar a{
   margin:0 1rem;
   font-size: 1rem;
   color:var(--light-color);
}

 .header-2 .flex .navbar a:hover{
   color:var(--purple);
   text-decoration: underline;
}

 .header-2 .flex .icons > *{
   font-size: 1.5rem;
   color:var(--black);
   cursor: pointer;
   margin-left: 1.5rem;
}

.header-2 .flex .icons > *:hover{
   color:var(--purple);
}

#menu-btn{
   display: none;
}

.header-2 .flex .user-box{
   position: absolute;
   top:120%; right:1rem;
   /* background-color: var(--black); */
   border-radius: .5rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   padding:2rem;
   text-align: center;
   width: 30rem;
   display: none;
   animation: fadeIn .2s linear;
}

.header-2 .flex .user-box.active{
   display: inline-block;
}

.header-2 .flex .user-box p{
   font-size: 1rem;
   color:var(--light-color);
   margin-bottom: 1.5rem;
}

.header-2 .flex .user-box p span{
   color:var(--purple);
}

.header-2 .flex .user-box .delete-btn{
   margin-top: 0;
}
    </style>
</head>
<body>
    <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <!-- <div class="logo"> <a href="index.html"><img src="" alt="#"></a> </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="header-2">
      <!-- <div class="flex">
         <a href="home.php" class="logo">E-BOOK <span> |</span> LIBRARY</a>

         <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="books.php">Our Books</a>
            <a href="library.php">Library</a> -->
            <a href="contact.php">Contact</a>
           

         </nav>

         <div class="icons">
            <div id="menu-btn" class="fa fa-bars"></div>
            <a href="search_page.php" class="fa fa-search"></a>
            <a href="login.php" id="user-btn" class="fa fa-user"></a>
            <?php
              //  $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
              //  $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
         </div>

               </div>
            
         </div>

         
         <!-- end header inner -->
      </header>
      <!-- end header -->
    <!-- header -->
    <header>
         <!-- header inner -->
         <div class="header">
            
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <!-- <div class="logo"> <a href="index.html"><img src="" alt="#"></a> </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="header-2">
      <div class="flex">

         <nav class="navbar">
         <a href="index.php" class="logo">E-BOOK <span> |</span> LIBRARY</a>

            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="books.php">Our Books</a>
            <a href="library.php">Library</a>
            <!-- <a href="contact.php">Contact</a> -->
           

         </nav>

         <div class="icons">
            <div id="menu-btn" class="fa fa-bars"></div>
            <a href="search_page.php" class="fa fa-search"></a>
            <a href="login.php" id="user-btn" class="fa fa-user"></a>
            
         </div>

               </div>
            
         </div>

         
         <!-- end header inner -->
      </header>
      <!-- end header -->
    <form action="action_page.php" method="post">
        <div class="imgcontainer">
          <img src="images/avatar.webp" alt="Avatar" class="avatar">
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label for="uname"><b>Add Country</b></label>
          <select style="width: 1115px;padding: 16px;;" aria-placeholder="" name="cars" id="cars">
             <option value="pak">Pakistan</option>
            <option value="ind">India</option>
            <option value="chi">China</option>
            <option value="south">South Africa</option>
            <option value="jap">Japan</option>
            <option value="aus">Australia</option>
            <option value="russ">Russia</option>
            <option value="saudi">Saudia Arab</option>
            <option value="alb">Albania</option>
            <option value="turk">Turkey</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>
          <br><br>
          <!-- <input type="text" placeholder="Enter Your City" name="city" required> -->
          
      
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
          <h1 style="text-align:center ;">OR</h1>
          <br>
          <button style=" margin-left: 520px;" type="button" class="cancelbtn"><a href="signup.php"> Sign UP </a></button>
        </div>
       </form>
       
      
      
</body>
</html>