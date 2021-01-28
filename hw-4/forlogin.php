<?php
   include_once 'include.php';

   if(isset($_POST['username'])){
       
       $uname=$_POST['username'];
       $mail=$_POST['username']; //jer nam ovo polje moze biti i email i korisnicko ime
       $password=$_POST['psw'];

       $sql1="select * from users where user_uid='".$uname."'  OR email='".$mail."' AND psw='".$password."' limit 1";
      
       $result1=mysqli_query($conn,$sql1);
       
       

       if(mysqli_num_rows($result1)==1){

           $sql2="select * from users where isAdmin='admin' AND user_uid='".$uname."'  OR email='".$mail."' limit 1";
      
           $result2=mysqli_query($conn,$sql2);

           echo "proveravam";

           if(mysqli_num_rows($result2)==1){
               header("Location: admin.php");
               exit();
           }

           else{
               echo "you have successfully Logged in";
               header("Location: glavna.php");
               exit();

           }
           
           echo "you have successfully Logged in";
           header("Location: glavna.php");
           exit();
       }

    
        else{
            header("Location: login.php");
           // $message = "wrong username or password!";
            //echo "<script type='text/javascript'>
           // alert('$message');</script>";
           
           
            exit();
            }
    }    

?>
