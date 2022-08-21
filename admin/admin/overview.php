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

   $username = $_SESSION['username'];

   if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You have to log in first";
      header('location: login.php');
   }
      
   $query = "SELECT * FROM `create_acc` WHERE `user_id`='$username'";
   $result = mysqli_query($conn,$query);
   
   if($row = mysqli_fetch_array($result)) {
      $balance = $row["acc_balance"];
      $userid = $row["user_id"];

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="../../images/imgs/fav.png">
      <meta name="description" content=" The world's largest financial framework ">
      <meta name="keywords" content="investment fintech finance revolution networking company">
      <meta charset="UTF-8">
      <title> </title>
      <link rel="stylesheet" type="text/css" href="../../css/linearicons.css">
      <link rel="stylesheet" type="text/css" href="../../css/icomoon.css">
      <link rel="stylesheet" href="../../fonts/money/flaticon.css">
      <link rel="stylesheet" href="../../bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="../../bootstrap/ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="../../bootstrap/3.3.6/js/bootstrap.min.js"></script>    
      <link rel="stylesheet" href="css/main.css">
      <!--important-->   
      <script src="javascript/main.js"></script>  
   <!-- CSS_ADSBLOCK_START -->
<link rel="stylesheet" href="https://adblockers.opera-mini.net/css_block/default-domainless.css" type="text/css" />
<!-- CSS_ADSBLOCK_END -->
</head>
   <style>
      .done{
      background: TRANSPARENT !important;
      position: relative;
      border: 1px solid #76EB00 !important;
      box-shadow: 0 0 20px white !important;
      }
      .done:after{
      background: #76EB00 !important;
      }
      .time-cont{
      width:  100%;
      display: flex;
      }
      .timeline{
      width: 400px;
      margin: auto;
      display: block; 
      padding-left: 0;
      font-size: 300;
      position: relative;
      margin-bottom: 40px !important;
      }
      @media screen and (max-width:400px) {
      .timeline{
      width: 100%;
      }
      .timeline-baby{
      width: 90%; 
      padding: 15px !important; 
      }
      .l{
      float: none;
      margin:auto;
      margin-left: 0;
      }
      .r{
      float: none;
      margin-right: 0px;
      }
      }
      .baby-cont{
      position: relative;
      height: 130px;
      }
      .timeline-baby{
      width: 270px; 
      padding-left: 15px; 
      }
      .r{
      float: none;
      margin-right: 30px;
      }
      .l{
      float: right;
      margin-left: 30px;
      }
      .l .date{
      }
      .line{
      height: 100%;
      width: 1px;position: absolute;
      left: 0;
      right: 0;
      margin: auto;
      z-index: -1;
      background: red;
      }
      .line::after{ 
      height: 11px;
      width: 11px;
      content: ""; 
      border: solid red 1px;
      position: absolute;
      left: -5px;
      right: 0;
      z-index: 1;
      border-radius: 50%;
      top: 20px;
      margin: auto;   
      background: #D2D2D2  
      }
      .date{
      margin-bottom: 15px;
      position: relative;
      }
      .date:after{
      position: absolute;
      width: 100%;
      height: 1px;
      background: red;
      content: "";
      bottom: -6px;
      text-align: left;
      z-index: -9;
      left: -26px;
      }
      .l .date{
      margin-bottom: 15px;
      position: relative;
      text-align: right
      }
      .l  .date:after{
      position: absolute;
      width: 100%;
      height: 1px;
      background: red;
      content: "";
      bottom: -5px;
      left: 26px;
      }
      .the-things{
      background: white;
      border-radius: 09px;
      padding: 10px 15px
      }
   </style>
   <header>
      <div id="navbar" class="the-nav">
      </div>
   </header>
   <div class="loader" id="loader" >
      <script></script>
      <div class="theb">
      </div>
      <div class="div">
         <img src="../../images/imgs/fav.png">
      </div>
   </div>
   <!--body-->
   <body class="biz-body" onload="loader()" >
      <div class="payquest">
         <div class="quest-cont">
            <div class="infox"><span>?</span></div>
            <div class="text">
               What do you want to do?
            </div>
            <a href=""  class="cancel" style="font-size:14px !important">cancel</a>
         </div>
      </div>
      <aside class="sidenav"  >
         <div class="bull">
            <div class="logco">
               <div class="logo-cont" >
                  <a href="../../Tcontract.html"><img src="../../images/imgs/fav.png"  > </a>
               </div>
               <div class="logo-text">
                  <span></span> <span class="white"> </span>
               </div>
            </div>
         </div>
         <div class="the-nav">
            <ul class="sidenav__list">
               <a href="overview.html" class="sidenav__list-item current"> <span class="lnr icon-apps"> </span> Overview</a>
               <a href="withdraw.html" class=" sidenav__list-item"> <span class="icon icon-credit-card"> </span> Payouts </a>
               <!--a href="invest.html" class="sidenav__list-item"> <span class="lnr lnr-rocket"> </span> Reinvest</a-->
               <a href="affiliate.html" class="sidenav__list-item"> <span class="lnr  lnr-users"> </span> Affiliates</a>
               <a href="transaction.html" class="sidenav__list-item"> <span class="icon lnr lnr-history"> </span> Transactions</a>
               <a href="promo.html" class="sidenav__list-item "> <span class="icon lnr lnr-bullhorn"> </span> Ad banners </a>
               <!--a href="guide.html" class="sidenav__list-item "> <span class="icon icon-speaker"> </span> Your guide </a-->
               <a href="faqs.html" class="sidenav__list-item "> <span class="icon icon-question" style="font-weight:1 !important"> </span> FAQs </a>
               <a href="bug.html" class="sidenav__list-item"> <span class="lnr lnr-bug"> </span> report a bug</a>
            </ul>
            <div class="acct-manager">
            </div>
            <div class="bg">
            </div>
         </div>
      </aside>
      <div class="grid-container">
         <main class="main ">
            <div class="header " >
               <span class="menu-icon" id="butt">
                  <div class="menu-bars bar1"> </div>
                  <div class="menu-bars"> </div>
                  <div class="menu-bars bar2"> </div>
                  <div class="menu-bars"> </div>
               </span>
               <div class="biz-left">
                  <span>
                     <p> Hi, Admin </p>
                  </span>
               </div>
               <div class="biz-right" id="buttonx">
                  <span class="round">
                     <span class="icon icon-user"></span> 
                     <div class="status"style="text-align: center;
                        font-size:9px">ADMIN </div>
                  </span>
                  <div class="dropx" >
                     <div>
                        <div class="mail-box">
                           <div class="name">
                              John Drew
                           </div>
                           <div class="mail">
                              Johndrew@gmail.com
                           </div>
                        </div>
                        <div>  <a href="profile.html"> <span class="icon icon-details">
                           </span> Edit profile</a>
                        </div>
                        <div class="paybtnn">
                           <a href="withdraw.html"> <span class="icon icon-payment">
                           </span> payment</a> 
                        </div>
                        <div>
                           <a href="../../login.php"> <span class="icon icon-exit_to_app"></span> Log out </a> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="  dash-body"  id="button">
               <div class="container baby-top" style="width: 100%; " >
                  <div class="Hcontainer">
                     <div class="HBox">
                        <div class="Hbox-row">
                           <div class="box-cell one beep">
                              <div class="inner">
                                 <div class="caption">   AFFILIATES</div>
                                 <div class="content">
                                    <span> 10 </span>
                                    <div class="tiny"> PENDING REQUESTS </div>
                                    <div> <a class="button" href="affiliate.html">Review</a> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="progress-cont Hcontainer charts-container">
                     <div class="HBox">
                        <div class="Hbox-row">
                           <div class="progress-cell beep five">
                              <div class="inner">
                                 <div class="caption"> TOTAL AFFILATES</div>
                                 <div class="content">
                                    <span>
                                       50
                                       <div class="tiny"></div>
                                    </span>
                                    <div>
                                       <a class="button" href="transactions.html" > SEE MORE </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="progress-cell beep five">
                              <div class="inner">
                                 <div class="caption"> TOTAL WITHDRAWALS</div>
                                 <div class="content">
                                    <span>
                                       $91332060
                                       <div class="tiny"></div>
                                    </span>
                                    <div>
                                       <a class="button" href="transactions.html" > SEE MORE </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="time-cont">
                     <div class="timeline">
                        <h1 style="text-align: center"> WEEKLY TRANSACTION REVIEW </h1>
                        <div class="baby-cont">
                           <span class="line">
                           </span>
                           <div class=" l timeline-baby">
                              <div class="date">
                                 10 february 2021
                              </div>
                              <div class="the-things">
                                 <div class="withdraws">
                                    <b>20</b> withdrawals made
                                 </div>
                                 <div class="amount">
                                    <b>$2600</b> withdrawn
                                 </div>
                                 <div class="amount">
                                    <b>0</b> New affiliates request
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="baby-cont">
                           <span class="line">
                           </span>
                           <div class=" r timeline-baby">
                              <div class="date">
                                 10 february 2021
                              </div>
                              <div class="the-things">
                                 <div class="withdraws">
                                    <b>20</b> withdrawals made
                                 </div>
                                 <div class="amount">
                                    <b>$2600</b> withdrawn
                                 </div>
                                 <div class="amount">
                                    <b>15</b> New affiliates request
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="baby-cont">
                           <span class="line">
                           </span>
                           <div class=" l timeline-baby">
                              <div class="date">
                                 10 february 2021
                              </div>
                              <div class="the-things">
                                 <div class="withdraws">
                                    <b>20</b> withdrawals made
                                 </div>
                                 <div class="amount">
                                    <b>$2600</b> withdrawn
                                 </div>
                                 <div class="amount">
                                    <b>15</b> New affiliates request
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="baby-cont">
                           <span class="line">
                           </span>
                           <div class=" r timeline-baby">
                              <div class="date">
                                 10 february 2021
                              </div>
                              <div class="the-things">
                                 <div class="withdraws">
                                    <b>20</b> withdrawals made
                                 </div>
                                 <div class="amount">
                                    <b>$2600</b> withdrawn
                                 </div>
                                 <div class="amount">
                                    <b>15</b> New affiliates request
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="baby-cont">
                           <span class="line">
                           </span>
                           <div class=" l timeline-baby">
                              <div class="date">
                                 10 february 2021
                              </div>
                              <div class="the-things">
                                 <div class="withdraws">
                                    <b>20</b> withdrawals made
                                 </div>
                                 <div class="amount">
                                    <b>$2600</b> withdrawn
                                 </div>
                                 <div class="amount">
                                    <b>15</b> New affiliates request
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="baby-cont">
                           <span class="line">
                           </span>
                           <div class=" r timeline-baby">
                              <div class="date">
                                 10 february 2021
                              </div>
                              <div class="the-things">
                                 <div class="withdraws">
                                    <b>20</b> withdrawals made
                                 </div>
                                 <div class="amount">
                                    <b>$2600</b> withdrawn
                                 </div>
                                 <div class="amount">
                                    <b>15</b> New affiliates request
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="baby-cont">
                           <span class="line">
                           </span>
                           <div class=" l timeline-baby">
                              <div class="date">
                                 10 february 2021
                              </div>
                              <div class="the-things">
                                 <div class="withdraws">
                                    <b>20</b> withdrawals made
                                 </div>
                                 <div class="amount">
                                    <b>$2600</b> withdrawn
                                 </div>
                                 <div class="amount">
                                    <b>15</b> New affiliates request
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <script>
                     function copyToClipboar(elementId) {
                     
                       // Create an auxiliary hidden input
                       var aux = document.createElement("input");
                     
                       // Get the text from the element passed into the input
                       aux.setAttribute("value", document.getElementById(elementId).innerHTML);
                     
                       // Append the aux input to the body
                       document.body.appendChild(aux);
                     
                       // Highlight the content
                       aux.select();
                     
                       // Execute the copy command
                       document.execCommand("copy");
                     
                       // Remove the input from the body
                       document.body.removeChild(aux);
                     
                     }
                     
                     function log(){
                     	console.log('---')
                     }
                          
                  </script>
                  </section>
               </div>
            </div>
      </div>
      </main>
      </div>
      <a href="#" class="float" target="_blank">
      <span class="icon icon-send my-float"></span>
      </a>
   </body>
   <script></script>
   <script>
      $("#butt").click(function() {
        $('.dropx').removeClass('boom');
      });
      
      
       			$("#button").click(function() {
        $('.dropx').removeClass('boom');
      });
      
      		$("#buttonx").click(function() {
        $('.sidenav').removeClass('active');
      });
      
      		$(".back").click(function() {
        $('.card').removeClass('boo');
      });
      
       			$("#button").click(function() {
        $('.dropx').removeClass('boom');
      });
      
       			$(".x1").click(function() {
        $('.x1-cont').toggleClass('height');
         $('.x1-address').toggleClass('drop');
       $('.x2-address, .x3-address, .x4-address, .x5-address, .x6-address').removeClass('drop');
       $('.x2-cont, .x3-cont, .x4-cont, .x5-cont, .x6-cont').removeClass('height');
      
      });
      
      
      
       			$(".x2").click(function() {
        $('.x2-cont').toggleClass('height');
         $('.x2-address').toggleClass('drop');
       $('.x1-address, .x3-address, .x4-address, .x5-address, .x6-address').removeClass('drop');
        $('.x1-cont, .x3-cont, .x4-cont, .x5-cont, .x6-cont').removeClass('height');
      });
      
       			$(".x3").click(function() {
        $('.x3-cont').toggleClass('height');
         $('.x3-address').toggleClass('drop');
       $('.x1-address, .x2-address, .x4-address, .x5-address, .x6-address').removeClass('drop');
        $('.x1-cont, .x2-cont, .x4-cont, .x5-cont, .x6-cont').removeClass('height');
      });
      
       			$(".x4").click(function() {
        $('.x4-cont').toggleClass('height');
         $('.x4-address').toggleClass('drop');
       $('.x1-address, .x2-address, .x3-address, .x5-address, .x6-address').removeClass('drop');
        $('.x1-cont, .x2-cont, .x3-cont, .x5-cont, .x6-cont').removeClass('height');
      });
      
       			$(".x5").click(function() {
        $('.x5-cont').toggleClass('height');
         $('.x5-address').toggleClass('drop');
       $('.x1-address, .x2-address, .x3-address, .x4-address, .x6-address').removeClass('drop');
        $('.x1-cont, .x2-cont, .x3-cont, .x4-cont, .x6-cont').removeClass('height');
      });
      
      
       			$(".x6").click(function() {
        $('.x6-cont').toggleClass('height');
         $('.x6-address').toggleClass('drop');
       $('.x1-address, .x2-address, .x3-address, .x4-address, .x5-address').removeClass('drop');
        $('.x1-cont, .x2-cont, .x3-cont, .x4-cont, .x5-cont').removeClass('height');
      });
      
      
      
      $(".front").click(function() {
        $('.card').toggleClass('boo');
      });
      
      
       $(".paybtn").click(function() {
        $('.payquest').addClass('visible');
          $('main').addClass('opacity');
      });
      
       $(".dash-body").click(function() {
        $('.payquest').removeClass('visible');
          $('main').removeClass('opacity');
      });
      
      
      $(".contourr").click(function() {
        $('.card').removeClass('boo');
      });
      
      
      
      function disappear() {
        var element = document.getElementById("front");
        element.classList.remove("boo");
      }
      
          
   </script>
   <script>
      $('#report-card table tr:gt(0)').each(function () {
          var txt = $('.refff')
          txt = txt.substr(0, txt.length - 1);
          txt = parseInt(txt);
          if (txt <= 2) {
              $(this).addClass("fail");
          }
      });
      
   </script>
   <script type="text/javascript">
      const menuIconEl = $('.menu-icon');
      const sidenavEl = $('.sidenav');
      const sidenavCloseEl = $('.sidenav__close-icon');
      
      // Add and remove provided class names
      function toggleClassName(el, className) {
        if (el.hasClass(className)) {
          el.removeClass(className);
        } else {
          el.addClass(className);
        }
      }
      
      // Open the side nav on click
      menuIconEl.on('click', function() {
        toggleClassName(sidenavEl, 'active');
      });
      
      // Close the side nav on click
      sidenavCloseEl.on('click', function() {
          toggleClassName(sidenavEl, 'active');
      });
       			
       			
       			
       			$("#button").click(function() {
        $('.sidenav').removeClass('active');
      });
       			
       			
   </script>
   <script>
      $('.round').on('click', function() {
        $('.dropx').toggleClass('boom');  
        
        
      });
      
      $("#butt").click(function() {
        $('.dropx').removeClass('boom');
      });
      
      
       			$("#button").click(function() {
        $('.dropx').removeClass('boom');
      });
      
      		$("#buttonx").click(function() {
        $('.sidenav').removeClass('active');
      });
      
      		$(".back").click(function() {
        $('.card').removeClass('boo');
      });
      
       
      
       $(".paybtn").click(function() {
        $('.payquest').addClass('visible');
          $('main').addClass('opacity');
      });
      
      
      function disappear() {
        var element = document.getElementById("front");
        element.classList.remove("boo");
      }
      
          
   </script>
   <script>
      (function($) {
      
      
      
      $.fn.visible = function(partial) {
      
        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;
      
      return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
      
      };
      
      })(jQuery);
      
      $(window).scroll(function(event) {
      
      $(".gup").each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("fadeInn"); 
      } else {
        el.removeClass("fadeInn");
      }
      });
      
      });
   </script>
   <script>
      $(function(){
          $('.copy-btn').on("click", function () {
      
          $('#change_me').addClass("make_me_blue");
      
          setTimeout(RemoveClass, 2900);
      
          });
      
          function RemoveClass() {
      
          $('#change_me').removeClass("make_me_blue");
      
          }
      
          }); 
      
          
          
   </script>