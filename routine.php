
<?php
include_once 'db_connect.php';

session_start();
if(empty($_SESSION["u_id"])){
    header("location:login.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Routine</title>
    <link rel="stylesheet" href="workout.css">

</head>

<body>
    <div class="navbar">
        <div class="Logo">
            <img src="kutu.png" width="180" height="140">
        </div>
        <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="routine.php">Routine</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contactus.php">Contactus</a></li>
                <li><a href="classes.php">Classes</a></li>
                <li><a href="Premium.php">Premium</a></li>

            </ul>
        </div>
    </div>
    <!----------classes------------->
    <section class="classes"></section>
    <section class="facilites">
        <h2 class="text-center text-uppercase mt-5" style="color:#ff7200;">Routine</h2>
        <p class="classp" style="font-size:40px;">Follow this routine</p>
        <div class="facilites-col">
            <img src="1.jpg">
            <h3>Chest/Triceps</h3>
            <p>1.Incline Bench Press &nbsp; 2.Machine Chest Press &nbsp; 3.Bench Press &nbsp; 4.Dumbbell Flyes &nbsp;
                5.Decline Bench Press &nbsp; 6.Dumbbell Flyes <br> 7.Bent Knee Dips &nbsp; 8.Cable Pull &nbsp; 9.Rope
                Pulldown &nbsp; 10.Overhead Pulley &nbsp; 11.Decline Skull Crusher &nbsp; 12.V Bar Pushdown </p>
        </div>
        <div class="facilites-col">
            <img src="ss.png">
            <h3>Shoulder/Abs</h3>
            <p>1.Push Press &nbsp; 2.Seatd Barbell Press &nbsp; 3.Arnold Press &nbsp; 4.Upright Rows &nbsp; 5.Lateral
                Raise &nbsp; 6.Front Raise <br> 7.Arm Rope Pulls &nbsp; 8.Face Pull &nbsp; 9.Abs Wheel Rollout &nbsp;
                10.Leg Crunches &nbsp; 11.Russian Twists &nbsp; 12.Seat-ups</p>
        </div>

        <div class="facilites-col">
            <img src="PullupGuy.jpg">
            <h3>Back/Biceps</h3>
            <p>1.Lat Pulldown &nbsp; 2.Machine Row &nbsp; 3.Deadlift &nbsp; 4.Back Machine Pull &nbsp; 5.Back Bar Pull
                &nbsp; 6.Rear Delt Row <br> 7.Ez Bar Curls &nbsp; 8.Incline Dumbbell Curl &nbsp; 9.Dumbbell Preacher
                Curl &nbsp; 10.Wrist Curl &nbsp; 11.Hammer Dumbbell Curl</p>
        </div>
        <div class="facilites-col">
            <img src="leegs.webp">
            <h3>Legs</h3>
            <p>1.Treadmill &nbsp; 2.Bicycle Run &nbsp; 3.Leg Extension &nbsp; 4.Calf Raise &nbsp; 5.Smith Machine Squats
                &nbsp; 6.Lying Leg Curls &nbsp; 7.Leg Press &nbsp; 8.Trap Bar Deadlift</p>
        </div>
        </div>
    </section>
</body>

</html>