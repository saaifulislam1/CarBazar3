<?php
  include('includes/config.php');
  

     $id =$_GET['id'];
     $sql = "DELETE FROM product WHERE A_ID='$id' ";
     $result=mysqli_query($conn,$sql);
     if($result){
         header('Location:updatDelect.php');
     }

  
?>
