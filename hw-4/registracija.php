<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/e68961ce89.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="registracija.css">
</head>
<body>



<form action="reg.php" method="POST">
  <div class="container">
    <h1>REGISTER</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>

    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Your Surname" name="surname" id="surname" required>
    
    

    <label for="email"><b>Enter Email</b></label>
    <input type="text" placeholder="Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="user-name"><b>Enter your username</b></label>
    <input type="text" placeholder="username" name="uid" id="username" required>

    <hr>
   

    <button type="submit" class="registerbtn">Register</button>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Click HERE to Log in</a>.</p>
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
