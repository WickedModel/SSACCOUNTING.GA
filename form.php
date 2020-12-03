<?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subjct=$_POST['subject'];
    $msg=$_POST['textarea'];

    $to='kingzarif124@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Email: ".$email."\n"."Subject: ".$subjct."\n"."Message: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
      echo "<!DOCTYPE html>
<!-- Created By Zarif Sefat -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Accounting Services</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">SS Acc<span>ounting.</span></a></div>
            <ul class="menu">
                <li><a href="#" class="menu-btn">Book Now!</a></li>
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Clients</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Thank you for submitting!</div>
                <div class="text-2">We will get back to you as soon as possible!</div>
            </div>
        </div>
    </section>";
    }
    else{
      echo "Something went wrong. Please try again later."
    }
  }
?>