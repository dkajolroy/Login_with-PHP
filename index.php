<?php
session_start();
if(isset($_SESSION['success'])){
    header("location:admin.php");
}
if(isset($_POST['login'])){

    define('NAME', 'kajolroy');
    define('EMAIL', 'kajolroy168@gmail.com');
    define("PASSWORD", '111222');

    $name = $_POST['name'];
    $email = $_POST['name'];
    $password = $_POST['password'];

    if($name == NAME && $email == EMAIL || $password == PASSWORD){
        $_SESSION['success']="";
        header('location:admin.php');

    }else{$worng="Username or Password doesn't match";}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>

    <style>
    *{margin:0;padding:0;font-family:tahoma;}
    body{background:url("images/background.jpg") no-repeat;background-size:cover;height:100vh; }
    nav {background: blue;overflow: hidden;position: absolute;top:0;z-index: 999;width: 100%;}
    h1{font-size:40px;text-align:center;color:#fff; padding:15px 0;}
    input{display:block;padding:12px 35px;margin:10px auto;border:0;background:#fff;border-radius:5px;font-size:15px}
    form{padding:50px 50px 0 ; margin:50px 0; overflow:hidden;}
    .contact{height:100vh;background:#6800ff73;position:relative;}
    fieldset{width:70%;height:100%;margin:0 auto;padding:20px 20px 100px}
    legend {font-size: 30px;color: #fff;margin: auto;}
    p {text-align: center;color: #fdf90b;font-size: 12px;position:absolute;width:100%;top:95px; left:0;}
    .bable {position: absolute;width: 50px;height: 50px;bottom: 0;left:10%;background: #f2f2f212;border-radius: 50%;animation: buble 7s linear infinite;box-shadow: 0px 2px 8px #fff inset;opacity:0; }
    @keyframes buble{0%{transform:translateY(0);opacity:0;} 50%{opacity:1} 100%{opacity:0;transform:translateY(-120vh)rotate(400deg);}}
    .bable:nth-child(2){left:20%;animation-delay:5s ;}
    .bable:nth-child(3){left:30%;animation-delay: 3s;}
    .bable:nth-child(4){left:40%;animation-delay:1s ;}
    .bable:nth-child(5){left:50%;animation-delay: 6s;}
    .bable:nth-child(6){left:60%;animation-delay:3s ;}
    .bable:nth-child(7){left:70%;animation-delay: 5s;}
    .bable:nth-child(8){left:80%;animation-delay: 1s;}
     </style>

</head>
<body>
    <nav>
        <h1>Facebook</h1>
    </nav>

    <section class="contact">
        <form action="" method="POST">
            <fieldset>
            <legend>Login Hare</legend>
            <?php  if(isset($worng)){echo "<p>".$worng."</p>";}?>
                <input type="text" name="name" placeholder="Username or Email" required>
                <input type="password" name="password" placeholder='Enter your Password' required>
                <input type="submit" name='login' value="Login" >

              

            </fieldset>
        </form>
        <div class="bable"></div>
        <div class="bable"></div>
        <div class="bable"></div>
        <div class="bable"></div>
        <div class="bable"></div>
        <div class="bable"></div>
        <div class="bable"></div>
        <div class="bable"></div>
        <div class="bable"></div>
    </section>
   
</body>
</html>