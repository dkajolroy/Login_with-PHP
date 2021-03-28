<?php 
session_start();
if(!isset($_SESSION['success'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
<style>
    *{margin:0;padding:0;font-family:tahoma;}
    body{background:url("images/background.jpg") no-repeat;background-size:cover;height:100vh; }
    nav {background: blue;overflow: hidden;position: absolute;top:0;z-index: 999;width: 100%;}
    h1{font-size:40px;text-align:center;color:#fff; padding:15px 0;}
    .logo{width:100%}
    nav a{position:fixed;font-size:14px;color:#000;right:20px;border-radius:3px;top:30px;text-decoration:none;background:#fff;padding:3px 8px;}
    nav a:hover{background:#017eec;color:#d9d9d9;}

</style>
</head>
<body>
    <nav>
        <div class="logo"><h1>Facebook</h1></div>
        <a href="logout.php">Logout</a>
    </nav>

    
</body>
</html>