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

 

 .header-2 .flex .logo{
   font-size: 2.5rem;
   color:var(--purple);
}
.header-2 .flex .navbar {
   display: flex;
       width: 100%;
       height: 70px;
       background-color:black;
       color: wheat;
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

      button{
  background-color: purple; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 200px;
}

      
.reviews{
   background-color: var(--light-bg);
}

.reviews .box-container{
   max-width: 1200px;
   margin:0 auto;
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   align-items: center;
   gap:1.5rem;
   justify-content: center;
}

.reviews .box-container .box{
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   text-align: center;
   padding:2rem;
}

.reviews .box-container .box img{
   height: 10rem;
   width: 10rem;
   border-radius: 50%;
}

.reviews .box-container .box p{
   padding:1rem 0;
   line-height: 2;
   color:var(--light-color);
   font-size: 1.5rem;
}

.reviews .box-container .box .stars{
   background-color: var(--light-bg);
   display: inline-block;
   margin:.5rem 0;
   border-radius: .5rem;
   border:var(--border);
   padding:.5rem 1.5rem;
}

.reviews .box-container .box .stars i{
   font-size: 1.7rem;
   color:var(--orange);
   margin:.2rem;
}

.reviews .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
   margin-top: 1rem;
}

.authors .box-container{
   max-width: 1200px;
   margin:0 auto;
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   align-items: center;
   gap:1.5rem;
   justify-content: center;
}

.authors .box-container .box{
   position: relative;
   text-align: center;
   border:var(--border);
   box-shadow: var(--box-shadow);
   overflow: hidden;
   border-radius: .5rem;
}

.authors .box-container .box img{
   width: 100%;
   height: 40rem;
   object-fit: cover;
}

.authors .box-container .box .share{
   position: absolute;
   top:0; left:-10rem;
}

.authors .box-container .box:hover .share{
   left: 1rem;
}

.authors .box-container .box .share a{
   height: 4.5rem;
   width: 4.5rem;
   line-height: 4.5rem;
   font-size: 2rem;
   background-color: var(--white);
   border:var(--border);
   display: block;
   margin-top: 1rem;
   color:var(--black);
}

.authors .box-container .box .share a:hover{
   background-color: var(--black);
   color:var(--white);
}

.authors .box-container .box h3{
   font-size: 2.5rem;
   color:var(--black);
   padding:1.5rem;
   background-color: var(--white);
}
.title{
   text-align: center;
   margin-bottom: 2rem;
   text-transform: uppercase;
   color:var(--black);
   font-size: 4rem;
}

 .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   gap:1.5rem;
   max-width: 1200px;
   margin:0 auto;
   align-items: flex-start;
}

 .box-container .box{
   border-radius: .5rem;
   padding:2rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border:var(--border);
   text-align: center;
}

 .box-container .box h3{
   font-size: 5rem;
   color:var(--black); 
}

 .box-container .box p{
   margin-top: 1.5rem;
   padding:1.5rem;
   background-color: var(--light-bg);
   color:var(--purple);
   font-size: 2rem;
   border-radius: .5rem;
   border:var(--border);
}
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
#more {display: none;}
      </style>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
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
      <!-- about -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>About Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="aboutheading">
                     <span>A library is a place where books and sources of information are stored. They make it easier for people to get access to them for various purposes. </span>
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                  <p>A library is a collection of materials, books or media that are accessible for use and not just for display purposes. A library provides physical (hard copies) or digital access (soft copies) materials, and may be a physical location or a virtual space, or both. A library's collection can include printed materials and other physical resources in many formats such as DVD, CD and cassette as well as access to information, music or other content held on bibliographic databases.<span id="dots">...</span><span id="more">A library, which may vary widely in size, may be organized for use and maintained by a public body such as a government; an institution such as a school or museum; a corporation; or a private individual. In addition to providing materials, libraries also provide the services of librarians who are trained and experts at finding, selecting, circulating and organizing information and at interpreting information needs, navigating and analyzing very large amounts of information with a variety of resources.</span></p>
                  <button onclick="myFunction()" id="myBtn">Read more</button>
                  
                  <script>
                     function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

                  </script>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                  <div class="about-box">
                     <figure><img src="images/about.png" alt="img" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <section class="reviews">

   <h1 class="title">Customer's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cus2.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Joshua</h3>
      </div>

      <div class="box">
         <img src="images/cus3.jpeg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Luis Fonsi</h3>
      </div>

      <div class="box">
         <img src="images/cus4.jpeg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Oliver</h3>
      </div>

      <div class="box">
         <img src="images/cus6.jpeg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Isabella</h3>
      </div>

      <div class="box">
         <img src="images/cus2.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Archer</h3>
      </div>

      <div class="box">
         <img src="images/cus5.jpeg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Amelia</h3>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Elizabeth</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Sophia</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>David</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Stella</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Jason</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
         </div>
         <h3>Chae-Won</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
         </div>
         <h3>George Orwil</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
         </div>
         <h3>Charles Dickson</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
         </div>
         <h3>Henry Richard</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
         </div>
         <h3>Liza</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
         </div>
         <h3>Jane Austen</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
         </div>
         <h3>Aleena</h3>
      </div>

   </div>

</section>

      <!-- end about -->
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