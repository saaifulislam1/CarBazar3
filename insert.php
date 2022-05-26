<?php
require_once('config.php');


if (isset($_POST['submit']) && isset($_FILES['my_image'])){
$ad = $_REQUEST['ad'];
$model = $_REQUEST['model'];
$year = $_REQUEST['year'];
$year_used = $_REQUEST['year_used'];
$company = $_REQUEST['company'];
$subbrand = $_REQUEST['subbrand'];
$cc = $_REQUEST['cc'];
$engine = $_REQUEST['engine'];
$tyre = $_REQUEST['tyre'];
$license = $_REQUEST['license'];
$asking_price = $_REQUEST['asking_price'];
$original_price = $_REQUEST['original_price'];
$your_location = $_REQUEST['your_location'];
$contact_no = $_REQUEST['contact_no'];
$catagory=$_REQUEST['catagory'];
$vehicle_condition=$_REQUEST['vehicle_status'];


// code for image upload starts here:

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 12500000) {
            $em = "Sorry!File size to big";
            header('Location:gallery.php?error=$em');
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            //  echo $img_ex;
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");


            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'upload/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                // insert
                $sql= "INSERT INTO images  (image_url) values('$new_img_name')";
                mysqli_query($conn, $sql);
                // dest to view page
                // header('location:gallery.php');
                echo "data inserted";



            } else {
                $em = "You can't upload files of this type";
                header('location:gallery.php?error=$em');
            }
        }
    }



    // ends here









$sql = "INSERT INTO product2  (ad , model , year, years_used, company, subbrand, cc, engine, tyre,
 license, asking_price, negosiate, your_location,image , contact_no, catagory, vehicle_condition) 
 VALUES ('$ad', '$model', '$year','$year_used', '$company', '$subbrand', '$cc', '$engine', 
 '$tyre', '$license','$asking_price', '$original_price', '$your_location','$new_img_name', '$contact_no', '$catagory', '$vehicle_condition' )";


if (mysqli_query($conn, $sql)) {
    header('location:Allproducts.php');
    // echo "<script>alert('User Post ADD Successfully ');</script>";
    // header("Location: addProduct.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
// mysqli_close($conn);

}





else{
    
    echo  mysqli_error($conn);

}
