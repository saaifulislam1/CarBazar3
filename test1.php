<?php
 require_once('config.php');


 if(isset($_POST['submit'])){
    $courseName = $_POST['courseName'];
    if(!empty($courseName)){
        $query = "INSERT INTO test2 (vehicle_status) VALUES('$courseName')";
        $result = $conn->query($query);
        if($result){
          echo "Course is inserted successfully";
        }  
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
<form action="" method="post">
<select name="courseName">
  <option value="">Select Course</option>
  <option value="web Designing">Web Designing</option>
  <option value="web Development">Web Development</option>
  <option value="app Development">app development</option>
  <option value="game development">Game Development</option>
  <option value="graphic Designing">Graphic Desiging</option>
  <option value="digital marketing">Digital Marketing</option>
</select>
<input type="submit" name="submit">
</form>

</body>

</html>