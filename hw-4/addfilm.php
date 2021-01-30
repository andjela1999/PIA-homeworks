<?php
    session_start();
    include_once 'include.php';

?>

<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/e68961ce89.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="addfilm.css">
</head>
<body>




<form action="filmToBase.php" method="POST">
  <div class="container">
    <h1>Add a new film</h1>
    <p>Please fill in this form to add a new film.</p>
    <hr>

    <label for="title"><b>Title</b></label>
    <input type="text" placeholder="title" name="title" id="title" required>

    <label for=""><b>Description</b></label>
    <input type="text" placeholder="Enter description" name="description" id="description" required>
    
    

    <label for="genre"><b>Genre</b></label>
    <input type="text" placeholder="" name="genre" id="genre" required>

    <label for="director"><b>Director</b></label>
    <input type="text" placeholder="" name="director" id="director" required>

    <label for="production"><b>Production</b></label>
    <input type="text" placeholder="" name="production" id="production" required>

    <label for="casts"><b>Casts</b></label>
    <input type="text" placeholder="" name="casts" id="casts" required>

    <label for="year"><b>Year</b></label>
    <input type="text" placeholder="" name="year" id="year" required>

    <label for="duration"><b>Duration</b></label>
    <input type="text" placeholder="" name="duration" id="duration" required>
    
    
    <label for="image"><b>Image</b></label>
    <input type="file" placeholder="" name="image" id="image" required>
        
    </form>
    

  

    <hr>
   
    <a href="admin.php" class="cancel">Cancel</a>
    <button type="submit" class="registerbtn">Add film</button>
    
  </div>
  
  
  

</form>

</body>
</html>

