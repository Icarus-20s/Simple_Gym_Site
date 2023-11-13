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
    <title>Aspire Fitness</title>
    <link rel="stylesheet" href="classes.css">
 
</head>

<body>
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

            </ul>
        </div>
    </div>
    <!----------classes------------->
    <section class="classes"></section>
    <section class="facilites">
        <h2 class="text-center text-uppercase mt-5" style="color:#fd3c3d;">Classes</h2>
        <p class="classp" style="font-size:40px;">Take care of your body. It's the only place you have to live.</p>
        <div class="facilites-col">
        
            <img src="1.jpeg">
            <h3>GYM FITNESS</h3>
            <p>Exercise and rest are the cornerstones of improving your quality of life. It's not always easy but it's always worth it. When you find a fitness routine you enjoy, you'll feel better, look better and be happier in your own skin.</p>
        </div>
        <div class="facilites-col">
            <img src="indoor cycling.jpg">
            <h3>INDOOR CYCLING</h3>
            <p>Cycling is a great form of exercise as well as a practical way to get around, but it also carries the risk of significant injury, especially head injury. involves using a special stationary exercise bicycle with a weighted flywheel in a classroom setting.</p>
            </div>
           
        <div class="facilites-col">
            <img src="power yoga.jpeg">
            <h3>POWER YOGA</h3>
            <p>one up, slim down, and find balance with this high-energy summer workout from power yoga. It brings inner peace, a spiritual boost, and an unparalleled measure of serenity.Power yoga is a general term used to describe a vigorous.</p>
        </div>   <div class="facilites-col">
            <img src="ZUMBA.jpg">
            <h3>ZUMBA</h3>
            <p>Are you ready to party yourself into shape? Forget the workout, just lose yourself in the music and find yourself in shape with fitness dance at The Gym. Zumba classes feature exotic rhythms set to high-energy Latin and international beats.</p>
        </div>   <div class="facilites-col">
            <img src="CARDIO KICK BOXING.jpg">
            <h3>CARDIO KICK BOXING</h3>
            <p>Kickboxing not only gives you that fab figure, but also makes you stronger. Kickboxing has been a rage with fitness enthusiasts for some time now. For many people, it is a 'cool' workout option compared to gymming, which can be monotonous.</p>
        </div>
        <div class="facilites-col">
            <img src="CIRCUIT TRAINING.jpg">
            <h3>Circuit Training</h3>
            <p> Circuit training is a fast-paced class in which you do one exercise for 30 seconds to 5 minutes and then move on to another exercise. Increases your strength and aerobic fitness and burns lots of calories. Itâ€™s like a game where Everyone begins at a station.</p>
        </div>
        <div class="facilites-col">
            <img src="STRENGTH CLASSES.jpg">
            <h3> Strenght Classes</h3>
            <p> If you are looking for an improvement in strength, aerobic and anaerobic fitness then our range of conditioning classes are what you need.Strength training is not only for building muscle mass.</p>
        </div>
        <div class="facilites-col">
            <img src="OUTDOOR TRAINING.jpg">
            <h3> Outdoor Traning </h3>
            <p> Outdoor Training includes Running Club, Park Fitness. This session caters for various paces and abilities and takes you out and around our wonderful city.One of the best ways to blast fat is to train outdoors.</p>
        </div>
        <div class="facilites-col">
            <img src="cardio traning.jpg">
            <h3>CARDIO FITNESS</h3>
            <p>Cardio fitness is important to everyone. Quality cardio workouts can help everybody reach their health and fitness goals, whether those goals include new personal records for competition, lowering blood pressure, reducing cholesterol levels, managing diabetes.</p>
        </div>
    </div>
    </section>
    <!--------------testimonials----->
    <section class="testimonials">
        <h1>What our Memeber Says</h1>
        <div class="row">
            <div class="testimonials-col">
                <img src="people1.jpeg">
                <div>
                    <p>This is the first gym I have ever joined and the staff and atmosphere are encouraging. I want to get stronger and the PT’s here are really helpful, especially teaching me how to deadlift properly. I feel like I get more privacy here than a other gyms, so I can get on with my training without distractions.</p>
                    <h3>Christine berkly</h3>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="people2.jpeg">
                <div>
                    <p> The facilities here are excellent. You get good rapport and banter. I find the environment here is better for results than other gyms. Everyone’s professional and they don’t get into your space, which is excellent! Other gyms are packed, which makes me feel like a cash cow. I’m now doing boxing fitness at the age of 71 and my personal trainer is top notch!</p>
                    <h3>Charles Antique</h3>
                </div>
        </div>
        </div>
    </section>  
</body>
</html>