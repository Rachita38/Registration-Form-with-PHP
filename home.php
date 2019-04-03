<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Register, Login and Logout User PHP mysql</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
    <h1>Register, Login and Logout User PHP Mysql</h1> 
    </div>
    
    <h1>Home</h1>
    <div><h4>Welcome <?php echo $_SESSION['username'] ?></h4></div>
    
</body>
</html>