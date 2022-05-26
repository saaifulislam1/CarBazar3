<?php
    $id = $_GET['id'];
    $conn=new PDO('mysql:host=localhost:3306;dbname=sadblog;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //database code
            $sqlquerystring= "SELECT * FROM blogtable";
            $returnobj=$conn->query($sqlquerystring);
   


    $data=$returnobj->fetchAll();
                foreach($data AS $row){
                    //<a href="javascript:void();" class="update-btn" style="background-color:green">Update</a>
                    //<a href="javascript:void();" class="delete-btn" style="background-color:red">Delete</a>
                   
                
                    
                        
                        
                        $title=$row['title'];
                        $category=$row['category'];
                        $content=$row['content'];
                        
                      
                    
                    break;
                    
                }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>addpost</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
</head>
<style>
*{
    margin: 10px;
    padding: 0;
} 
.body{
        background-color: #f5f7f9;
        font-family: Open Sans,sans-serif;
        color:red;
    } 
.a1{
    display:flex;
    justify-content: center;
}
.a2{
    flex: 0 1 auto; 
    display:flex;
    flex-direction: column;
    align-items: center;
}
.column{
    display:flex;
    flex-direction: column;
    align-items: center;
}
.b1{
    display:flex;
    justify-content: center;
}
.b2{
    display:flex;
    justify-content: space-between;

}

.fullShow{
    display: flex;
    flex-wrap: wrap;


}
.box{
        width:30%;
        float: left;
        margin: 50px 20px;
        background-color:#fff;
        padding:15px;
        border-radius: 8px;
        box-shadow: 0 5px 5px rgba(0,0,0,0.15);
    }
 img{
        width:100%;
        border-radius: 8px;
        margin-bottom: 10px;
        margin-left: -1px;
    }
.box h4{
        margin-bottom: 10px;
    }
.box p{
        font-size: 15px;
        line-height:28px;
        height: 90px;
        overflow: hidden;
    }
.box a{
        display: inline-block;
        color:#fff;
        background-color:#2196f3;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 8px;
        margin-top: 15px;
    }
.box a:hover{
        box-shadow: 0 5px 5px rgba(0,0,0,0.2);
    }
.box.showContent p{
        height: auto;
    }
.box.showContent a.readmore-btn{
        background-color: red;
    }
</style>
<body>
    
    <div class="a1">
    <h1> Update Post </h1>
    </div>
    <form action="updateprocess.php" method="POST" enctype="multipart/form-data">




<input type="hidden" name="id" value="<?php echo $id; ?>">


   
    <div class="column">
    <div class="ui raised segment">
      <a class="ui red label">Title</a>
      <div class="b2"> 
      
      <input type="text" name="title" id="title" placeholder="Enter post title" size="50" value=<?php echo $title   ?>>
      </div>
      <p></p>
      
     
      <a class="ui blue label">Category</a> 
      <div class="b2">
      
      <input id="category" name="category" type="text" placeholder="Enter post category" size="50" value=<?php echo $category   ?>>
      <p></p>
      </div>
      
      <a class="ui orange label">Write Here</a> 
      <div class="b2">
      
      <textarea name="content" id="content" placeholder="Write your post here..........." rows="5" cols="50"> <?php echo $content; ?> </textarea>
      </div>
      <p></p>
      <a class="ui blue label">Image</a> 
      <div class="b2">
      
      <input id="image" name="image" type="file" >
      <p></p>
      </div>
      <div class="b1">
      <button class="ui red button" id="addPost" name="addPost" type="submit" >Update</button>
      </div>
    </form>
    </div>
</body>
</html>