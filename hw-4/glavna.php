<?php
    include_once 'include.php';

?>
<!DOCTYPE html>
<html>


<head>
  <title>glavna stranica</title>
  <script src="https://kit.fontawesome.com/e68961ce89.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta name="author" content="Andjela Manojlovic" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="pia, web programming, html, css,php, responsive design, bootstrap" />
  <link rel="stylesheet" type="text/css" href="glavna.css">
</head>

<body>
  <header id="top"></header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
            
  
            <div class="boxContainer">
                <table class="elementsContainer">
                    <tr>
                    <td><form>
                            <input type="text" placeholder="search" name="search"  class="search">
                        </td>
                        <td>
                            <button class="btn" type="submit" name="isearch"><i class="fas fa-search"></i></button>
                            </form>
                        </td>
                    </tr>    
                </table>
            </div>
       
      
      <ul>
        
        <li><a href="#top">go to top</a></li>
        <li><a href="login.php">Log out</a></li>
    
      </ul>
  </nav>

  <div id="content">
  <?php
     
    
          if(isset($_POST['isearch'])){
              $search=$_POST['search'];
              $sql="SELECT * FROM films WHERE title LIKE '%$search%'";
              $result=mysqli_query($conn,$sql);
              $resultCheck=mysqli_num_rows($result);

              if($resultCheck > 0){
                  echo "nesto1";
                  while($row=mysqli_fetch_array($result)){
                    
                      echo "<div id='img_div'>";
                      echo "<a id='title' href='singleMovie.php?film=`<?php echo $row[title]>`'".$row['title']."</a>";
                      echo "<div>"; 
                      echo "<img src='fimages/".$row['img']."'>";
                      echo "</div>";
                      echo "</div>";
                    

                  }
              }
          }
          else{
              

              $sql4="SELECT * FROM films";
              $result4=mysqli_query($conn,$sql4);
              while($row = mysqli_fetch_array($result4)){
                  
                  echo "<div id='img_div'>";
                  echo "<a id='title' href='singleMovie.php'>".$row['title']."</a>";
                  echo "<div>"; 
                  echo "<img src='fimages/".$row['img']."'>";
                  echo "</div>";
                  echo "</div>";
                }
          }
      
      ?>

      
      
    </div>

