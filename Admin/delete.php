<?php
  include('includes/config.php');
  

     $id =$_GET['product_id'];
     $sql = "DELETE FROM product2 WHERE product_id='$id' ";
     $result=mysqli_query($conn,$sql);
     if($result){
         header('Location:updatDelect.php');
     }

  
?>
