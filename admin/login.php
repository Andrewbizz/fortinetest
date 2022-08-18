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
            $trueps = md5('binacevest#454');
            //$query = "SELECT * FROM `create_acc` WHERE `user_id` ='binancevext' AND `passwrd` ='binacevest#454' ";
            //$results = mysqli_query($conn, $query);
      
            // $results = 1 means that one user with the
            // entered username exists
            
            if($username == 'binancevext' && $password == $trueps){
                  // Welcome message
               $_SESSION['success'] = "You have logged in!";
               
               // Page on which the user is sent
               // to after logging in
               header('location: ./admin/overview.html');
            }else{
                 // If the username and password doesn't match
               array_push($errors, "Email or Password incorrect");
            }
            
            // if (mysqli_num_rows($results) == 1) {
               
            //   // Storing username in session variable
            //   $_SESSION['username'] = $username;
            //   $row = mysqli_fetch_assoc($results);
            // //   $_SESSION['userID'] = $row['user_id'];
            //   $_SESSION['balance'] = $balance;
               
            //   // Welcome message
            //   $_SESSION['success'] = "You have logged in!";
               
            //   // Page on which the user is sent
            //   // to after logging in
            //   header('location: ./admin/overview.php');
            // }
            // else {
            //   // If the username and password doesn't match
            //   array_push($errors, "Email or Password incorrect");
            // }
      }    
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="../images/imgs/fav.png">
      <meta name="description" content=" The world's largest financial framework ">
      <meta name="keywords" content="investment fintech finance revolution networking company">
      <meta charset="UTF-8">
      <title>Ragnorex </title>
      <link rel="stylesheet" type="text/css" href="../css/header.css">
      <link rel="stylesheet" type="text/css" href="../css/w3.css">
      <link rel="stylesheet" type="text/css" href="../css/linearicons.css">
      <link rel="stylesheet" type="text/css" href="../css/icomoon.css">
      <link rel="stylesheet" type="text/css" href="../css/signups.css">
      <link rel="stylesheet" type="text/css" href="../css/bizmain.css">
      <script src="../javascript/swiper.min.js"></script>
      <link rel="stylesheet" href="../css/swiper.css">
      <link rel="stylesheet" href="../css/swiper.min.css">
      <link rel="stylesheet" type="text/css" href="../css/head.css">
      <link rel="stylesheet" type="text/css" href="../css/pages.css">
      <link rel="stylesheet" href="../bootstrap/3.3.6/css/bootstrap.min.css">
      <!--important-->   
      <script src="../bootstrap/ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="../bootstrap/3.3.6/js/bootstrap.min.js"></script>   
      <script src="../javascript/navhide.js"></script>   
      <script src="../javascript/menubar2nd.js"></script>
      <link rel="stylesheet" href="../fonts/money/flaticon.css">
      <!-- Bootstrap -->
      <script src="../javascript/bootstrap.min.js"></script>
   <!-- CSS_ADSBLOCK_START -->
<link rel="stylesheet" href="https://adblockers.opera-mini.net/css_block/default-domainless.css" type="text/css" />
<!-- CSS_ADSBLOCK_END -->
</head>
   <style>
      body{
      background-size: cover; 
      background-size: cover;
      }
      .header {
      position: absolute;
      top: -20px;
      width: 100%;
      min-width: 300px;
      height: 200px;
      background-color: blue;
      background-image: linear-gradient(to bottom right, #00041b, #4848c7);
      margin: auto;
      border-radius: 15px;
      transform: skewY(5deg) translateY(-20px);
      overflow: hidden;
      }
      .header > * {
      transform: skewY(-5deg) translateY(20px);
      }
      .header::before, .header::after {
      content: '';
      position: absolute;
      background-color: rgba(0, 0, 0, 0.3);
      opacity: .2;
      z-index: 1;
      }
      .header::before {
      top: -30px;
      right: -40px;
      border-radius: 120px;
      height: 120px;
      width: 120px;
      }
      .header::after {
      top: 130px;
      left: 0px;
      border-radius: 90px;
      height: 90px;
      width: 90px;
      }
      .header i {
      display: block;
      z-index: 1;
      position: absolute;
      width: 2px;
      height: 2px;
      background-color: #fff;
      border-radius: 2px;
      }
      .header i.star-1 {
      top: 30px;
      left: 20px;
      }
      .header i.star-2 {
      top: 50px;
      left: 100px;
      }
      .header i.star-3 {
      top: 60px;
      left: 200px;
      }
      .header i.star-4 {
      top: 70px;
      left: 260px;
      }
      .header i.star-5 {
      top: 80px;
      left: 50px;
      }
      .header i.star-6 {
      top: 20px;
      left: 230px;
      }
      .header .avatar {
      width: 80px;
      height: 80px;
      position: absolute;
      margin: 20px auto;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      }
      .text{
      color: #878787!important;
      }
      .text-con{
      margin-bottom: 30px;
      }
      .header .avatar svg {
      width: 100%;
      height: 100%;
      opacity: .9;
      }
      .clearfix:after {
      clear: both;
      }
      .content{
      margin-top: 30px;
      }
      .content .email,
      .content .password {
      position: relative;
      }
      .content .email svg,
      .content .password svg {
      position: absolute;
      left: 10px;
      height: 18px;
      width: 18px;
      z-index: 99;
      opacity: 0.8;
      }
      .content input {
      display: block;
      height: 40px;
      width: calc(100%);
      margin-bottom: 10px;
      padding: 0 10px 0 40px;
      font-size: 14px;
      font-family:  Comic Sans MS ;
      outline: none;
      border: 0;
      opacity: .9;
      border-bottom: 1px solid #E0E0E0;
      }
      .content .text {
      font-family: Tahoma;
      font-size: 12px;
      text-align: center;
      opacity: 1;
      }
      .content button:active {
      transform: translateY(1px);
      }
      .content svg {
      width: 70px;
      height: 70px;
      margin: 10px auto;
      display: block;
      }
      .content svg path:first-child {
      fill: #424242;
      }
      .phoneo a{
      color: #00041b;
      }
      .phoneo lnr{
      color: #00041b;
      }
   </style>
   <div class="loader" id="loader" >
      <script></script>
      <div class="theb">
      </div>
      <div class="div">
         <img src="../images/imgs/fav.png">
      </div>
   </div>
   <!--body-->
   <body class=" " onload="loader()" >
      <div class=" the-affiliate">
         <div id="navbarx">
            <div class="logo">
               <div class="phone-logo">
                  <a href="../index.html">
                     <span class="logophone-img"> <img src="../images/imgs/fav.png"> </span> 
                     <div class="logotext"> Ragnorex  </div>
                  </a>
               </div>
               <a href="../index.html"><img src="../images/imgs/logo.png" class="logo-img"> </a>
            </div>
            <div class="rigg">
               <div class="phoneo">
                  <span style="color: #00041b" class=" img lnr lnr-user"> </span> 
                  <div class="omahlay">
                     <a href="../index.html"> <span class="lnr lnr-home"> </span> HOME</a>  
                  </div>
               </div>
            </div>
         </div>
         <div class=" jizz " style="z-index: 1;">
            <div style="text-align: center;" class="top-text">
               <h3 style="color: #fff">  welcome!</h3>
               <p class="minii-container" style="color: lightgrey; margin-bottom: 50px;"> login to admin Dashboard</p>
            </div>
            <div class="jizz login-container " style="overflow:hidden; padding-top: 150px">
               <form  method="POST">
                  <div class="header">
                     <i class="star-1"></i>
                     <i class="star-2"></i>
                     <i class="star-3"></i>
                     <i class="star-4"></i>
                     <i class="star-5"></i>
                     <i class="star-6"></i>
                     <div class="avatar">
                        <svg fill="#fff" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                           <path d="M14.5 0C10.364 0 7 3.364 7 7.5v3c0 .657 1 .668 1 0v-3C8 3.904 10.904 1 14.5 1S21 3.904 21 7.5v3c0 .676 1 .644 1 0v-3C22 3.364 18.636 0 14.5 0zm0 17c-1.375 0-2.5 1.125-2.5 2.5 0 .77.406 1.445 1 1.914V23.5c0 .822.678 1.5 1.5 1.5s1.5-.678 1.5-1.5v-2.088c.594-.47 1-1.143 1-1.912 0-1.375-1.125-2.5-2.5-2.5zm0 1c.834 0 1.5.666 1.5 1.5 0 .536-.286 1.027-.75 1.295-.155.09-.25.255-.25.434v2.27c0 .286-.214.5-.5.5-.286 0-.5-.214-.5-.5v-2.27c0-.178-.095-.344-.25-.433-.464-.268-.75-.76-.75-1.297 0-.834.666-1.5 1.5-1.5zm-9-6c-.822 0-1.5.678-1.5 1.5v15c0 .822.678 1.5 1.5 1.5h18c.822 0 1.5-.678 1.5-1.5v-15c0-.822-.678-1.5-1.5-1.5zm0 1h18c.286 0 .5.214.5.5v15c0 .286-.214.5-.5.5h-18c-.286 0-.5-.214-.5-.5v-15c0-.286.214-.5.5-.5z"/>
                        </svg>
                     </div>
                     <div class="title">
                        WELCOME
                     </div>
                  </div>
                  <div class="content" >
                     <div class="email"  style="margin-top:60px; z-index: 999999999999999999999999 !important; background-color:  ; ">
                        <svg fill="currentColor"  width="20" height="20" viewBox="0 0 20 20">
                           <path fill="#000000" d="M17.5 6h-16c-0.827 0-1.5 0.673-1.5 1.5v9c0 0.827 0.673 1.5 1.5 1.5h16c0.827 0 1.5-0.673 1.5-1.5v-9c0-0.827-0.673-1.5-1.5-1.5zM17.5 7c0.030 0 0.058 0.003 0.087 0.008l-7.532 5.021c-0.29 0.193-0.819 0.193-1.109 0l-7.532-5.021c0.028-0.005 0.057-0.008 0.087-0.008h16zM17.5 17h-16c-0.276 0-0.5-0.224-0.5-0.5v-8.566l7.391 4.927c0.311 0.207 0.71 0.311 1.109 0.311s0.798-0.104 1.109-0.311l7.391-4.927v8.566c0 0.276-0.224 0.5-0.5 0.5z"></path>
                        </svg>
                        <input required name="username" placeholder="Username">
                     </div>
                     <div class="email">
                        <svg xmlns="http://www.w3.org/2000/svg" id="_x31__x2C_5" enable-background="new 0 0 24 24" height="512px" viewBox="0 0 24 24" width="512px">
                           <g>
                              <path d="m21 24c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-4.5c-.827 0-1.5.673-1.5 1.5s.673 1.5 1.5 1.5 1.5-.673 1.5-1.5-.673-1.5-1.5-1.5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#000"/>
                              <path d="m11.75 23.25c-.414 0-.75-.336-.75-.75v-1c0-.689.561-1.25 1.25-1.25h6.25c.414 0 .75.336.75.75s-.336.75-.75.75h-6v.75c0 .414-.336.75-.75.75z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#000"/>
                              <path d="m13.75 23.25c-.414 0-.75-.336-.75-.75v-1.5c0-.414.336-.75.75-.75s.75.336.75.75v1.5c0 .414-.336.75-.75.75z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#000"/>
                              <path d="m8.25 20h-6c-1.241 0-2.25-1.01-2.25-2.25v-8.5c0-1.24 1.009-2.25 2.25-2.25h11.5c1.241 0 2.25 1.01 2.25 2.25v8c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-8c0-.413-.336-.75-.75-.75h-11.5c-.414 0-.75.337-.75.75v8.5c0 .413.336.75.75.75h6c.414 0 .75.336.75.75s-.336.75-.75.75z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#000"/>
                              <path d="m12.25 8.5c-.414 0-.75-.336-.75-.75v-2.75c0-1.93-1.57-3.5-3.5-3.5s-3.5 1.57-3.5 3.5v2.75c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-2.75c0-2.757 2.243-5 5-5s5 2.243 5 5v2.75c0 .414-.336.75-.75.75z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#000"/>
                           </g>
                        </svg>
                        <input placeholder="password" name="password" type="password">
                     </div>
                  </div>
                  <input required type="submit" class="sub-btn" name="login_user" value="LOGIN">
  
                  <div class="text">
                     - OR -
                  </div>
                  <div class="text">
                     <a href="https://ragnorex.com">GET TF OUT</a> IF YOU DON'T HAVE ONE YET
                  </div>
               </form>
            </div>
            <div class="padding">
               <ul class="foot-nav">
                  <div class="div"> &copy;2020 Ragnorex </div>
                  <li> <a href="../index.html"> Home </a>  </li>
                  <li> <a href="../terms.html"> Terms</a>  </li>
                  <li> <a href="../Terms.html"> Privacy  </a>  </li>
               </ul>
            </div>
         </div>
      </div>
   </body>
   <!--script type="text/javascript">
      /** List of sentences
      var _CONTENT = [ "CHOOSE AN INVESTMENT PLAN", "MAKE ONLY TWO REFERRALS ONLY", "CASH OUT 160% OF YOUR INVESTMENT", "DO IT AGAIN" ];
      
      // Current sentence being processed
      var _PART = 0;
      
      // Character number of the current sentence being processed 
      var _PART_INDEX = 0;
      
      // Holds the handle returned from setInterval
      var _INTERVAL_VAL;
      
      // Element that holds the text
      var _ELEMENT = document.querySelector("#cryptos");
      
      // Implements typing effect
      function Type() { 
      	var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
      	_ELEMENT.innerHTML = text;
      	_PART_INDEX++;
      
      	// If full sentence has been displayed then start to delete the sentence after some time
      	if(text === _CONTENT[_PART]) {
      		clearInterval(_INTERVAL_VAL);
      		setTimeout(function() {
      			_INTERVAL_VAL = setInterval(Delete, 60);
      		}, 1000);
      	}
      }
      
      // Implements deleting effect
      function Delete() {
      	var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
      	_ELEMENT.innerHTML = text;
      	_PART_INDEX--;
      
      	// If sentence has been deleted then start to display the next sentence
      	if(text === '') {
      		clearInterval(_INTERVAL_VAL);
      
      		// If last sentence then display the first one, else move to the next
      		if(_PART == (_CONTENT.length - 1))
      			_PART = 0;
      		else
      			_PART++;
      		_PART_INDEX = 0;
      
      		// Start to display the next sentence after some time
      		setTimeout(function() {
      			_INTERVAL_VAL = setInterval(Type, 110);
      		}, 200);
      	}
      }
      
      // Start the typing effect on load
      _INTERVAL_VAL = setInterval(Type, 100);
      
      </script-->
   <script type="text/javascript">
      const inputs = document.querySelectorAll('.input');
      
      function focusFunc(){
         let parent = this.parentNode.parentNode;
         parent.classList.add('focusx'); 
      }
      
      
      function blurFunc(){
      let parent = this.parentNode.parentNode;
      if(this.value == ""){
      	parent.classList.remove('focusx'); 
      }
      }
      
      inputs.forEach(input  => {
      input.addEventListener('focus', focusFunc);
      input.addEventListener('blur', blurFunc);
      
      });
      
   </script>		
   <!--script>
      // Get the modal
      var modal = document.getElementById('the-box');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
       if (event.target == mo00dal) {
         modal.style.display = "none";
       }
      }
      
      </script-->
   <!--script>
      Function get(ref){
          if(ref=(new regExp('[?&]'+encodeURIComponent(ref)+'=([^&]*)')).exec(location.search))
              return decodeURIComponent(ref[1]);
      }
      document.getElementById('refferal').value = get('ref');
      </script-->
   <!--script>
      function get(ref){
          if(ref=(new RegExp('[?&]'+encodeURIComponent(ref)+'=([^&]*)')).exec(location.search))
          return decodeURIComponent(ref[1]);
      }
      document.getElementById('referral_code_input').value = get('ref');
      </script-->
   <script>
      $('.guff').on('click', function() {
      $('.bizphone-drop').toggleClass('howw');  
      $('.flipxxx').toggleClass('flopx');  
      });
   </script>
   <script>
      $('.img').on('click', function() {
      $('.omahlay').toggleClass('omah');  
      });  
      
      $('.jizz').on('click', function() {
      $('.omahlay').removeClass('omah');  
      });  
      
      
      
      
   </script>