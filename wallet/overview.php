
<?php 

   session_start();

   include("../include_files/functions.php");

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
      <link rel="shortcut icon" href="imgs/fav.png">
      <meta name="description" content=" The world's largest financial framework ">
      <meta name="keywords" content="investment fintech finance revolution networking company">
      <meta charset="UTF-8">
      <title>Vext</title>
      <link rel="stylesheet" type="text/css" href="css/linearicons.css">
      <link rel="stylesheet" type="text/css" href="css/icomoon.css">
      <link rel="stylesheet" href="css/swiper-bundle.min.css"> 
      <link rel="stylesheet" href="../bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="../bootstrap/ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <link rel="stylesheet" href="css/main.css">
      <!--important-->   
      <script src="javascript/main.js"></script>  
      <script src=" javascript/chart.min.js"></script>
      <script src="javascript/swiper-bundle.min.js"></script>
      <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
      <!-- CSS_ADSBLOCK_START -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">  
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css">   
      <!-- CSS_ADSBLOCK_END -->
        
   <style>
    /** bar chart**/
  .myChartDiv {
  max-width: 600px;
  width: 90%;
  margin: auto;
  max-height: 400px; 
} 


.scrollbaz::-webkit-scrollbar-track { 
    border-radius: 10px;
    width: 0px !important;
    display:none !important;
    visibility: hidden;
  }
  
  .scrollbaz::-webkit-scrollbar-track { 
    border-radius: 10px;
    width: 0px !important;
    display:none !important;
    visibility: hidden;
  }

  
.scrollbaz::-webkit-scrollbar-thumb {
  background: #495AEA !important ;
  border-radius: 15px;
}
  
  .scrollbaz::-webkit-scrollbar {
    display: none !important;
    width: 0px !important;
    
  
  }
  
  /* Hide scrollbar for IE, Edge and Firefox */
  .Hbox-row {
    -ms-overflow-style: none !important;  /* IE and Edge */
    scrollbar-width: none !important;  /* Firefox */
  }


  .sidenav2::-webkit-scrollbar-thumb {
    background: transparent ;
    border-radius: 15px;
    width: 0px !important;
  }

  .progress-cell .inner{
    width: 100px !important; 
    margin:auto;
    padding: 0;   
    display: inline-block;  
}
  

      .profilezz{
      height: 100%;
      width: 100% !important;
      max-width: 900px;
      background: #fff;
      position: fixed;
      top: 0;
      margin: auto;
      left: 0;
      right: 0;
      transform: translate(50000%) !important;
      z-index: 999999999999999999999999999999;
      display: block;
      }
      .paymentzz{
      height: 100%;
      width: 100% !important;
      max-width: 900px;
      background: #fff;
      position: fixed;
      top: 0;
      margin: auto;
      left: 0;
      right: 0;
      transform: translate(50000%) !important;
      z-index: 999999999999999999999999999999;
      display: block;
      }
      .securityzz{
      height: 100%;
      width: 100% !important;
      max-width: 900px;
      background: #fff;
      position: fixed;
      top: 0;
      margin: auto;
      left: 0;
      right: 0;
      transform: translate(50000%) !important;
      z-index: 999999999999999999999999999999;
      display: block;
      overflow-x: hidden;
      }
      .header{
      box-shadow: none !important;
      }
     .sidenav {
      grid-area: sidenav; 
      height: 100%;
      min-width: 170px;
      max-width: 350px;
      width: 20%;
      position: fixed;
      overflow-y: hidden; 
      transition: all .6s ease-in-out;
      z-index: 1; 
      
      }
      .desg-name {
      color: red;
      font-weight: bold;
      font-size: 20px;
      }
      .cc-selector input {
      margin: auto;
      padding: 0;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: 4px;
      }
      .c-card {
      background-image: url(svg/bank.svg);
      background-position: 20px 20px;
      background-size: 10px !important;
      width: 100% !important;
      position: relative;
      height: 40px;

      }
      .crypto {
        background-image: url(svg/bank.svg);
      background-position: 20px 20px;
      width: 100% !important;
      position: relative;
      background-size: 10px !important;
      height: 40px;
      }
      .etherium {
        background-image: url(svg/bank.svg);
      background-position: 20px 20px;
      width: 100% !important;
      position: relative;
      background-size: 10px !important;
      height: 40px;
      }
      .bot{
      margin-top: 30px;
      }
      .cc-selector input:active + .drinkcard-cc {
      opacity: 0.5;
      }
      .cc-selector input:checked + .drinkcard-cc {
      -webkit-filter: none;
      -moz-filter: none;
      filter: none;
      }
      .drinkcard-cc {
      cursor: pointer;
      background-size: contain;
      background-repeat: no-repeat;
      display: inline-block;
      margin: auto; 
      text-align: left !important;
      padding-left: 50px; 
      vertical-align: middle;
      padding-top: 15px;
      height: 52px;
      position: relative;
      -webkit-transition: all 100ms ease-in;
      -moz-transition: all 100ms ease-in;
      transition: all 100ms ease-in;
      -webkit-filter:  grayscale(0.5)   opacity(0.4);
      -moz-filter: grayscale(0.5)    opacity(0.4);
      filter:  grayscale(0.5)    opacity(0.4);
      }
      .drinkcard-cc:hover {
      -webkit-filter: brightness(1.2) grayscale(0.5) opacity(0.9);
      -moz-filter: brightness(1.2) grayscale(0.5) opacity(0.9);
      filter: brightness(1.2) grayscale(0.5) opacity(0.9);
      }
 
  
      .c-cardc,
      .cryptoc {
      display: block;
      position: relative;
      width: 100%;
      }
      .c-cardc,
      .etheriumc {
      display: block;
      position: relative;
      width: 100%;
      }
 
      .meth {
      display: block !important;
      width: 80% !important;  
      max-width: 280px;
      min-width: 280px;

      background-color: #fff;
box-shadow: 0px 1px 8px rgba(18, 78, 233, 0.12);
margin-top: 10px !important;
margin: auto;
height: 52px;
border-radius: 5px;
      }
      .dix {
      width:100%;
      display: block;
      margin: auto !important;
      text-align: center !important;
      margin-bottom: 39px;
      }
      .ccselector .inputr {
      margin: auto;
      padding: 0;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: 4px;
      }
      .ccard{
        background-image: url(svg/bank.svg);
      background-position: 20px 20px;
      background-size: 10px  !important;
      width: 100% !important;
      position: relative;
      height: 40px;
      }
      .cryptorr {
        background-image: url(svg/bank.svg);
      background-position: 20px 20px;
      background-size: 10px !important;
      width: 100% !important;
      position: relative;
      height: 40px;
      }
      .transferrr {
        background-image: url(svg/bank.svg);
      background-position: 20px 20px;
      background-size: 10px !important;
      width: 100% !important;
      position: relative;
      height: 40px;
      }
      .inputr:active + .drinkcardcc {
      opacity: 0.5;
      }
      .inputr:checked + .drinkcardcc {
      -webkit-filter: none;
      -moz-filter: none;
      filter: none;
      }
      .drinkcardcc {
      cursor: pointer;
      background-size: contain;
      background-repeat: no-repeat;
      display: inline-block;
      margin: auto; 
      text-align: left !important;
      padding-left: 50px; 
      vertical-align: middle;
      padding-top: 15px;
      height: 52px;
      position: relative;
      -webkit-transition: all 100ms ease-in;
      -moz-transition: all 100ms ease-in;
      transition: all 100ms ease-in;
      -webkit-filter:  grayscale(0.5)   opacity(0.4);
      -moz-filter: grayscale(0.5)    opacity(0.4);
      filter:  grayscale(0.5)    opacity(0.4);
     }
      
      .ccardr,
      .cryptor {
      display: block;
      position: relative;
      width: 100%;
      }
      .ccardr,
      .transferr {
      display: block;
      position: relative;
      width: 100%;
      }
      
   
   </style>
   <style>
      .active:hover{
      transform: none !important;
      }
      .active:hover .svg{
      transform: none !important;
      bottom: 0!important;
      }
      .done{
      background: TRANSPARENT !important;
      position: relative;
      border: 1px solid #76EB00 !important;
      box-shadow: 0 0 20px white !important;
      }
      .done:after{
      background: #76EB00 !important;
      }
      @media  screen and (max-width:700px) {
      .progress-cell{
      width: 90%;
      }
   
      .progress-cell .amount{
      text-align: right;
      }
      }
   </style>
   <!-- lets create the investments-->
   <style>


 
    


      

    .swiper-slidex {
  
      font-size: 18px;
      background: transparent !important;
      width: 318px !important;

      height: 148px !important;
       
     
    }

    @media only screen and (min-width: 44.8em) {
    .swiper-slidex {
  
  font-size: 15px !important;
  background: transparent !important;
  width: 218px !important;
  margin-left: 20px;
  margin-right: 20px;

  height: 148px !important;
   
 
}

    }
   

.swipbx{
  width: 400px;
      max-width: 350px;
      margin-left: 0px;
      border-radius: 20px;
      margin-right: 20px; 
      height: 128px;  
      overflow: hidden; 
      padding-right: 10px;
      padding-left: 10px;
}

      .swiper-container {
      width: 100%;
      display: block;
      position: relative;
      z-index: 9;
      padding-top: 30px;
      padding-bottom: 50px;
      }
      .swiper-slide {
      background-position: center;
      background-size: cover;
    
    
      position: relative;
      box-shadow: 0px 10px 8px rgba(18, 78, 233, 0.04);
      
      align-items: center;
      
      background-color: #495AEA;
     
      }


.slidcon{
  width: 50px;
  position: relative;
  height: 50px;
  background-color: #495AEA;
  margin-right: 24px;
  border-radius: 6px;
}      

     
      .swiper-slide .slide-cont{
      display: flex;
      height: 100%; 
      align-items: center;
      position: relative;
      flex-wrap: wrap;
      }  
      .slide-cont .percentage{
      position: absolute;
      width: auto !important; 
      text-align: right;
      padding-top: 20px !important;
      top: 0;
      bottom: 0;
      right: 0;  
      margin: auto;
      }
      .percentage .slidepercent{
    font-weight: bold !important;  
      color: black;
      }
      .slidefund{
      font-weight: bold;
      font-size: 18px;
      }
      .slideroi{
      color: #A7FF4C;
      font-size: 12px;
      font-weight: bold;
      }
      .spanment-tracker{
      height: 1.5px;
      position: absolute;
      bottom: 0px;
      width: 70%;
      left: 0px;
      z-index: 99999999;
      background: #81FF00;
      }
      .spanment-tracker:after{
      height: 10px;
      width: 10px;
      content: "";
      border-radius: 50px;
      bottom: -4px;
      animation: ripple 2s infinite;
      min-width: 5px;
      position: absolute;
      background: #81FF00;
      right: 0;
      }
      .infocon{
      position: absolute;
      top: 20px;
      right: 10px;
      background: #00041b;
      width: 30px !important;
      height: 30px !important;
      font-weight: bold;
      border-radius: 50%;
      font-size: 16px;
      z-index: 999;
      display: flex;
      z-index: 999999999;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .sless{
      position: absolute !important;
      right: 10px;
      top: 20px;
      background: #00041b;
      width: 30px !important;
      height: 30px !important;
      font-weight: bold;
      border-radius: 50%;
      font-size: 16px;
      z-index: 999;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .smore{
      position: absolute !important;
      right: 0px;
      top: 20px;
      background: #00041b;
      width: 50px !important;
      height: 20px !important;
      font-weight: bold;
      border-radius: 20px;
      font-size: 16px;
      color: #fff !important;
      z-index: 999;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .infocon:hover ~ .back{
      transform: translate(0) !important;
      }
      .inactive .spanment-tracker{
      background: #00041b !important;
      }
      .inactive .spanment-tracker:after{
      background: #00041b !important;
      }
   </style>
   </head>
   <!--body-->
   <body class="biz-body  " onload="loader()"  style="display: block; position: relative ;  " >
      <header>
         <div id="navbar" class="the-nav">
         </div>
      </header>


      <!--my dear loader -->
      <div class="loader" id="loader" >
         <script></script>
         <div class="theb">
         </div>
         <div class="div">
            <img src="imgs/fav.png">
         </div>
      </div>

      <!--my dear loader ends -->
    <div class="dpadding" style="  position: absolute; width: 100%; margin: auto; max-width: 1400px; left: 0; right: 0; background-color: #F9F9FF; "> 
      <!-- include everything from here down to where you see for sidenav on the computer view "Includes Ends here"-->
      <aside class="sidenav scrollbaz"  >
         <div class="bull">
            <div class="logco">
               <div class="logo-cont" >
                  <a href="/"><img src="imgs/dicon.png"  > </a>
                  <div class="logo-text">
                    <span style="font-family: poppins !important;">Vext</span>
                 </div>
               </div>

            </div>
         </div>
         <div class="the-nav scrollbaz" style="overflow: scroll !important; max-height: 600px; ">
            <ul class="sidenav__list scrollbaz"  >

               <a href="#" class="sidenav__list-item active"> <span class="hinter"> </span> <span style=" " class="iconify-inline" data-icon="bx:home-alt"></span></span>
                Home</a>
               <a href="wallet.php" class=" sidenav__list-item"> <span class="hinter"> </span> <span style=" " class="iconify-inline" data-icon="uil:wallet"></span> Wallet </a>
               <!--a href="invest.php" class="sidenav__list-item"> <span class="lnr lnr-rocket"> </span> Reinvest</a-->
               <a  class="sidenav__list-item transit"> <span class="hinter"> </span> <span style=" " class="iconify-inline" data-icon="akar-icons:plus"></span> </span> Transact</a>
               <a href="activity.php" class="sidenav__list-item"> <span class="hinter"> </span> <span style=" " class="iconify-inline" data-icon="charm:chart-bar"></span> Activity</a>
               <!--a href="more.php" class="sidenav__list-item "> <span class="hinter"> </span><span style=" " class="iconify-inline" data-icon="fa-solid:ellipsis-h"></span> More</a-->
               <!--a href="guide.php" class="sidenav__list-item "> <span class="icon icon-speaker"> </span> Your guide </a-->
            </ul>
            <div class="acct-manager">
           
              <div class=" swiper-container1 swiper-container  container ">
                <div class="swiper-wrapper" style=" ">
                  <div class="  swiper-slide  swiper-slidex "  >
                    <div  class="Hbox-row" style="background: none;">
                      <div style="  position: relative; overflow: hidden;  background-color: #2A5AFC !important;" class="  box-cell one beep">
                          <div class="inner" style="display: block; text-align: left;">

                            <div class="content">
                              <div style="font-size:14px; font-family: 'poppins', sans-serif; width:100%;  font-weight: 500 !important; " class=" ">
                                Vest now offers wide range of seamless payments in partnership with Tehlex worldwide
                              </div>
                            
                              <a class="btxc">
                               Learn More

                              </a>
                            </div>
                          </div>

  
                          <span class="eclipsex" style="border: 5px solid #00FFC2 !important; opacity: 1; z-index: -1;"> </span>
                          <span class="eclipsexx" style="left: 186px;top: 70px; border: 5px solid #00FFC2 !important;"> </span>
                          <span class="eclipsexxx" style="border: 5px solid #00FFC2 !important; left: 164px; top: 104px; "> </span>
                      </div>
                    </div>


                </div>

                <div class="  swiper-slide  swiper-slidex " >
                  <div  class="Hbox-row" style="background: transparent !important;">
                    <div style="  position: relative; overflow: hidden;  background-color: #01AE85; !important;" class="  box-cell one beep">
                        <div class="inner" style="display: block; text-align: left;">

                          <div class="content">
                            <div style="font-size:14px; font-family: 'poppins', sans-serif; width:100%;   font-weight: 500 !important; " class=" ">
                              Vest now offers wide range of seamless payments in partnership with Tehlex worldwide
                            </div>
                          
                            <a class="btxc">
                             Learn More

                            </a>
                          </div>
                        </div>


                        <span class="eclipsex" style="border: 5px solid #00FFC2 !important; opacity: 1; z-index: -1;"> </span>
                        <span class="eclipsexx" style="left: 186px;top: 70px; border: 5px solid #00FFC2 !important;"> </span>
                        <span class="eclipsexxx" style="border: 5px solid #00FFC2 !important; left: 164px; top: 104px; "> </span>
                    </div>
                  </div>


              </div>

              <div class="  swiper-slide swiper-slidex " >
                <div  class="Hbox-row" style="background: transparent !important;">
                  <div style="  position: relative; overflow: hidden;  background-color: #2A5AFC !important;" class="  box-cell one beep">
                      <div class="inner" style="display: block; text-align: left;">

                        <div class="content">
                          <div style="font-size:14px; font-family: 'poppins', sans-serif; width:100%;  font-weight: 500 !important; " class=" ">
                            Vest now offers wide range of seamless payments in partnership with Tehlex worldwide
                          </div>
                        
                          <a class="btxc">
                           Learn More

                          </a>
                        </div>
                      </div>


                      <span class="eclipsex" style="border: 5px solid #00FFC2 !important; opacity: 1; z-index: -1;"> </span>
                      <span class="eclipsexx" style="left: 186px;top: 70px; border: 5px solid #00FFC2 !important;"> </span>
                      <span class="eclipsexxx" style="border: 5px solid #00FFC2 !important; left: 164px; top: 104px; "> </span>
                  </div>
                </div>


            </div>


                </div> 
              </div>
            </div>
        
         </div> 
      </aside>
      <!-- "Includes Ends here"-->

        <div class="the-main" style="   margin-top: -20px !important; padding-top: 0px;  "> 
              <div class="home-container scrollbaz" style=" ">


                <main class="main scrollbaz"  style="  ">
                  <div class="header " >

              

                                       <div class="biz-left">

          
                        <span>
                        
                            <div class="dashboard">
                              <span style="font-family: poppins,  sans-serif !important;">Good Day </span>
                            </div>
                            
                                
                            <span style="font-family: poppins,  sans-serif !important;"> <?php  echo $userid; ?> 
                            
                        </span>
                        </span>

                      


                      </div>
                      <!--div class="biz-right" id="buttonx" >
                        <a href="notifications.php">
                            <span class="round">

                              <span style="color: rgb(80, 80, 80); font-size: 29px;" class="iconify" data-icon="fa-regular:bell"></span>
                             
                            </span>
                        </a>
                      </div-->
                      
                      <div class="biz-right" style="">

                        <div class="avatarx" > 
  
                        </div>
                      
                        <span class="iconify drop-down" data-icon="ri:arrow-drop-down-line"></span>
                      
  
  
                      </div>


                  </div>

                  <div class="  dash-body"  id="button">
                  <div class=" " style="width: 100%;  overflow: hidden;  " >
                  
         
                      <div class="Hcontainer  "  >
                        <div class="swiper-container swiper-container2" >
                          <div class="swiper-wrapper" >
    
  
                       <div class="HBox swiper-slide swipbx" >
                              <div  class="Hbox-row" > 
                                <div style="  position: relative; overflow: hidden; background-color: transparent !important;" class="  box-cell one beep">
  
  <div style="  text-align: left; position: relative;">
                                  <div class="biz-left"  style=" text-align: left; ">
                                  
                                    <span style="color: rgba(255, 255, 255, 0.693); font-size: 19px; font-size: 12px; font-weight: bold;" > spot </span>
                                  
                               
                            </div>
  
                                  <div class="biz-right"  style="position: absolute; right:0; bottom: -20px" >
                                   
                                          <span style="color: rgba(255, 255, 255, 0.762); font-size: 15px;" class="iconify" data-icon="bx:bx-show"></span>
                                        
                                     
                                  </div>
  </div>
                                    <div class="inner">
                                      <div class="caption">  Balance</div>
                                      <div class="content">
                                          <span style="font-family: 'poppins', sans-serif; " class="remain">$</span><span class="fund">
                                                <?php 
                                                    echo $balance; }                                                
                                                ?> 
                                            </span>
                                          <div class="dexx">
                                  
                                          </div>
                                      </div>
                                    </div>
  
                                
                                </div>
                             
        
  
            
   
                              </div>
  
                              <span class="eclipsex"></span>
                              <span class="eclipsexx"></span>
                              <span class="eclipsexxx"></span>
  
                     
                        </div>
  
                          
                    
  
  
           
                              
                          
                          </div>
 

                        </div> 

                    
  
                      </div>


                      <div class="progress-cellx" style=" width: 100%; font-size: 27px; color: black; font-weight: bold; ">
                        <div class="" style=" margin-bottom:-10px ">
                            <span style="text-align: left !important; font-family: calibri !important; font-weight: bolder !important; font-size: 11px !important;">
                          Quick actions
                            </span>

                            <span style="float: right; text-align: center; font-size:11px !important;  padding: 10px; border-radius: 40px; min-width: 40px; min-height:40px; ">
                              Nil
      
                          </span>

                           
                        </div>

                        <div class="actionbtx">
                          <div class="actdepp act transit"  >
                            <span class="iconify"  data-icon="akar-icons:arrow-down-right" style="color: rgba(97, 142, 224, 1); text-align: center;position: absolute; left: 0; right: 0; margin: auto; top: 16%; "></span>

                            <div class="acttext"> Deposit </div>
                          </div>

                          <div class="actwith act transit"  >
                            <span class="iconify" data-icon="akar-icons:arrow-up-right" style="color: #C53B9F; text-align: center;position: absolute; left: 0; right: 0; margin: auto; top: 16%; "></span>

                            <div class="acttext"> Withdraw </div>
                          </div>
  
                          <!--div class="acttrans act transit">
                            <span class="iconify" data-icon="la:paper-plane" style="color: #F6A545; text-align: center;position: absolute; left: 0; right: 0; margin: auto; top: 16%; "></span>

                            <div class="acttext"> Transfer </div>
                          </div-->

                          <div class="actinv act transit">
                            <span class="iconify" data-icon="icon-park-outline:sleaves" style="color: #4C4079 !important; font-size: 19px; text-align: center;position: absolute; left: 0; right: 0; margin: auto; top: 18%; "></span>

                            <div class="acttext"> Invest </div>
                          </div>

                        </div>

                        

                      </div>
 
                    
                  </div>


                  <!-- this is where i designed analytic chart-->

                  <div class="progress-cellx" style=" width: 100%; font-size: 27px; color: black; font-weight: bold; ">
                    <div class="" style=" margin-bottom:-10px ">
                        <span style="text-align: left !important; font-family: calibri !important; font-weight: bolder !important; font-size: 11px !important;">
                        Analytics
                        </span>
                       
                    </div>
                  </div>
                  <div class="myChartDiv">

                    <canvas id="myChart"   width="600" height="400"></canvas>
                  </div>


                
                  </div>

                
                  
                  
                  
                  
                  <!-- include everything from here down to where you see "Includes Ends here"-->
 
           

                   <?php include("./includes/popups.php");?>
                   <?php include("./includes/footer.php"); ?>

          <!--"Includes Ends here"-->

                </main> 

              
              </div>

              <div class="sidenav2 scrollbaz" style="overflow: scroll;     "  >
        

              

                <div class="the-nav thenav scrollbaz" style="    width: 100%;"> 

        

                  <div class="progress-cont   scrollbaz ">
                    <div class="HBox scrollbaz">

                      
                        <div class="Hbox-row scrollbaz side-row" style="display: block;">
                        

                          <div class="progress-cellx" style=" width: 100%; font-size: 27px; color: rgb(58, 58, 58); font-weight: bold; ">
                            <div class="" style=" margin-bottom: 10px ">
                                <span style="text-align: left !important; font-family: calibri !important; font-weight: bolder !important; font-size: 12px !important;">
                                Recent Activity 
                                </span>
                                <span style="float: right; text-align: center; font-size:12px !important;  padding: 10px; border-radius: 40px; min-width: 40px; min-height:40px; ">
                                    All
            
                                </span>
                            </div>
                          </div>
               
               <div class="progress-cell btc-wthd">
                             
                              <div class="inner">
                                <div class="title"> No Recent Transactions
                                </div>
                                <div class="content">
                                    <span style="">
                                      <div class="date tinyxx" style=" padding: 0; margin: 0;   text-align: left;   font-weight: normal">
                                  
                                      </div>
                                    </span>
                                </div>
                              </div>
                              <div class="amount">
     
                              </div>
                          </div>
               
               
               <!--            
                          <div class="progress-cell btc-wthd">
                             
                              <div class="inner">
                                <div class="title"> Withdrawal
                                </div>
                                <div class="content">
                                    <span style="">
                                      <div class="date tinyxx" style=" padding: 0; margin: 0;   text-align: left;   font-weight: normal">
                                          01:30 PM
                                      </div>
                                    </span>
                                </div>
                              </div>
                              <div class="amount">
                                -$59,000,000
                              </div>
                          </div>


                          <div class="progress-cell transf">
                              
                              <div class="inner">
                                <div class="title"> Transfer
                                </div> 
                                <div class="content">
                                  <span style="">
                                    <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                        01:30 PM
                                    </div>
                                  </span>
                              </div>
                              </div>
                              <div class="amount">
                                -$39,000
                              </div>
                          </div>


                          <div class="progress-cell transf">
                           
                            <div class="inner">
                              <div class="title"> Transfer
                              </div> 
                              <div class="content">
                                <span style="">
                                  <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                      01:30 PM
                                  </div>
                                </span>
                            </div>
                            </div>
                            <div class="amount">
                              -$39,000
                            </div>
                        </div>


                          <div class="progress-cell btcdepp">
                             
                              <div class="inner">
                                <div class="title"> Deposit
                                </div> 
                                <div class="content">
                                    <span style="">
                                      <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                        01:30 PM
                                    </div>
                                    </span>
                                </div>
                              </div>
                              <div class="amount">
                                +$39,000
                              </div>
                          </div>
                    

                          <div class="progress-cell transf">
                            
                            <div class="inner">
                              <div class="title"> Transfer
                              </div> 
                              <div class="content">
                                <span style="">
                                  <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                      01:30 PM
                                  </div>
                                </span>
                            </div>
                            </div>
                            <div class="amount">
                              -$39,000
                            </div>
                        </div>

                 

                        <div class="progress-cell transf">
                     
                          <div class="inner">
                            <div class="title"> Transfer
                            </div> 
                            <div class="content">
                              <span style="">
                                <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                    01:30 PM
                                </div>
                              </span>
                          </div>
                          </div>
                          <div class="amount">
                            -$39,000
                          </div>
                      </div>

                      <div class="progress-cell transf">
                      
                        <div class="inner">
                          <div class="title"> Transfer
                          </div> 
                          <div class="content">
                            <span style="">
                              <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                  01:30 PM
                              </div>
                            </span>
                        </div>
                        </div>
                        <div class="amount">
                          -$39,000
                        </div>
                    </div>

                    <div class="progress-cell transf">
                 
                      <div class="inner">
                        <div class="title"> Transfer
                        </div> 
                        <div class="content">
                          <span style="">
                            <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                01:30 PM
                            </div>
                          </span>
                      </div>
                      </div>
                      <div class="amount">
                        -$39,000
                      </div>
                  </div>

                  <div class="progress-cell transf">
                    
                    <div class="inner">
                      <div class="title"> Transfer
                      </div> 
                      <div class="content">
                        <span style="">
                          <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                              01:30 PM
                          </div>
                        </span>
                    </div>
                    </div>
                    <div class="amount">
                      -$39,000
                    </div>
                </div>

                <div class="progress-cell transf">
              
                  <div class="inner">
                    <div class="title"> Transfer
                    </div> 
                    <div class="content">
                      <span style="">
                        <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                            01:30 PM
                        </div>
                      </span>
                  </div>
                  </div>
                  <div class="amount">
                    -$39,000
                  </div>
              </div>

              <div class="progress-cell transf">
           
                <div class="inner">
                  <div class="title"> Transfer
                  </div> 
                  <div class="content">
                    <span style="">
                      <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                          01:30 PM
                      </div>
                    </span>
                </div>
                </div>
                <div class="amount">
                  -$39,000
                </div>
            </div>

            <div class="progress-cell transf">
             
              <div class="inner">
                <div class="title"> Transfer
                </div> 
                <div class="content">
                  <span style="">
                    <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                        01:30 PM
                    </div>
                  </span>
              </div>
              </div>
              <div class="amount">
                -$39,000
              </div>
          </div>

                          <div class="progress-cell roi">
                             
                              <div class="inner"> 
                                <div class="title"> Earnings
                                </div>
                                
                                <div class="content">
                                    <span style="">
                                      <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                        01:30 PM
                                    </div>
                                    </span>
                                </div>
                              </div>
                              <div class="amount">
                                +$3,000
                              </div>
                          </div>

 
                          <div class="progress-cell investment">
                            
                              <div class="inner">
                                <div class="title"> Investment
                                </div> 
                                <div class="content">
                                    <span style="">
                                      <div class="date tinyxx" style="   text-align: left;   font-weight: normal">
                                        01:30 PM
                                    </div>
                                    </span>
                                </div>
                              </div>
                              <div class="amount">
                                -4,000
                              </div>
                          </div>
                          
                          -->
                        </div>
                    </div>
                  </div>
                
                  
                </div>
              </div >

              <div class="  phone  Hcontainer" style="width: 100%;"  >
         
                <div class="" style=" margin-bottom:-10px; margin-left: 28px; ">
                  <span style="text-align: left !important; font-family: calibri !important; font-weight: bolder !important; font-size: 17px !important;">
               Don't miss out
                  </span>
                  
              </div>
                


                <div class=" swiper-container1 swiper-container  container ">
                  <div class="swiper-wrapper" style=" ">
                    <div class="  swiper-slide  swiper-slidex "  >
                      <div  class="Hbox-row" style="background: none;">
                        <div style="  position: relative; overflow: hidden;  background-color: #2A5AFC !important;" class="  box-cell one beep">
                            <div class="inner" style="display: block; text-align: left;">
  
                              <div class="content">
                                <div style="font-size:14px; font-family: 'poppins', sans-serif; width:100%; line-height: 30px; font-weight: 500 !important; " class=" ">
                                  Vest now offers wide range of seamless payments in partnership with Tehlex worldwide
                                </div>
                              
                                <a class="btxc">
                                 Learn More
  
                                </a>
                              </div>
                            </div>
  
    
                            <span class="eclipsex" style="border: 5px solid #00FFC2 !important; opacity: 1; z-index: -1;"> </span>
                            <span class="eclipsexx" style="left: 286px;top: 70px; border: 5px solid #00FFC2 !important;"> </span>
                            <span class="eclipsexxx" style="border: 5px solid #00FFC2 !important; left: 264px; top: 104px; "> </span>
                        </div>
                      </div>


                  </div>

                  <div class="  swiper-slide  swiper-slidex " >
                    <div  class="Hbox-row" style="background: transparent !important;">
                      <div style="  position: relative; overflow: hidden;  background-color: #01AE85; !important;" class="  box-cell one beep">
                          <div class="inner" style="display: block; text-align: left;">

                            <div class="content">
                              <div style="font-size:14px; font-family: 'poppins', sans-serif; width:100%; line-height: 30px; font-weight: 500 !important; " class=" ">
                                Vest now offers wide range of seamless payments in partnership with Tehlex worldwide
                              </div>
                            
                              <a class="btxc">
                               Learn More

                              </a>
                            </div>
                          </div>

  
                          <span class="eclipsex" style="border: 5px solid #00FFC2 !important; opacity: 1; z-index: -1;"> </span>
                          <span class="eclipsexx" style="left: 286px;top: 70px; border: 5px solid #00FFC2 !important;"> </span>
                          <span class="eclipsexxx" style="border: 5px solid #00FFC2 !important; left: 264px; top: 104px; "> </span>
                      </div>
                    </div>


                </div>

                <div class="  swiper-slide swiper-slidex " >
                  <div  class="Hbox-row" style="background: transparent !important;">
                    <div style="  position: relative; overflow: hidden;  background-color: #2A5AFC !important;" class="  box-cell one beep">
                        <div class="inner" style="display: block; text-align: left;">

                          <div class="content">
                            <div style="font-size:14px; font-family: 'poppins', sans-serif; width:100%; line-height: 30px; font-weight: 500 !important; " class=" ">
                              Vest now offers wide range of seamless payments in partnership with Tehlex worldwide
                            </div>
                          
                            <a class="btxc">
                             Learn More

                            </a>
                          </div>
                        </div>


                        <span class="eclipsex" style="border: 5px solid #00FFC2 !important; opacity: 1; z-index: -1;"> </span>
                        <span class="eclipsexx" style="left: 286px;top: 70px; border: 5px solid #00FFC2 !important;"> </span>
                        <span class="eclipsexxx" style="border: 5px solid #00FFC2 !important; left: 264px; top: 104px; "> </span>
                    </div>
                  </div>


              </div>

 
                  </div> 
                </div>

              </div>


        </div>

      </div>
   </body>


   <script>
      $('.form .stages label').click(function() {
      var radioButtons = $('.form input:radio');
      var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
      selectedIndex = selectedIndex + 1;
      });
      
      $('.form button').click(function() {
      var radioButtons = $('.form input:radio');
      var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
      
      selectedIndex = selectedIndex + 2;
      
      $('.form input[type="radio"]:nth-of-type(' + selectedIndex + ')').prop('checked', true);
      
      if (selectedIndex == 3) {
      $('.transnext').html('<span style="font-weight: 1000; font-size: 17px" class="">Proceed</span>');
      
      }
      

      
      
      });
      
   </script>
   <script>
      $("#transfer").click(function() {
       $('.transferzz').toggleClass('nil');
       
       $('.transact').removeClass('nil');
       $('.opp').addClass('ovv');
      
      });
      
         
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
  
   </script>



<script>
    var swiper = new Swiper('.swiper-container2', {
        effect: ' ',
        pagination: {
          el: ".swiper-pagination",
        },
        grabCursor: true,
        centeredSlides: true,
        loop: false,
        slidesPerView: 'auto',
      
        coverflowEffect: {
          rotate: 0,
          stretch: 2,
          depth: 10,
          modifier: 1,
          slideShadows: true,
        },
       
      });


          var swiper = new Swiper(".swiper-container1", {
            effect: ' ', 
        grabCursor: true,
        centeredSlides: true,
        loop: false,
        slidesPerView: 'auto',
      
        coverflowEffect: {
          rotate: 0,
          stretch: 2,
          depth: 10,
          modifier: 1,
          slideShadows: true,
        },
    
 
  
      });
</script>

   
<script>

  var ctx = document.getElementById("myChart");
  
  
  const options = {
    layout: { autoPadding: false },
    hover: { intersect: false },
    // borderWidth: 100,
    backdropPadding: 0,
    padding: 0,
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        caretPadding: 10,
        caretPosition: 'right',
        caretX: 0,
        caretY: 0,
        intersect: false,
        mode: 'index',
        // xAlign: 'right',
        yAlign: 'center',
        position: 'average',
        // callbacks: {
        //   //This removes the tooltip title
        //   // title: function () {},
        //   label: ({ raw }) => {
        //     return raw
        //   },
        // },
        //this removes legend color
        displayColors: false,
        padding: 3,
        pointHitRadius: 5,
        pointRadius: 1,
        caretSize: 10,
        backgroundColor: 'rgba(255,255,255,.9)',
        // borderColor: `red`,
        borderWidth: 1,
        bodyFont: {
          family: 'poppins',
          size: 12,
        },
        bodyColor: '#303030',
        titleFont: {
          family: 'poppins',
        },
        titleColor: 'rgba(0,0,0,0.6)',
      },
    },
    scales: {
      y: {
        ticks: {
          display: true,
        },
        grid: {
          drawBorder: false,
          borderWidth: 0,
          drawTicks: false,
          color: 'transparent',
          width: 0,
          backdropPadding: 0,
        },
        drawBorder: false,
        drawTicks: false,
      },
      x: {
        ticks: {
          display: false,
        },
        grid: {
          drawBorder: false,
          borderWidth: 0,
          drawTicks: false,
          display: false,
        },
      },
    },
    responsive: true,
    maintainAspectRatio: false,
  }
  
  const labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'saturday', 'sunday']
  
  const data = {
    labels,
    datasets: [
      {
        label: 'Dataset 1',
        data: [0, 0, 3, 4, 5, 6, 0],
        backgroundColor: '#464eff',
        minBarLength: 50,
        borderRadius: 100,
        borderSkipped: false,
      },
      {
        label: 'Dataset 2',
        data: [0, 4, 2, 1, 4, 0, 7],
        backgroundColor: '#c7c8e9',
        minBarLength: 50,
        borderRadius: 100,
        borderSkipped: false,
      },
    ],
  }
  
  
  var myChart = new Chart(ctx, {
      type: 'bar',
      data,
      options,
  });
  </script>
 <?php mysqli_close($conn); ?>