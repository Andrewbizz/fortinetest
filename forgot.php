<?php

    session_start();

    include("./include_files/functions.php");
    include("./include_files/validate_functions.php");
    
    // Declaring and hoisting the variables
    $username = "";
    $email    = "";
    $errors = array();
    $_SESSION['success'] = "";
    
    /* Production DB Connection */
//    $db_host = "localhost";
//    $db_user = "binaqfcu_binancevestu1";
//    $db_pass = "@mikord09";
//    $db_name = "binaqfcu_binanceVest-db";

    /* Development DB Connection */
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "mikord";
    $db_name = "binaqfcu_binanceVest-db";

    // Create connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name);

    // Check connection
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    /* DB Connection Closing */

    if (isset($_POST['submit'])) {
    
      echo "  <html>
                  <script>
                     window.alert('Check Email to change ypur password');
                  </script>
            </html>
         "; 
         
         if(isset($_POST["email"]) && (!empty($_POST["email"]))){
            $email = $_POST["email"];
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$email) {
               $error .="<p>Invalid email address please type a valid email address!</p>";
               }else{
               $sel_query = "SELECT * FROM `users` WHERE email='".$email."'";
               $results = mysqli_query($con,$sel_query);
               $row = mysqli_num_rows($results);
               if ($row==""){
               $error .= "<p>No user is registered with this email address!</p>";
               }
              }
               if($error!=""){
               echo "<div class='error'>".$error."</div>
               <br /><a href='javascript:history.go(-1)'>Go Back</a>";
               }else{
               $expFormat = mktime(
               date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
               );
               $expDate = date("Y-m-d H:i:s",$expFormat);
               $key = md5(2418*2+$email);
               $addKey = substr(md5(uniqid(rand(),1)),3,10);
               $key = $key . $addKey;
            // Insert Temp Table
            mysqli_query($con,
            "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
            VALUES ('".$email."', '".$key."', '".$expDate."');");
            
            $output='<p>Dear user,</p>';
            $output.='<p>Please click on the following link to reset your password.</p>';
            $output.='<p>-------------------------------------------------------------</p>';
            $output.='<p><a href="https://www.allphptricks.com/forgot-password/reset-password.php?
            key='.$key.'&email='.$email.'&action=reset" target="_blank">
            https://www.allphptricks.com/forgot-password/reset-password.php
            ?key='.$key.'&email='.$email.'&action=reset</a></p>';		
            $output.='<p>-------------------------------------------------------------</p>';
            $output.='<p>Please be sure to copy the entire link into your browser.
            The link will expire after 1 day for security reason.</p>';
            $output.='<p>If you did not request this forgotten password email, no action 
            is needed, your password will not be reset. However, you may want to log into 
            your account and change your security password as someone may have guessed it.</p>';   	
            $output.='<p>Thanks,</p>';
            $output.='<p>AllPHPTricks Team</p>';
            $body = $output; 
            $subject = "Password Recovery - AllPHPTricks.com";
            
            $email_to = $email;
            $fromserver = "noreply@yourwebsite.com"; 
            require("PHPMailer/PHPMailerAutoload.php");
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host = "mail.yourwebsite.com"; // Enter your host here
            $mail->SMTPAuth = true;
            $mail->Username = "noreply@yourwebsite.com"; // Enter your email here
            $mail->Password = "password"; //Enter your password here
            $mail->Port = 25;
            $mail->IsHTML(true);
            $mail->From = "noreply@yourwebsite.com";
            $mail->FromName = "AllPHPTricks";
            $mail->Sender = $fromserver; // indicates ReturnPath header
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress($email_to);
            if(!$mail->Send()){
            echo "Mailer Error: " . $mail->ErrorInfo;
            }else{
            echo "<div class='error'>
            <p>An email has been sent to you with instructions on how to reset your password.</p>
            </div><br /><br /><br />";
               }
               }
            }else{
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

      .login-html .sign-in:checked+.tab,
      .login-html .sign-up:checked+.tab {
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
         color: #fff !important;
         display: block;
      }

      .login-form .group .input,
      .login-form .group .button {
         border: none;
         color: #fff !important;
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

      .login-form .group .check:checked+label {
         color: #fff;
      }

      .login-form .group .check:checked+label .icon {
         background: #1161ee;
      }

      .login-form .group .check:checked+label .icon:before {
         transform: scale(1) rotate(45deg);
      }

      .login-form .group .check:checked+label .icon:after {
         transform: scale(1) rotate(-45deg);
      }

      .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
         transform: rotate(0);
      }

      .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
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
         <div class=" "
            style="color: #ffffff !important; margin-bottom: 0px !important; padding-bottom: 20px !important; font-size: 28px; font-weight: bold !important; padding-top: 20px !important; font-family: poppins, sans-serif;">
            <img style="width: 40px;" src="images/imgs/fav.png"> VEXT</div>

      </div>

      <div class="login-container">
         <div class=" "
            style="color: #4162ff !important; margin-bottom: 0px !important; padding-bottom: 0px !important; font-size: 23px; font-weight: bold !important; padding: 0 !important; font-family: poppins, sans-serif;">
            Forgot Password?</div>
         <p class=" " style="color: rgb(0, 0, 0) !important; margin-bottom: 50px; margin-top: 0px !important;">Enter
            your email to reset your password </p>
         <script src="javascript/validate_password.js"></script>
         <form action=" " method="post" onSubmit="return validatePassword()">


            <div>
               <div class="input-div-half">
                  <div style="width: 100%;">
                     <!--h5>  Username</h5-->
                     <input placeholder="email" required class="input" type="text" id="email"
                        name="email" />
                  </div>
               </div>

            </div>

            <!--<div id="wait_loader" class="progress progress-striped active">-->
            <!--    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>-->
            <!--</div>-->
            <input type="submit" name="submit" value="Submit" class="full-width">
         </form>
      </div>

      <div class="padding">


         <div class="text" style="text-align: center; color: #fff;">
            Back to <a href="login.php" style="color: #fff !important; font-weight: bold;"> Login </a>
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

<?php mysqli_close($conn); ?> 