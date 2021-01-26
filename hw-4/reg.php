<?php
    include_once 'include.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $psw = $_POST['psw'];

    $sql = "INSERT INTO users (firstName,surname,email,user_uid,psw,isAdmin) VALUES ('$name','$surname','$email','$uid','$pwd', '');";
    mysqli_query($conn, $sql);

    header("Location: imdb.php?signup=success");
    


?>
