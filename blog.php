<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feel well blogs</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link href="css/blogs.css" rel="stylesheet">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.php" class="logo"><img src="images/feel-well.png" width=80px></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="blog.php">blog</a>
        <a href="happyspace.php">Happy Space</a>
        <a href="app/chatbot.php">Chatbot</a>
        <a href="index.php#about">about</a>
        <a href="index.php#contact">contact</a>
        <a href="register.php">register</a>
        <a href="login.php">login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- info section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Blogs</h3>
        <p>help you know more about Mental Health</p>
    </div>

    <div class="image">
        <img src="images/blog.png" alt="">
    </div>

</section>

<!-- info section ends -->


<!-- quotes section starts  -->
<section class="quotes" >

    <div class="write">
        <h1>“You don’t have to control your thoughts. You just have to stop letting them control you.” —<span class="p-colour">Dan Millman</span> </h1>
        <i class="fas fa-quote-right"></i>
    </div>
</section>
<!-- quotes section ends -->
<section class="blog">
    <div class="wrapper">
  
      <div class="text-wrapper">
        <h4 class="top-title">My Blogs</h4>
      </div>
      <div class="slider-wrapper">
        <div id="button-left" class="button no-select"><i class="material-icons"></i></div>
        <div class="slider">
          <!-- <a href="#" id="bottle" onclick="document.location=this.id+'.html';return false;" >
            <img src="images/mental_1.jpg" alt="bottle" class="thumbnails" />
          </a> -->
          <img src="images/mental_1.jpg" width="320" height="568" onclick="window.location.href='https://www.choosingtherapy.com/best-mental-health-blogs/'" target: blank>
          <img src="images/mental_2.png" width="320" height="568" onclick="window.location.href='https://www.choosingtherapy.com/best-mental-health-blogs/'">
          <img src="images/mental_3.jpg" width="320" height="568" onclick="window.location.href='https://www.choosingtherapy.com/best-mental-health-blogs/'">
          <img src="images/mental_4.jpg" width="320" height="568" onclick="window.location.href='https://www.choosingtherapy.com/best-mental-health-blogs/'">
          <img src="images/mental_2.png" width="320" height="568" onclick="window.location.href='https://www.choosingtherapy.com/best-mental-health-blogs/'">
        </div>
        <div id="button-right" class="button no-select"><i class="material-icons"></i></div>
      </div>
    </div>
  </section>

<!-- contact section starts  -->

<!-- <section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>Our Number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>
        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>feelwell@gmail.com</p>
            <p>feelgood@gmail.com</p>
        </div>
        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our location</h3>
            <p>Mumbai, India - 400104</p>
        </div>
    </div>


</section> -->

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">
        

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>


        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit">created by <span>Untangled
        ❤️</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="js/script.js"></script>
<script src="js/blogs.js"></script>

</body>
</html>
