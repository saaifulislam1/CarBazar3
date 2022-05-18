<?php
if (
    isset($_GET['id'])
    && !empty($_GET['id'])
){
    $id = $_GET['id'];

    
    

    try{
        $conn=new PDO('mysql:host=localhost:3306;dbname=sadblog;','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //database code
        $sqlquerystring="UPDATE blogtable SET title='$title',category='$category',content='$content',imagepath='$to')";
        $conn->exec($sqlquerystring);

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



?>