<?php
//This script will handle login
session_start();

// check if the user is already logged in
//if(isset($_SESSION['username']))
//{
//   header("location: index.php");
//   exit;
//}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: index.php");
                            
                        }
                    }

                }

    }
}    


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>untangled</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
    
    <a href="index.php" class="logo"><img src="images/feel-well.png" width= 80px> <span style="position: absolute; top: 50px;">UNTANGLED</span> </a>
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="blog.php">blog</a>
        <a href="happyspace.php">Happy Space</a>
        <a href="app/chatbot.php">Chatbot</a>
        <a href="#about">about</a>
        <a href="#contact">contact</a>
        <a href="register.php">register</a>
        <a href="login.php">login</a>
       

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    

    

    <div class="cloud cloud-1"></div>
    <div class="cloud cloud-2"></div>

</section>

<!-- home section ends -->











<!-- about section starts  -->



<!-- about section ends -->







<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Login</span>  </h1>

    <div class="icons-container">
        
        <div class="icons">

           <form action="" method="post">
            <div class="form">
                            <label for="exampleInputEmail1" class="username">Username</label>
                            <hr>
                            <input type="text" name="username" class="form-control-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="Password">Password</label>
                            <hr>
                            <input type="password" name="password" class="form-control-2" id="exampleInputPassword1" placeholder="Enter Password">
                          </div>
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
        </div>
        
    </div>


</section>

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
        ❤</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>


