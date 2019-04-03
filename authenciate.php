<?php

session_start();

//Connect to database
$db = mysqli_connect("localhost","root","","authenciation");

if(isset($_POST['register_btn']))
{
   if(!empty(($_POST['username'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['password2'])))
   {
        $username= mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $password2 = mysqli_real_escape_string($db,$_POST['password2']);
               
                //Create user
                $password= md5($password);
                $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
                mysqli_query($db,$sql);
                $_SESSION['message'] = "You are now logged in";
                $_SESSION['username'] = $username;
                header("location:home.php");
                    
    }
    else
    {
                    header("location:register.html");
                                
    }
}
            
else
{
        header("location:register.html");
                    
}   


?>
