<?php
include('includes/config.php');
session_start();


$id = $_GET['product_id'];
$sql = "SELECT * FROM product2 WHERE product_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


$ad=$row['ad'];
$model= $row['model'];
$year= $row['year'];
$years_used=$row['years_used'];
$company= $row['company'];
$subbrand= $row['subbrand'];
$cc=$row['cc'];
$tyre=$row['tyre'];
$engine=$row['engine'];
$license=$row['license'];
$asking_price=$row['asking_price'];
$original_price=$row['negosiate'];
$your_location=$row['your_location'];
$expert_rating=$row['expert_rating'];
$new_img_name=$row['image'];
$contact_no=$row['contact_no'];
$catagory= $row['catagory'];
$vehicle_condition=$row['vehicle_condition'];

$sql="INSERT INTO approved_product  (ad , model , year, years_used, company, subbrand, cc, engine, tyre,
 license, asking_price, negosiate, your_location,image , contact_no, catagory, vehicle_condition) 
 VALUES ('$ad', '$model', '$year','$years_used', '$company', '$subbrand', '$cc', '$engine', 
 '$tyre', '$license','$asking_price', '$original_price', '$your_location','$new_img_name', '$contact_no', '$catagory', '$vehicle_condition' )";


if (mysqli_query($conn, $sql)) {
    echo "Product Just Got approved!";
    // echo "<script>alert('User Post ADD Successfully ');</script>";
    // header("Location: addProduct.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}



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

    $sql2 = "INSERT INTO approved_product  (ad , model , year, years_used, company, subbrand, 
    cc, engine, tyre,
    license, asking_price, negosiate, your_location,image ,
     contact_no, catagory, vehicle_condition) 
    VALUES
     ('$ad', '$model', '$year','$year_used', '$company', '$subbrand', '$cc', '$engine', 
    
    '$tyre', '$license','$asking_price', '$original_price',
     '$your_location','$new_img_name', '$contact_no', '$catagory',
      '$vehicle_condition' )";

    if ($result2 = mysqli_query($conn, $sql2)) {
        echo "Data iNSERTED SUCCESSFULLY";
        header('Location:updatDelect.php');
    } else {
        echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
}
