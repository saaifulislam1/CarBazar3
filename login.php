<?php

include('config.php');

session_start();

error_reporting(0);


// login section

if (isset($_POST['submit'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

  $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

  if (mysqli_num_rows($select) > 0) {
    $row = mysqli_fetch_assoc($select);
    $_SESSION['user_id'] = $row['id'];
    header('location:home.php');
  } else {
    $message[] = 'incorrect email or password!';
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CarBazar</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.php" class="logo"> <span>CAR</span>BAZAR</a>

    <nav class="navbar">
      <a href="index.php" class="active">Home</a>
      <a href="allproducts.php">All vehicles</a>
      <a href="AddProduct.php">Sell Car post</a>
      <a href="blog/dashboard.php">Blog</a>
      
      
      <a href="Searchcode/index.html">Search</a>
    </nav>

    <div id="login-btn">
      <button class="btn">login</button>
      <i class="far fa-user"></i>
    </div>

  </header>

  <!-- <section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">find your car</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    <a data-speed="7" href="#" class="btn home-parallax">explore cars</a>

  </section> -->


  <hr>
  <hr>


  <section class="contact" id="contact">
    <div class="row">
      <form action="#" class="sign-up-form" method="post" enctype="multipart/form-data">

        <h3 class="title">login</h3>

        <?php
        if (isset($message)) {
          foreach ($message as $message) {
            echo '<div class="message">' . $message . '</div>';
          }
        }
        ?>
        <input type="email" name="email" placeholder="enter email" class="box value=" required>
        <input type="password" name="password" placeholder="enter password" class="box value=" required>
        <input type="submit" name="submit" value="login now" class="btn">
        <p>don't have an account? <a href="signup.php">regiser now</a></p>
      </form </div>

  </section>





  <section class="footer" id="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-arrow-right"></i> Home </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Buy Car </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Sell Car post </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Blog </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Reviews </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Used Car </a>
        <a href="#"> <i class="fas fa-arrow-right"></i>Search</a>
      </div>


      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>

      </div>

    </div>

    <div class="credit"> created by CarBazar web designer | all rights reserved </div>

  </section>




  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


</body>

</html>