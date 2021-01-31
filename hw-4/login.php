

<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/e68961ce89.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>



<form action="forlogin.php" method="POST" class="form">
  <div class="container">
    <h1>LOG IN</h1>
    <p id="firstText">Please fill in this form to log in.</p>
    <hr>

    <label for="name_uid"><b>Username or email</b></label>
    <input type="text" placeholder="Enter Your username or email" name="username" id="username" required>

    

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

   

    <hr>
   

    <button type="submit" class="signinbtn">Log in</button>
    
  </div>
  
  <div class="container signin">
    <p>Doesn't have an account? Click here: <a href="imdb.php">Create an account</a>.</p>
  </div>
  <footer>
    <div class="row text-center">
      <div class="col-md-4 smed">
        <a href="https://www.facebook.com/imdb"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/imdb/"><i class="fab fa-instagram"></i></a> 
        <a href="https://www.twitch.tv/IMDb"><i class="fab fa-twitch"></i></a>     
        <a href="https://twitter.com/imdb"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/imdb"><i class="fab fa-youtube"></i></a>
      </div>
      
    </div>
  </footer>

</form>

</body>
</html>
