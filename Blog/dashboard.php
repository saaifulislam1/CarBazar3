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
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;
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

<?php include ('bootnav.php')?>
    
    <div class="a1">
    <h1> Write Post </h1>
    </div>
    <form action="addpostprocess.php" method="POST" enctype="multipart/form-data">
    <div class="column">
    <div class="ui raised segment">
      <a class="ui red label">Title</a>
      <div class="b2"> 
      
      <input type="text" name="title" id="title" placeholder="Enter post title" size="50">
      </div>
      <p></p>
      
     
      <a class="ui blue label">Category</a> 
      <div class="b2">
      
      <input id="category" name="category" type="text" placeholder="Enter post category" size="50">
      <p></p>
      </div>
      
      <a class="ui orange label">Write Here</a> 
      <div class="b2">
      
      <textarea name="content" id="content" placeholder="Write your post here..........." rows="5" cols="50"></textarea>
      </div>
      <p></p>
      <a class="ui blue label">Image</a> 
      <div class="b2">
      
      <input id="image" name="image" type="file" >
      <p></p>
      </div>
      <div class="b1">
      <button class="ui red button" id="addPost" name="addPost" type="submit">Submit Post</button>
      </div>
    </form>
    </div>

    <h2>All Post</h2>
    <section class="fullShow">
        <?php
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=carbazar;','saiful','1234');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //database code
            $sqlquerystring= "SELECT * FROM blogtable";
            $returnobj=$conn->query($sqlquerystring);

            if($returnobj->rowCount()==0)
            {
                ?>
               <h3> NO DATA FOUND </h3>
               <?php
            }
            else{
                $data=$returnobj->fetchAll();
                foreach($data AS $row){
                    //<a href="javascript:void();" class="update-btn" style="background-color:green">Update</a>
                    //<a href="javascript:void();" class="delete-btn" style="background-color:red">Delete</a>
                    ?>
                
                    <div class="box">
                        
                        <img src="<?php echo $row['imagepath']; ?>" width="300" height="300" >
                        <h4><?php echo $row['title']?></h4>
                        <h4><?php echo $row['category']?></h4>
                        <p>
                         <?php echo $row['content']?>
                        </p>
                        <a href="javascript:void();" class="readmore-btn" style="background-color:#04053B">Read More</a>
                        <a href="updateform.php?id=<?php $id= $row['id']; echo $id?>" class="text">Update</a>
                        <a href="delete.php?id=<?php $id= $row['id']; echo $id?>" class="text">Delete</a>
                    </div>  
                      
                    <?php
                    
                }
            }
 
         }
         catch(PDOException $ex)
         {
             ?>
               <h3> NO DATA FOUND </h3>
             <?php
         }
        ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(".readmore-btn").on('click',function(){
                $(this).parent().toggleClass("showContent");

                //shorthand if else
                var replaceText= $(this).parent().hasClass("showContent") ? "Read Less" : "Read More";
                $(this).text(replaceText);
            });
            
        </script>

    </section>

</body>
</html>