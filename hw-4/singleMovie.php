<?php
    include_once 'include.php';
    
    
?>

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
<link rel="stylesheet" type="text/css" href="singleMovie.css">
</head>
<body>


<?php
      $sql6="SELECT * FROM films ";
      $result6=mysqli_query($conn,$sql6);
      $row=mysqli_fetch_assoc($result6);
              
              echo $row['f_id'];

              echo "<div id='wrapper'>";
              echo "<div>";
              echo "<p id='title'>".$row['title']."</p>";
              echo "<img id='img' src='fimages/".$row['img']."'>";
              echo "</div>";
              echo "<div id='info'>";
              echo "<p>Genre: ".$row['genre']."</p>";
              echo "<p>Description:  ".$row['descript']."</p>";
              echo "<p>Director:  ".$row['director']."</p>";
              echo "<p>Casts:  ".$row['casts']."</p>";
              echo "<p>Production:  ".$row['production']."</p>";
              echo "<p>Release year: ".$row['DateYear']."</p>";
              echo "<p>Running time: ".$row['duration']."</p>";
              
             
              
              echo "</div>";
              echo "</div>";
      
        
?>





</body>
</html>

