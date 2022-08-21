<?php

   session_start();

   include("./include_files/functions.php");

   $db_host = "localhost";
   $db_user = "binaqfcu_binancevestu1";
   $db_pass = "@mikord09";
   $db_name = "binaqfcu_binanceVest-db";


   // Create connection
   $conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name);

   // Check connection
   if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
   }
   
   $username = "";
   $password    = "";
   $balance = "";
   $errors = array();
   $_SESSION['success'] = "";
    
   if (isset($_POST['login_user'])) {
   
      // Data sanitization to prevent SQL injection
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      
      // Error message if the input field is left blank
      if (empty($username)) {
            array_push($errors, "Username is required");
      }
      if (empty($password)) {
            array_push($errors, "Password is required");
      }
      
      // Checking for the errors
      if (count($errors) == 0) {
            
            // Password matching
            $password = md5($password);
            
            $query = "SELECT * FROM `create_acc` WHERE `user_id` ='$username' AND `passwrd` ='$password' ";
            $results = mysqli_query($conn, $query);
      
            // $results = 1 means that one user with the
            // entered username exists
            
            if (mysqli_num_rows($results) == 1) {
               
               // Storing username in session variable
               $_SESSION['username'] = $username;
               $row = mysqli_fetch_assoc($results);
            //   $_SESSION['userID'] = $row['user_id'];
               $_SESSION['balance'] = $balance;
               
               // Welcome message
               $_SESSION['success'] = "You have logged in!";
               
               // Page on which the user is sent
               // to after logging in
               header('location: ./wallet/overview.php');
            }
            else {
               // If the username and password doesn't match
               array_push($errors, "Email or Password incorrect");
            }
      }    
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="shortcut icon" href="images/imgs/fav.png" />
      <meta name="description" content=" The world's largest financial framework " />
      <meta name="keywords" content="investment fintech finance revolution networking company" />
      <meta charset="UTF-8" />
      <title>Vext</title>
      <link rel="stylesheet" type="text/css" href="css/header.css" />
      <link rel="stylesheet" type="text/css" href="css/bizmain.css" /> 
      <link rel="stylesheet" type="text/css" href="css/signups.css" /> 
      <link rel="stylesheet" href="bootstrap/3.3.6/css/bootstrap.min.css" />
      <!--important-->
      <script src="bootstrap/ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="javascript/navhide.js"></script>
      <script src="javascript/menubar2nd.js"></script>
      <link rel="stylesheet" href="fonts/money/flaticon.css" />

      <!-- Bootstrap -->
      <script src="javascript/bootstrap.min.js"></script>

      
       <style>
  

      .clearfix:after {
         clear: both;
      }
      *,
      :after,
      :before {
         box-sizing: border-box;
      }
      .clearfix:after,
      .clearfix:before {
         content: "";
         display: table;
      }
      .clearfix:after {
         clear: both;
         display: block;
      }


      .login-wrap {
         width: 100%;
         margin: auto;
         max-width: 525px;
         min-height: 670px;
         position: relative;
         background: url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
         box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
      }
      .login-html {
         width: 100%;
         height: 100%;
         position: absolute;
         padding: 90px 70px 50px 70px;
         background: rgba(40, 57, 101, 0.9);
      }
      .login-html .sign-in-htm,
      .login-html .sign-up-htm {
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         position: absolute;
         transform: rotateY(180deg);
         backface-visibility: hidden;
         transition: all 0.4s linear;
      }
      .login-html .sign-in,
      .login-html .sign-up,
      .login-form .group .check {
         display: none;
      }
      .login-html .tab,
      .login-form .group .label,
      .login-form .group .button {
         text-transform: uppercase;
      }
      .login-html .tab {
         font-size: 22px;
         margin-right: 15px;
         padding-bottom: 5px;
         margin: 0 15px 10px 0;
         display: inline-block;
         border-bottom: 2px solid transparent;
      }
      .login-html .sign-in:checked + .tab,
      .login-html .sign-up:checked + .tab {
         color: #fff;
         border-color: #1161ee;
      }
      .login-form {
         min-height: 345px;
         position: relative;
         perspective: 1000px;
         transform-style: preserve-3d;
      }
      .login-form .group {
         margin-bottom: 15px;
      }
      .login-form .group .label,
      .login-form .group .input,
      .login-form .group .button {
         width: 100%;
         color: #fff!important;
         display: block;
      }
      .login-form .group .input,
      .login-form .group .button {
         border: none;
         color: #fff!important;
         padding: 15px 20px;
         border-radius: 25px;
         background: rgba(255, 255, 255, 0.1);
      }
      .login-form .group input[data-type="password"] {
         text-security: circle;
         -webkit-text-security: circle;
      }
      .login-form .group .label {
         color: #fff;
         font-size: 12px;
      }
      .login-form .group .button {
         background: #1161ee;
      }
      .login-form .group label .icon {
         width: 15px;
         height: 15px;
         border-radius: 2px;
         position: relative;
         display: inline-block;
         color: #fff;
         background: rgba(255, 255, 255, 0.1);
      }
      .login-form .group label .icon:before,
      .login-form .group label .icon:after {
         content: "";
         width: 10px;
         height: 2px;
         background: #fff;
         position: absolute;
         transition: all 0.2s ease-in-out 0s;
      }
      .login-form .group label .icon:before {
         left: 3px;
         width: 5px;
         bottom: 6px;
         transform: scale(0) rotate(0);
      }
      .login-form .group label .icon:after {
         top: 6px;
         right: 0;
         transform: scale(0) rotate(0);
      }
      .login-form .group .check:checked + label {
         color: #fff;
      }
      .login-form .group .check:checked + label .icon {
         background: #1161ee;
      }
      .login-form .group .check:checked + label .icon:before {
         transform: scale(1) rotate(45deg);
      }
      .login-form .group .check:checked + label .icon:after {
         transform: scale(1) rotate(-45deg);
      }
      .login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm {
         transform: rotate(0);
      }
      .login-html .sign-up:checked + .tab + .login-form .sign-up-htm {
         transform: rotate(0);
      }

      .hr {
         height: 2px;
         margin: 60px 0 50px 0;
         background: rgba(255, 255, 255, 0.2);
      }
      .foot-lnk {
         text-align: center;
      }
   </style>
   </head>
   <!--body-->
   <body class="biz-body" onload="loader()">
       
       <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/624853992abe5b455fc3942d/1fvl8epv0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
       
      <div class="the-affiliate">
         <div id="navbarx">
            <!--div class="logo">
               <div class="phone-logo">
               
               </div>

               <a href="#"><img src="images/imgs/logo.png" class="logo-img" /> </a>
            </div-->

            <!--div class="rigg">
               <div class="phoneo">
                  <span class="img lnr lnr-user"> </span>
                  <div class="omahlay">
                     <a href="#"> <span class="lnr lnr-home"> </span> HOME</a>

                     <a href="login.php"> <span class="lnr lnr-lock"> </span> LOGIN</a>
                     <a href="signups.html"> <span class="lnr lnr-users"> </span>JOIN</a>
                  </div-->
               </div>

               <!--script>
                  $(".img").on("click", function () {
                     $(".omahlay").toggleClass("omah");
                  });
               </script-->
            </div>
         </div>

         <div class="body" style="z-index: 1;">
            <div style="text-align: center;" class="top-text">
               <div class=" " style="color: #ffffff !important; margin-bottom: 0px !important; padding-bottom: 20px !important; font-size: 28px; font-weight: bold !important; padding-top: 20px !important; font-family: poppins, sans-serif;"> <img style="width: 40px;" src="images/imgs/fav.png"> Fortinet</div>
           
            </div>

            <div class="login-container">
               <div class=" " style="color: #ee0909 !important; margin-bottom: 0px !important; padding-bottom: 0px !important; font-size: 23px; font-weight: bold !important; padding: 0 !important; font-family: poppins, sans-serif;">Login to your Vext</div>
               <p class=" " style="color: rgb(0, 0, 0) !important; margin-bottom: 50px; margin-top: 0px !important;">You've been missed </p>
 
               <form method="POST">
                   <?php  include("./include_files/errors.php"); ?>
<div>
                  <div class="input-div-half">
                     <div style="width: 100%;">
                        <!--h5>  Username</h5-->
                        <input placeholder="Username" required class="input" type="text" id="username" name="username" />
                     </div>
                  </div>

                  <div class="input-div-half">
                
                      
                        <div>
                           <!--h5>  password</h5-->
                           <input placeholder="Password" required class="input" type="password" id="password" name="password" />
                        </div>
                   
                  </div>
               </div>
                   
 
                  <!--<div id="wait_loader" class="progress progress-striped active">-->
                  <!--    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>-->
                  <!--</div>-->
                  <input required type="submit" class="sub-btn" onclick="login()" value="LOGIN" name="login_user">

                
               </form>
            </div>

            <div class="padding">
               <div class="text" style="text-align: center;">
                  <a href="forgot.html" style="color: #fff !important;"> Forgot Password? </a>
               </div>

               <div class="text" style="text-align: center; color: #fff;">
                   Don't have an account?? <a href="forgot.html" style="color: #fff !important; font-weight: bold;"> Register </a>
               </div>
            </div>
         </div>

         <script>
            $(".body").on("click", function () {
               $(".omahlay").removeClass("omah");
            });
         </script>
      </div>
       <!--######################################################################-->
            <script src="javascript/backend.js"></script>
        <!--######################################################################-->
   </body>

   <div class="loader" id="loader">
      <script></script>

      <div class="obi"></div>

      <div class="div">
         <img src="images/imgs/fav.png" />
      </div>
   </div>
</html>
