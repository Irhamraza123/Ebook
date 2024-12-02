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
      <title>E-BOOK LIBRARY</title>
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
   </head>
   <style>
      #abc{
  width:250px;
  height:40px;
}
#def{
  width:100px;
  height:40px;
  background-color:black;
  color:white;
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
   font-size: 2.5rem;
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
   top:120%; right:2rem;
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
   font-size: 2rem;
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
   <!-- body -->
   <body class="main-layout contact-page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
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
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Contact -->
      <div class="Contact">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <form>
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <input class="form-control" placeholder="Name" name="name" type="text">
                        </div>
                         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <input class="form-control" placeholder="Email" name="email" type="Email">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <input class="form-control" placeholder="Phone Number" name="phone_nu" type="text">
                        </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <input class="form-control" placeholder="Subject" name="subject" type="text">
                        </div>
                        <div class="col-sm-12">
                           <textarea class="textarea" name="message" placeholder="Message">Message</textarea>
                        </div>
                     </div>
                  </form>
               </div>
               <button class="send-btn">Send</button>
            </div>
         </div>
      </div>
      <!-- end Contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                     <form action="search.php" method="POST" style="margin-top:10px; padding-left:200px;">
                                <input type="text" name="search_term" id="abc" placeholder="Search here" class="search">
                                <input type="submit" name="search" id="def" value="Search">
</form>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Saba Maqsood, Irham Raza and Sudais Ladhani</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>