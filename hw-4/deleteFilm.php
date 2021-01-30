<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/e68961ce89.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="author" content="Andjela Manojlovic" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>



<form action="" method="POST" class="form">
  <div class="container">
    <h1>DELETE FILM</h1>
    <p id="firstText">Film you want to delete?</p>
    <hr>

    <label for="name_uid"><b>Title</b></label>
    <input type="text" placeholder="title" name="ti" id="ti" required>

    

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

   

    <hr>
   
    <a href="admin.php" class="cancel">Cancel</a>
    <button type="submit" class="signinbtn" name="delete">Delete Film</button>
    
  </div>
  
  
 

</form>

</body>
</html>

<?php
   include_once 'include.php';

   if(isset($_POST['delete'])){
       $title= $_POST['ti'];

       $query = "DELETE FROM `films` WHERE title='$title'";
       $query_run = mysqli_query($conn,$query);

       if($query_run){
           echo '<script type="text/javascript">alert("Film deleted!")</script>';

       }else{
           echo '<script type="text/javascript">alert("Film does not exist")</script>';
       }
   }
?>

