<?php

/*
1) Receive data from addpost.php
2) Store data to database
3) 
*/

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        isset($_POST['title']) &&
        isset($_POST['category']) &&
        isset($_POST['content']) &&
        isset($_FILES['image'])&&

        !empty($_POST['title']) &&
        !empty($_POST['category']) &&
        !empty($_POST['content']) &&
        !empty($_FILES['image'])
    )
    {
        $title=$_POST['title'];
        $category=$_POST['category'];
        $content=$_POST['content'];

        ///Array ( [name] => 20220118_170401.jpg [full_path] => 20220118_170401.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpDDBC.tmp [error] => 0 [size] => 3811799 )
        //print_r($_FILES["image"]);
        //received all data
        
        
        $received_file=$_FILES['image'];
        $filename=$received_file['name'];
        
        $temp_file_path=$received_file['tmp_name'];
        $to="blogimage/$filename";

        

        //database section
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=carbazar;','saiful','1234');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //database code
            $sqlquerystring="INSERT INTO blogtable VALUES(NULL,'$title',' $category','$content','$to')";
            $conn->exec($sqlquerystring);
            //uploading the file to server folder
            move_uploaded_file($temp_file_path,$to);

             ?>
              <script>location.assign('dashboard.php')</script>
             <?php
 
         }
         catch(PDOException $ex)
         {
             ?>
              <script>location.assign('dashboard.php')</script>
            
             <?php
        
         }
         
    }
    else{
        ?>
         <script>location.assign('dashboard.php')</script>
        <?php
        
    }
}
else{
    echo "<script>location.assign('dashboard.php')</script>";
}

?>