<?php 
  include_once 'db_connect.php';

if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['hashedPassword'];

$select = "SELECT * FROM form WHERE email = '$email' and password = '$password'; ";
$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result)>0){

        if($user = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION["u_id"] = $user["id"];
        $_SESSION["email"] =  $user["email"]; 
        header('location:home.php');
    }
}
else{
    $error[] = 'incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css ">
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
                </ul>
               </div>
            </div>
            <div class="content">
                <h1>Every <span>fitness</span><br>has it's <span>own story</span></h1>
                <form action="", method="post">
                    <div class="form">
                        <h3>Login Here</h3>
                        <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
                ?>
                        <input type="email" name="email" placeholder="Enter Email Here">
                        <input type="password" name="password" placeholder="Enter Password Here">
                        <button class="btnn" type="submit" name="submit">Login</button>
                        <p class="link">Don't have an account?<br>
                        <a href="signup.php">Sign up</a> Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>