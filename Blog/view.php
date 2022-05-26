<?php include "config.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <style>
        /* body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		} */

        .product_container{
            display: flex;
            padding-top:50px ;
        }

        .single_product {
            background-color: #DBDFFD;
            width: 260px;
            padding: 20px ;
            margin: 20px;


           
        }

        .thumbnil {
            width: 250px;
            height: 40%;
        }
    </style>
</head>

<body>
    <!-- <a href="index.php">&#8592;</a>
     <?php
        $sql = "SELECT * FROM product2 ";
        $res = mysqli_query($conn,  $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {   ?>
              
             
             <div class="alb">
             	<img src="upload/<?= $images['image'] ?>">
             </div>

            
          		
    <?php }
        } ?> -->

<nav>
    <?php include ('nav.php') ?>
</nav>
    <div class="product_container">
        <div class="single_product">
            <img class="thumbnil" src="car1.jpg" alt="">
            <h3>Title</h3>
            <p>Price</p>
            <button>Buy Now</button>

        </div>

        <div class="single_product">
            <img class="thumbnil" src="car1.jpg" alt="">
            <h3>Title</h3>
            <p>Price</p>
            <button>Buy Now</button>

        </div>

    </div>















</body>

</html>