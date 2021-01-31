

<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/e68961ce89.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="addfilm.css">
</head>
<body>




<form action="" method="POST">
  <div class="container">
    <h1>Edit film data</h1>
    <p>Please fill in this form to change film information</p>
    <hr>

    <label for="title"><b>Id</b></label>
    <input type="text" placeholder="Enter id" name="id" id="id" required>
    
    <label for="title"><b>Title</b></label>
    <input type="text" placeholder="Enter title" name="title" id="title" required>

    <label for=""><b>Description</b></label>
    <input type="text" placeholder="Enter description" name="descript" id="descript" required>
    
    

    <label for="genre"><b>Genre</b></label>
    <input type="text" placeholder="Enter genre" name="genre" id="genre" required>

    <label for="director"><b>Director</b></label>
    <input type="text" placeholder="Enter Director" name="director" id="director" required>

    <label for="production"><b>Production</b></label>
    <input type="text" placeholder="Enter Production" name="production" id="production" required>

    <label for="casts"><b>Casts</b></label>
    <input type="text" placeholder="Enter Casts" name="casts" id="casts" required>

    <label for="year"><b>Year</b></label>
    <input type="text" placeholder="Enter release year" name="ryear" id="ryear" required>

    <label for="duration"><b>Movie Length</b></label>
    <input type="text" placeholder="Enter Movie length" name="duration" id="duration" required>
    
    
    <label for="image"><b>Image</b></label>
    <input type="file" placeholder="" name="img" id="img" required>
        
    </form>
    

  

    <hr>
   
    <a href="admin.php" class="cancel">Cancel</a>
    <button type="submit" class="registerbtn" name="update">Edit</button>
    
  </div>
  
  
  

</form>

</body>
</html>

<?php
   
    include_once 'include.php';
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        

        $query1 = "UPDATE `films` SET title='$_POST[title]',descript='$_POST[descript]',genre='$_POST[genre]',director='$_POST[director]',production='$_POST[production]',casts='$_POST[casts]',DateYear='$_POST[ryear]',duration='$_POST[duration]',img='$_POST[img]' WHERE f_id='$_POST[id]'";
        $query_run1 = mysqli_query($conn,$query1);

        if($query_run1){
            echo '<script type="text/javascript"> alert("Data Updated")</script>';
        }
        else{
            echo '<script type="text/javascript"> alert("Editing failed!")</script>';
        }

    }


?>

