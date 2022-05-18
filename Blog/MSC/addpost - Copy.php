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
</style>
<body>
    
    <div class="a1">
    <h1> Update Post </h1>
    </div>
    <form action="update_result.php" method="POST" enctype="multipart/form-data">
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
      
      <textarea name="content" id="content" placeholder="Write your post here..........." rows="10" cols="50"></textarea>
      </div>
      <p></p>
      <a class="ui blue label">Image</a> 
      <div class="b2">
      
      <input id="image" name="image" type="file" >
      <p></p>
      </div>
      <div class="b1">
      <button class="ui red button" id="addPost" name="addPost" type="update">Update Post</button>
      </div>
    </form>
    </div>

</body>
</html>