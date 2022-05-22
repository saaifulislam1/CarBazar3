<?php

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result))
?>

<link rel="stylesheet" href="css/nav.css">
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>CAR</span>BAZAR</a>

    <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#buycar">Buy Car</a>
        <a href="addProduct.php">Sell Car post</a>
        <a href="#blog">Blog</a>
        <a href="#used car">Used Car</a>
        <a href="#review">Review</a>
        <a href="search.html">Search</a>
    </nav>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header>

<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="" method="post" class="sign-in-form">

        <h3 class="title">Sign in</h3>
        <input type="email" placeholder="Email Address" name="email" class="box" />
        <input type="password" placeholder="Password" name="password" class="box" />

        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" value="login" name="login" class="btn">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> don't have an account <a href="Signup.php">create one</a> </p>
    </form>

    <script src="js/script.js"></script>

</div>