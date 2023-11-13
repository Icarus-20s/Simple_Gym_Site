<?php
include_once 'db_connect.php';

session_start();
if(empty($_SESSION["u_id"])){
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang = "en">

<head>
    <title>Home</title>
    <link rel="stylesheet" href="homestyle.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <div class="Logo">
                    <img src="kutu.png" width="180" height="140">
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="routine.php">Routine</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contactus.php">Contactus</a></li>
                    <li><a href="classes.php">Classes</a></li>
                    <li><a href="Premium.php">Premium</a></li>
                    <button id = "logout_btn" class="btnn"><a href="logout.php">Logout</a></button>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>It's all <span>about</span><br>what <span>you </span>can achieve</h1>
            <p>Empower yourself to make the changes you need to make.<br>Start where you are use what you have do what
                you can.<br>Today do what others won't, So tomorrow you will<br>accomplish what others can't.</p>
        </div>
        <div class="col">
                <div class="card" id="one">
                </div>
                <div class="card" id="two">
                </div>
        </div>
        <div style="width: 600px; margin: auto; transform: translate(-50%,-205%);">
            <iframe iframe1 width="220" height="220" src="https://www.youtube.com/embed/gcNh17Ckjgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="220" height="220" src="https://www.youtube.com/embed/IJpiay8oZws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    
</body>
</html>