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
   </head>
   <style>
      .cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
 justify-content: space-between; 
  flex-wrap: wrap;
  position:relative;
 
}

.card {
   margin: -10px auto; 
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}
/* .cards-list{
  margin:-10px;
} */
.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}

/* new design of course card
***********************************/ 
.row-card-course {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: 25px auto;
}

.row-card-course .course-card {
  margin-top: 15px;
  margin-bottom: 15px;
}

.row-card-course .course-card > .thumbnail {
  margin-left: 10px;
  margin-right: 10px;
}

.course-card .thumbnail {
  padding: 0;
  border: none;
  text-align: center;
  border-radius: 0;
  margin: 0 auto;
  width: 255px;
  background: transparent;
  font-family: "Open Sans", sans-serif;
  font-size: 14px;
  line-height: normal;
}

.course-card .thumbnail .full-length {
  height: 5px;
  width: 100%;
  background: #bcbcbc;
  display: block;
}

.course-card .thumbnail .current-length {
  height: 100%;
  width: 68%;
  background: red;
  display: block;
}

.course-card .course-card-image {
  width: auto;
  height: auto;
  margin-bottom: -40px;
  min-height: 190px;
}

.course-card .course-card-image > a {
  display: block;
  width: 100%;
  height: 100%;
  position: relative;
}

.course-card .course-card-image > a > img {
  width: 100%;
  min-height: 185px;
}

.course-card .course-card-image > a:before {
  position: absolute;
  content: '';
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -webkit-transition: 0.5s all;
  transition: 0.5s all;
}

.course-card .course-card-image > a:after {
  position: absolute;
  content: '►';
  left: 0;
  top: 0;
  width: 100%;
  height: 166px;
  border: 0;
  background-image: url();
  background-repeat: no-repeat;
  background-position: center center;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -webkit-transition: 0.5s all;
  transition: 0.5s all;
  opacity: 0;
}

.course-card .course-card-image > a:hover:before {
  background-color: rgba(0,0,0,0.5);
}

.course-card .course-card-image > a:hover:after {
  opacity: 1;
}

.course-card .thumbnail .caption {
  margin: 0 auto;
  width: 230px;
  padding: 10px;
  position: relative;
  box-sizing: border-box;
  background-color: #E9E9E9;
}

.course-card .course-title {
  min-height: 40px;
}

.course-title-heading {
  margin-top: 0;
  margin-bottom: 0;
}

.course-title-heading a {
  font-size: 17px;
  font-weight: 400;
  color: #444;
  text-decoration: none;
  display: inherit;
  line-height: 20px;
}

.course-title-heading a:hover {
  color: #222;
}

.course-card .btn-group {
  width: 100%;
}

.course-card .btn-group .course-card-btn {
  background: transparent;
  border-color: transparent;
  color: #444;
  font-size: 18px;
}

.course-card .course-fav-cost {
  border-top: 1px solid #bcbcbc;
  border-bottom: 1px solid #bcbcbc;
  width: 100%;
  height: auto;
  float: left;
  padding: 4px 0;
  text-align: left;
  margin: 10px auto;
}

.course-card .course-fav-cost .course-rating-star {
  padding-left: 0;
  width: 70%;
  float: left;
}

.course-card .course-fav-cost .course-rating-star img {
  height: 10px;
  width: auto;
}

.course-card .course-fav-cost .course-rating-star .course-rating {
  unicode-bidi: bidi-override;
  direction: rtl;
}

.course-card .course-fav-cost .course-rating-star .course-rating > span > span {
  display: inline-block;
  position: relative;
  width: auto;
  color: #2c5f00;
}

.course-card .course-fav-cost .course-rating-star .course-rating > span > span.active:before,
.course-card .course-fav-cost .course-rating-star .course-rating > span > span.active ~ span:before {
  content: "\2605";
  position: absolute;
}

.course-card .course-fav-cost .course-fav-price {
  padding-right: 0;
  width: 30%;
  float: left;
}

.course-card .course-fav-cost .course-fav-price .price-dollar {
  color: #2c5f00;
  font-size: 12px;
  font-weight: 700;
  margin-top: 3px;
}

.course-card .course-fav-cost .price {
  padding-right: 0;
}

.course-card .course-fav-cost .price .price-dollar {
  color: #2c5f00;
  font-size: 12px;
  font-weight: 700;
  margin-top: 3px;
}

.course-card-foot img {
  width: 35px;
  height: 35px;
  padding: 0 10px 0 0;
  box-sizing: content-box;
}

.course-card-foot-name {
  text-align: left;
}

.course-card-foot .main-name {
  color: #444;
  font-size: 13px;
  height: 100%;
  line-height: 35px;
  text-align: left;
  display: table;
}

.course-card-foot .main-name:hover,
.course-card-foot .main-name:focus {
  text-decoration: none;
}
/* new design of course card end */

   /* competition */
   @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* html,body{
  display: grid;
  height: 100%;
  place-items: center;
  text-align: center;
  background: #f2f2f2;
} */
.slider{
  max-width: 1100px;
  display: flex;
}
.slider .card{
  flex: 1;
  margin: 0 10px;
  background: #fff;
}
.slider .card .img{
  height: 200px;
  width: 100%;
}
.slider .card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slider .card .content{
  padding: 10px 20px;
}
.card .content .title{
  font-size: 25px;
  font-weight: 600;
}
.card .content .sub-title{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}
.card .content p{
  text-align: justify;
  margin: 10px 0;
}
.card .content .btn{
  display: block;
  text-align: left;
  margin: 10px 0;
}
.card .content .btn button{
  background: #e74c3c;
  color: #fff;
  border: none;
  outline: none;
  font-size: 17px;
  padding: 5px 8px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.2s;
}
.card .content .btn button:hover{
  transform: scale(0.9);
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
            <a href="contest.php">Contest</a>

           

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
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                        <p>"Libraries store the energy that fuels the imagination.<br> They open up windows to the world and inspire us to explore and achieve,<br> and contribute to improving our quality of life.</p>
                        <div class="button_section"> <a class="main_bt" href="about.php">Read More</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="https://www.facebook.com/"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner 2.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                        <p>"Libraries store the energy that fuels the imagination.<br> They open up windows to the world and inspire us to explore and achieve,<br> and contribute to improving our quality of life.</p>
                        <div class="button_section"> <a class="main_bt" href="about.html">Read More</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="#"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/book banner 3.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                        <p>"Libraries store the energy that fuels the imagination.<br> They open up windows to the world and inspire us to explore and achieve,<br> and contribute to improving our quality of life.</p>
                        <div class="button_section"> <a class="main_bt" href="about.html">Read More</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="#"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="aboutheading">
                     <h2>About <strong class="black">Us</strong></h2>
                     <span>A library is a very useful platform that brings together people willing to learn. It helps us in learning and expanding our knowledge. We develop our reading habits from a library and satisfy our thirst and curiosity for knowledge. This helps in the personal growth of a person and development.</span>
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                     <p> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                     <a href="#">Read More</a>
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
      
      <!-- end about -->
      <!-- Library -->
      <div class="Library">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our <strong class="black">Library </strong></h2>
                     <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span> 
                  </div>
               </div>
            </div>
         </div>
         <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="Library-box">
                        <figure><img src="images/Library-.jpg" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="read-more">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Library -->
      <!--Books -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <h2>Our <strong class="black">Books </strong></h2>
                     <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span> 
                  </div>
               </div>
            </div>
            
            <div class="titlepage">
            <h2><strong class="black">Novels </strong></h2>
                      
                      <div class="container-fluid py-5">
                     <div class="row">
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
 <div class="cards-list">
<div class="card 1">
  <div class="card_image" > <img src="images/novel-1.jpg"/> </div>

</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="card 2">
  <div class="card_image">
    <img src="images/novel-3.avif"/>
    </div>
  <!-- <div class="card_title title-white">
    <p>Card Title</p>
  </div> -->
</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
<div class="card 3">
  <div class="card_image">
    <img src="images/novel-4.jpg" />
  </div>
</div>
</div>
  
<!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
  <div class="card 4">
  <div class="card_image">
    <img src="images/novel-2.jpg" />
    </div>

  </div>
 </div> -->
</div>
<div class="col-md-12"> 
                  <div class="read-more">
                     <a href="novels.php">Show More..</a>
                  </div>
               </div>
</div>
</div>
</div>

      

    <!-- Products End -->

    <div class="Books">
         <div class="container">
          
    <div class="titlepage">
    <h2><strong class="black">Comics </strong></h2>
                    
<div class="container-fluid py-5">
                     <div class="row">
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
 <div class="cards-list">
<div class="card 1">
  <div class="card_image"> <img src="images/comic-2.jpg" /> </div>

</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="card 2">
  <div class="card_image">
    <img src="images/comic-1.jpg"/>
    </div>

</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
<div class="card 3">
  <div class="card_image">
    <img src="images/comic-3.jpg" />
  </div>

</div>
</div>
  

</div>
<div class="col-md-12"> 
                  <div class="read-more">
                     <a href="poetry.php">Show More..</a>
                  </div>
               </div>
</div>
</div>
</div>
<div class="Books">
         <div class="container">
          
    <div class="titlepage">
    <h2><strong class="black">Story books </strong></h2>
                    
<div class="container-fluid py-5">
                     <div class="row">
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
 <div class="cards-list">
<div class="card 1">
  <div class="card_image"> <img src="images/story-1.jpg" /> </div>

</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="card 2">
  <div class="card_image">
    <img src="images/story-5.jpg"/>
    </div>

</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
<div class="card 3">
  <div class="card_image">
    <img src="images/story-3.jpg" />
  </div>

</div>
</div>
  

</div>
<div class="col-md-12"> 
                  <div class="read-more">
                     <a href="story.php">Show More..</a>
                  </div>
               </div>
</div>
</div>
</div>


   <!-- rating cards -->

   <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <h2> Best <strong class="black"> Selling Books On E-book Library</strong></h2>
                        <span>Explore best sellers,curated picks, editorial reviews and more</span> 
                     </div>
                     
               </div>
            </div>
   <div class="container">
<div class="row-card-course">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="course-card">
    <div class="thumbnail">
      <div class="course-card-image">
        <a href="/">
          <img class="not-img 1 img-res" src="images/selling-1.jpg"/>
        </a>
      </div>
      <div class="caption">
        <div class="course-title">
          <h3 class="course-title-heading">
            <a class="not-a" href="/"> John Grisham</a>
          </h3>
        </div>
        <div class="course-fav-cost row">
          <div class="course-rating-star">
            <small>Rating</small>
            <br>
            <div class="course-rating">
              <span><span> ☆</span><span class="active"> ☆</span><span> ☆</span><span> ☆</span><span> ☆</span></span>
            </div>
          </div>
          <div class="course-fav-price text-right">
            <small>Price</small>
            <div class="price-dollar">₹01234.50</div>
          </div>
        </div>
        <div class="course-card-foot">
        
          <div class="course-card-foot-name main-name">
            The Boys From Biloxi
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="course-card">

    <div class="thumbnail">
      <div class="course-card-image">
        <a href="/">
          <img class="not-img 2 img-res" src="images/selling-2.jpg">
        </a>
      </div>
      <div class="caption">
        <div class="course-title">
          <h3 class="course-title-heading">
            <a class="not-a" href="/">Michelle Obama</a>
          </h3>
        </div>
        <div class="course-fav-cost row">
          <div class="course-rating-star">
            <small>Rating</small>
            <br>
            <div class="course-rating">
              <span><span> ☆</span><span> ☆</span><span> ☆</span><span class="active"> ☆</span><span> ☆</span></span>
            </div>
          </div>
          <div class="course-fav-price text-right">
            <small>Price</small>
            <div class="price-dollar">$01234.50</div>
          </div>
        </div>
        <div class="course-card-foot">
         
          <div class="course-card-foot-name main-name">
            The Light We Carry
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="course-card">
    <div class="thumbnail">
      <div class="course-card-image">
        <a href="/">
          <img class="not-img 1 img-res" src="images/selling-3.jpg">
        </a>
      </div>
      <div class="caption">
        <div class="course-title">
          <h3 class="course-title-heading">
            <a class="not-a" href="/">The Star And The Shamrock</a>
          </h3>
        </div>
        <div class="course-fav-cost row">
          <div class="course-rating-star">
            <small>Rating</small>
            <br>
            <div class="course-rating">
              <span><span> ☆</span><span class="active"> ☆</span><span> ☆</span><span> ☆</span><span> ☆</span></span>
            </div>
          </div>
          <div class="course-fav-price text-right">
            <small>Price</small>
            <div class="price-dollar">₹01234.50</div>
          </div>
        </div>
        <div class="course-card-foot">
         
          <div class="course-card-foot-name main-name">
            Today Best Selling Author
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- rating card 2 -->
<div class="container">
<div class="row-card-course">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="course-card">
    <div class="thumbnail">
      <div class="course-card-image">
        <a href="/">
          <img class="not-img 1 img-res" src="images/selling-4.jpg">
        </a>
      </div>
      <div class="caption">
        <div class="course-title">
          <h3 class="course-title-heading">
            <a class="not-a" href="/"> Kat Martin</a>
          </h3>
        </div>
        <div class="course-fav-cost row">
          <div class="course-rating-star">
            <small>Rating</small>
            <br>
            <div class="course-rating">
              <span><span> ☆</span><span class="active"> ☆</span><span> ☆</span><span> ☆</span><span> ☆</span></span>
            </div>
          </div>
          <div class="course-fav-price text-right">
            <small>Price</small>
            <div class="price-dollar">₹01234.50</div>
          </div>
        </div>
        <div class="course-card-foot">
     
          <div class="course-card-foot-name main-name">
            One Last Chance
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="course-card">

    <div class="thumbnail">
      <div class="course-card-image">
        <a href="/">
          <img class="not-img 2 img-res" src="images/selling-5.jpg">
        </a>
      </div>
      <div class="caption">
        <div class="course-title">
          <h3 class="course-title-heading">
            <a class="not-a" href="/">Reckless Girls</a>
          </h3>
        </div>
        <div class="course-fav-cost row">
          <div class="course-rating-star">
            <small>Rating</small>
            <br>
            <div class="course-rating">
              <span><span> ☆</span><span> ☆</span><span> ☆</span><span class="active"> ☆</span><span> ☆</span></span>
            </div>
          </div>
          <div class="course-fav-price text-right">
            <small>Price</small>
            <div class="price-dollar">$01234.50</div>
          </div>
        </div>
        <div class="course-card-foot">
   
          <div class="course-card-foot-name main-name">
           Rachel Hawkings
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div class="course-card">
    <div class="thumbnail">
      <div class="course-card-image">
        <a href="/">
          <img class="not-img 1 img-res" src="images/selling-6.jpg">
        </a>
      </div>
      <div class="caption">
        <div class="course-title">
          <h3 class="course-title-heading">
            <a class="not-a" href="/"> The Nurses Secret</a>
          </h3>
        </div>
        <div class="course-fav-cost row">
          <div class="course-rating-star">
            <small>Rating</small>
            <br>
            <div class="course-rating">
              <span><span> ☆</span><span class="active"> ☆</span><span> ☆</span><span> ☆</span><span> ☆</span></span>
            </div>
          </div>
          <div class="course-fav-price text-right">
            <small>Price</small>
            <div class="price-dollar">₹01234.50</div>
          </div>
        </div>
         <div class="course-card-foot">
          <!-- <img align="left" class="not-img course-card-foot-img" src="http://www.personalbrandingblog.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640-300x300.png"> -->
          <div class="course-card-foot-name main-name">
            Amanda Skenandore
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

     <!-- announcement of competition -->

     <div class="Books">
         <div class="container" >
            <div class="row">
               <div class="col-md-10 offset-md-1">
                     <div class="titlepage" style="margin-top:50px;">
                        <h2> Kids Essay <strong class="black"> <br>Writing  Competition winners 2022</strong></h2>
                        <span>Here they are... the writing competition winners of our <br> fourth annual essay competition on E-book Library</span> 
                     </div>
                     
               </div>
            </div>
</div>
</div>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
 
  
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  </head>
  <body>
  <div class="container">
            <div class="row">
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
<img src="images/comp-1.jpg" alt=""></div>
<div class="content">
          <!-- <div class="title">
Briana Tozour</div>
<div class="sub-title">
Graphic Designer</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p> -->
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="images/comp-3.jpg" alt=""></div>
<div class="content">
          <!-- <div class="title">
Pricilla Preez</div>
<div class="sub-title">
Web Developer</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p> -->
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="images/comp-2.jpg" alt=""></div>
<div class="content">
          <!-- <div class="title">
Pricilla Preez</div>
<div class="sub-title">
Web Developer</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p> -->
<div class="btn">
            <button>Read more</button>
          </div>
          
</div>
</div>
</div>
</div>
</div>
<script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

  </body>
</html>



  
  








      <!-- end Books -->
      <!-- Contact -->
      <div class="Contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage3">
                     <h2>Contact</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <form>
                     <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Name" type="Name">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Phone Number" type="Phone Number">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Email" type="Email">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <textarea class="textarea" placeholder="Message">Message</textarea>
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
      <script src="js/competition.js"></script>
      
   </body>
</html>