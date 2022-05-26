<?php include "config.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <style>
      

        .product_container {
        
        width: 100%;
        display: flex;
        flex-wrap: wrap;

        padding-top: 20px;


    }

    .single_product {
        background-color: white;
        width: 290px;
        
        padding: 20px;
        margin: 20px;
        box-shadow: black 1px 1px 7px;
        border-radius: 4%;
        align-self: auto;
        





    }



    .thumbnil {
        width: 100%;
        height: 40%;
        margin-bottom: 30px;
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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

<?php include('bootnav.php')?>

<div class="product_container">
        <?php
        $sql = "SELECT * FROM product2 ";
        $res = mysqli_query($conn,  $sql);

       
            while ($row = mysqli_fetch_assoc($res)) {   ?> 
           
          
            
                          
                    <div class="single_product">
                        <img class="thumbnil" src="upload/<?= $row['image'] ?>" alt="">
                        
                        <h3><?php  echo  $row['ad'] ?></h3>
                        <p><?php  echo  $row['asking_price'] ?></p>
                        <br>
                        
                        <a class="buy_btn" href="update.php?product_id=<?php echo $row['product_id']; ?>">View Product</a>
                        <div class="rating">
                            <h5 class="fst-italic pt-3 text-warning">Expert Rating:</h5>
                            <h4 class="mt-3"><?php  echo  $row['expert_rating'] ?><i class="fa-solid fa-star"></i></h4>

                        </div>

                    </div>
        <?php 
        } ?>
    </div>  
<script src="https://kit.fontawesome.com/2569c15ff0.js" crossorigin="anonymous"></script>

</body>

</html>