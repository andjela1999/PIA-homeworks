<?php
    include_once 'include.php';

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $descript = mysqli_real_escape_string($conn,$_POST['description']);
    $genre = mysqli_real_escape_string($conn,$_POST['genre']);
    $director = mysqli_real_escape_string($conn,$_POST['director']);
    $production = mysqli_real_escape_string($conn,$_POST['production']);
    $casts = mysqli_real_escape_string($conn,$_POST['casts']);
    $DateYear = mysqli_real_escape_string($conn,$_POST['year']);
    $duration = mysqli_real_escape_string($conn,$_POST['duration']);

    $sql = "INSERT INTO films (title,descript,genre,director,production,casts,DateYear,duration ) VALUES ('$title','$descript','$genre','$director','$production','$casts','$DateYear','$duration');";
    mysqli_query($conn, $sql);

    header("Location: admin.php");
    


?>
