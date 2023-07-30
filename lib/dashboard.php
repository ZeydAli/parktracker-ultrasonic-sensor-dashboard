<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css"/>
    <script src="jsrealtime/jquery-3.4.0.min.js"></script>
	<script src="jsrealtime/mdb.min.js"></script>
	<script src="jsrealtime/jquery-latest.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            setInterval(function() {
                $("#distanceCm").load('distanceCm.php');
            },1000);
        });
	</script>
</head>
<body>
    
    <section id="menu">
        <div class="logo">
            <h2>IOT WEBSITE</h2>
        </div>
        <div class="items">
            <li>
                <i class="fa-solid fa-chart-pie"></i>
                <a href="#">dahsboard</a>
            </li>
            <li>
                <i class="fa-solid fa-user"></i>
                <a href="user.php">user</a>
            </li>
            <li>
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="logout.php">logout</a>
            </li>
        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="search">
                <input type="text" placeholder="search">
            </div>
            <div class="profile">
                <i class="fa-solid fa-bell"></i>
                <img src="assets/profile.jpg">
            </div>
        </div>
    </section>

    <section id="database">
        <div class="distance_container">
            <div class="distance_number">
                <h2><span id="distanceCm"></span></h2>
            </div>
            <div class="distance_cm">
                <h2>cm</h2>
            </div>
        </div>

    </section>
</body>
</html>