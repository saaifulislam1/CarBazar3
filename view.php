<?php include "config.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <style>
      

        .product_container {
        display: flex;
        width: 80%;
        align-items: flex-start;
        flex-wrap: wrap;

        padding-top: 20px;


    }

    .single_product {
        background-color: white;
        width: 30%;
        padding: 20px;
        margin: 20px;
        box-shadow: black 1px 1px 7px;
        border-radius: 4%;
        align-self: auto;
        





    }



    .thumbnil {
        width: 100%;
        height: 40%;
        object-fit: cover;
        border-bottom: 1px solid black;
    }
   

    .buy_btn {
        background: #f9d806;
        padding: 10px 15px;

        border-radius: 10px;
        text-decoration: none;
        color: #423d7d;
        width: 10%;
        font-weight: bold;
        font-family: sans-serif;


    }
    .rating{
        display: flex;
        justify-content: space-between;
    }

    body {
        width: 100%;
       
    }
    </style>
</head>

<body>

<div class="product_container">
        <?php
        $sql = "SELECT * FROM product2 ";
        $res = mysqli_query($conn,  $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {   ?>                
                    <div class="single_product">
                        <img class="thumbnil" src="upload/<?= $row['image'] ?>" alt="">
                        <h3><?php  echo  $row['ad'] ?></h3>
                        <p><?php  echo  $row['asking_price'] ?></p>
                        <br>
                        
                        <a class="buy_btn" href="#">Buy Now</a>
                        <div class="rating">
                            <h4>Expert Rating:</h4>
                            <h3><?php  echo  $row['expert_rating'] ?><i class="fa-solid fa-star"></i></h3>

                        </div>

                    </div>
        <?php }
        } ?>
    </div>  
<script src="https://kit.fontawesome.com/2569c15ff0.js" crossorigin="anonymous"></script>

</body>

</html>