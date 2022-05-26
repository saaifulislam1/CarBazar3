<?php
include('includes/config.php');
session_start();

$id = $_GET['product_id'];
$sql = "SELECT * FROM product2 WHERE product_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

// $ask=$row['asking_price'];
// $formatted_asking_price = number_format($ask);




   

if (isset($_POST["submit"])) {

    //getting the data
    $ad = mysqli_real_escape_string($conn, $_POST["ad"]);
    $model = mysqli_real_escape_string($conn, $_POST["model"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $years_used = mysqli_real_escape_string($conn, $_POST["years_used"]);
    $company = mysqli_real_escape_string($conn, $_POST["company"]);
    $subbrand = mysqli_real_escape_string($conn, $_POST["subbrand"]);
    $cc  = mysqli_real_escape_string($conn, $_POST["cc"]);
    $engine = mysqli_real_escape_string($conn, $_POST["engine"]);
    $tyre = mysqli_real_escape_string($conn, $_POST["tyre"]);
    $license = mysqli_real_escape_string($conn, $_POST["license"]);
    $asking_price = mysqli_real_escape_string($conn, $_POST["asking_price"]);

    $original_price = mysqli_real_escape_string($conn, $_POST["negosiate"]);
    $your_location = mysqli_real_escape_string($conn, $_POST["your_location"]);
    $expert_rating = mysqli_real_escape_string($conn, $_POST["expert_rating"]);
    // $image = mysqli_real_escape_string($conn, $_POST["image"]);

    $sql2 = "UPDATE product2 SET ad =' $ad', model = ' $model', year = ' $year', years_used ='$years_used', company = ' $company', subbrand = '$subbrand', cc = '$cc', engine = ' $engine', tyre = ' $tyre', license = ' $license', asking_price = '$asking_price ', negosiate = '$original_price', your_location = '$your_location' , expert_rating='$expert_rating' WHERE product_id ='$id' ";

    if ($result2 = mysqli_query($conn, $sql2)) {
        echo "Data Update SUCCESSFULLY";
        header('Location:updatDelect.php');
    } else {
        echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
}

?>

<!-- <img  style="max-width:100%;" src="upload/<?= $row['image'] ?>" />
<?php include('bootnav.php') ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        display: flex;
        align-items: flex-start;
        
        
    }
    .left{
        width: 30%;
       
    }
    .right{
        width: 50%;
        margin-left: 400px;
    }
    .image{
   
        width: 400px;
        height: 40%;
        object-fit: contain;

    }
    h2{
        padding-top: 20px;
    }
</style>
<body>

<?php include('bootnav.php') ?>

<div class="container pt-4">
    <div class="left">
        <img class="image" src="upload/<?= $row['image'] ?>" alt="">
    </div>

    <div class="right">
        <p><?php echo $row ['expert_rating'] ?><i class="fa-solid fa-star"></i></p>
        <h1 class="text-warning">Product Details:</h1>
        <h2 class="p-2">Title:  <?php echo $row['ad']?></h2>
        <h2 class="p-2">Asking Price:  <?php echo $row['asking_price']?></h2>

        <h4 class="p-2">Company name:  <?php echo $row['company']?></h4>
        <!-- <h4 class="p-2">Condition:  <?php echo $row['vehicle_condition']?></h4> -->
        <h4 class="p-2">Location:  <?php echo $row['your_location']?></h4>
        <h4 class="p-2">Years Used:  <?php echo $row['years_used']?></h4>
        <h2 class="text-black">Contact No: <?php echo $row['contact_no']?> </span>  </h2>

    </div>
</div>
<script src="https://kit.fontawesome.com/2569c15ff0.js" crossorigin="anonymous"></script>   
</body>
</html>