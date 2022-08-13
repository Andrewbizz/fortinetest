
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
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="css/main.css">
      <!--important-->   
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
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
      background-position: center;
      }
      .crypto {
      background-image: url(svg/usdt.svg);
      background-size: cover;
      background-position: center;
      }
      .etherium {
      background-image: url(svg/eth.svg);
      background-size: cover;
      background-position: center;
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
      width: 50px;
      height: 40px;
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
      .cryptoc:after {
      position: absolute;
      top: -32px;
      content: "Crypto";
      width: 60%;
      height: 10px;
      display: block;
      text-transform: uppercase;
      text-align: center; 
      right: 0;
      left: 0px;
      transform: translatey(40px);
      color: black;
      margin: auto;
      font-weight: bold !important;
      font-size: 10px;
      z-index: 1;
      }
      .etheriumc:after {
      position: absolute;
      top: -32px;
      content: "etherium";
      width: 60%;
      height: 10px;
      display: block;
      text-transform: uppercase;
      text-align: center; 
      right: 0;
      left: 0px;
      transform: translatey(40px);
      color: black;
      margin: auto;
      font-weight: bold;
      font-size: 10px;
      z-index: 1;
      }
      .c-cardc,
      .cryptoc {
      display: block;
      position: relative;
      width: 80px;
      }
      .c-cardc,
      .etheriumc {
      display: block;
      position: relative;
      width: 80px;
      }
      .c-cardc:after {
      position: absolute;
      top: -32px;
      content: "Bank";
      width: 60%;
      height: 10px;
      display: block;
      text-transform: uppercase;
      text-align: center; 
      right: 0;
      left: 0px;
      transform: translatey(40px);
      color: black;
      margin: auto;
      font-weight: bold;
      font-size: 10px;
      z-index: 1;
      }
      .meth {
      display: inline-block;
      width: 80px;
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
      background-position: center;
      }
      .cryptorr {
      background-image: url(svg/usdt.svg);
      background-size: cover;
      background-position: center;
      }
      .etheriumrr {
      background-image: url(svg/eth.svg);
      background-size: cover;
      background-position: center;
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
      width: 50px;
      height: 40px;
      -webkit-transition: all 100ms ease-in;
      -moz-transition: all 100ms ease-in;
      transition: all 100ms ease-in;
      -webkit-filter:  grayscale(0.5)   opacity(0.4);
      -moz-filter: grayscale(0.5)    opacity(0.4);
      filter:  grayscale(0.5)    opacity(0.4);
      }
      .drinkcardcc:hover {
      -webkit-filter: brightness(1.2) grayscale(0.5) opacity(0.9);
      -moz-filter: brightness(1.2) grayscale(0.5) opacity(0.9);
      filter: brightness(1.2) grayscale(0.5) opacity(0.9);
      }
      .cryptor:after {
      position: absolute;
      top: -32px;
      content: "Crypto";
      width: 60%;
      height: 10px;
      display: block;
      text-transform: uppercase;
      text-align: center; 
      right: 0;
      left: 0px;
      transform: translatey(40px);
      color: black;
      margin: auto;
      font-weight: bold !important;
      font-size: 10px;
      z-index: 1;
      }
      .etheriumr:after {
      position: absolute;
      top: -32px;
      content: "etherium";
      width: 60%;
      height: 10px;
      display: block;
      text-transform: uppercase;
      text-align: center; 
      right: 0;
      left: 0px;
      transform: translatey(40px);
      color: black;
      margin: auto;
      font-weight: bold;
      font-size: 10px;
      z-index: 1;
      }
      .ccardr,
      .cryptor {
      display: block;
      position: relative;
      width: 80px;
      }
      .ccardr,
      .etheriumr {
      display: block;
      position: relative;
      width: 80px;
      }
      .ccardr:after {
      position: absolute;
      top: -32px;
      content: "Card";
      width: 60%;
      height: 10px;
      display: block;
      text-transform: uppercase;
      text-align: center; 
      right: 0;
      left: 0px;
      transform: translatey(40px);
      color: black;
      margin: auto;
      font-weight: bold;
      font-size: 10px;
      z-index: 1;
      }
      .meth {
      display: inline-block;
      width: 80px;
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
      <?php include("./includes/aside.php"); ?>
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
                            <span style="font-family: poppins,  sans-serif !important;">Vincent  </span>
                        </span>

                      


                      </div>
                      <!--div class="biz-right" id="buttonx" >
                        <a href="notifications.html">
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
                                          <span style="font-family: 'poppins', sans-serif; " class="remain">$</span><span class="fund">450,000</span>
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
                                        <span style="font-family: 'poppins', sans-serif; " class="remain">$</span><span class="fund">450,000</span>
                                        <div class="dexx">
                                          <!--div class="tiny"> 0 active investment </div>
                                          <div class="">
                                              <div class="tiny" style="color:#81FF00">
                                                net worth
                                              </div>
                                              <div class="dexx-funds">
                                                $220,000
                                              </div>
                                          </div-->
                                        </div>
                                    </div>
                                  </div>
  
                                  <!--div class="phonex">
                                  <div class="rightx">
                                    <span style="font-size: 20px !important;"  class="iconify-inline" data-icon="feather:download"></span>
                                  </div>
                                  <div class="left">
                                    <span style="font-size: 20px !important;" class="iconify-inline"  data-icon="feather:upload"></span>
                                  </div>
                                </div-->
                              </div>
                           
      
  
          
  
                            </div>
  
                            <span class="eclipsex"></span>
                            <span class="eclipsexx"></span>
                            <span class="eclipsexxx"></span>

  
                   
                        </div>
  
  
                        
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
                                      <span style="font-family: 'poppins', sans-serif; " class="remain">$</span><span class="fund">450,000</span>
                                      <div class="dexx">
                                        <!--div class="tiny"> 0 active investment </div>
                                        <div class="">
                                            <div class="tiny" style="color:#81FF00">
                                              net worth
                                            </div>
                                            <div class="dexx-funds">
                                              $220,000
                                            </div>
                                        </div-->
                                      </div>
                                  </div>
                                </div>
  
                                <!--div class="phonex">
                                <div class="rightx">
                                  <span style="font-size: 20px !important;"  class="iconify-inline" data-icon="feather:download"></span>
                                </div>
                                <div class="left">
                                  <span style="font-size: 20px !important;" class="iconify-inline"  data-icon="feather:upload"></span>
                                </div>
                              </div-->
                            </div>
                         
    
  
        
  
                          </div>
  
                          <span class="eclipsex"></span>
                          <span class="eclipsexx"></span>
                          <span class="eclipsexxx"></span>

                 
                      </div>
  
  
           
                              
                          
                          </div>

                        <div class="swiper-pagination"></div>

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
                  <div class="" style="   color: black;    !important">

               
  

            
                    <div class="tabs">
                        <nav class="nav js-nav">
                            <ul class="nav__list tabs-nav">
                               <li class="nav__item">
                                  <a href="#tab-1" class="nav__link nav__link_active" data-transform="0"> Analysis </a>
                               </li>
                               <li class="nav__item">
                                  <a  href="#tab-2" class="nav__link" data-transform="100">Flow</a>
                               </li>
                              
                            </ul>
                            <div class="nav__slider">
                               <div class="nav__slider-rect"></div>
                            </div>
                         </nav>
                        <div class="tabs-stage">
                          <div id="tab-1">
                            <canvas id="myChart" width="400" height="400"></canvas>
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
                          </div>
        
        
                          <div id="tab-2" style="   max-height: 400px;" >
                            <canvas id="myChartg" class="myChartDiv" width="400" height="400"   style="  max-height: 400px !important ;"></canvas>
                            <script>
                            var ctx = document.getElementById('myChartg').getContext('2d'); 
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                
                                    labels: ['Sunday', 'Monday', 'Tuesday', 'Wednessday', 'Friday', 'Saturday'],
                                    datasets: [{
                                      tension: 0.4,
                                        label: '  cash flow',
                                        data: [5, 10, 3, 5, 2, 3],
                                        backgroundColor: [
                                            'Blue',
                                          
                                        ],
                                        borderColor: [
                                            '#4162ff',
                                            '#4162ff',
                                            
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                 
        
        
                                    scales: {
                                  y: {
                                    y: {
                                            beginAtZero: true
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
        
        
                                }
                            });
                            </script>
                          </div>
                        </div>
                      </div>
        
                    </div>
        
                      <script>
                          const nav = () => {
           const nav = document.querySelector(".js-nav");
           const navLinks = nav.querySelectorAll(".nav__link");
           const slideRect = nav.querySelector(".nav__slider-rect");
        
           nav.addEventListener("click", (evt) => {
              if (!evt.target.classList.contains("nav__link")) {
                 return;
              }
              evt.preventDefault();
        
              navLinks.forEach((item) => {
                 item.classList.remove("nav__link_active");
              });
        
              if (!evt.target.classList.contains("nav__link_active")) {
                 evt.target.classList.add("nav__link_active");
              }
        
              slideRect.style.transform = `translateX(${evt.target.dataset.transform}%)`;
           });
        };
        nav();
        
        const nav2 = () => {
           const nav = document.querySelector(".js-nav2");
           const navLinks = nav.querySelectorAll(".nav__link");
           const slideRect = nav.querySelector(".nav__slider-rect");
        
           let activeNavLinkIndex = 0;
        
           nav.addEventListener("click", (evt) => {
              if (!evt.target.classList.contains("nav__link")) {
                 return;
              }
        
              evt.preventDefault();
        
              navLinks.forEach((item) => {
                 item.classList.remove("nav__link_active");
              });
        
              let nextIndex = -1;
        
              if (!evt.target.classList.contains("nav__link_active")) {
                 evt.target.classList.add("nav__link_active");
        
                 nextIndex = [...navLinks].findIndex((navLink) => {
                    return navLink === evt.target;
                 });
              }
        
              const parentPos = nav.getBoundingClientRect();
              const childPos = evt.target.getBoundingClientRect();
              const relativePos = {};
        
              relativePos.right = childPos.right - parentPos.right;
              relativePos.left = childPos.left - parentPos.left;
        
              if (nextIndex > activeNavLinkIndex) {
                 slideRect.style.right = `${Math.abs(relativePos.right)}px`;
        
                 setTimeout(() => {
                    slideRect.style.left = `${relativePos.left}px`;
                 }, 250);
              } else { 
                 slideRect.style.left = `${relativePos.left}px`;
        
                 setTimeout(() => {
                    slideRect.style.right = `${Math.abs(relativePos.right)}px`;
                 }, 250);
              }
        
              activeNavLinkIndex = nextIndex;
           });
        };
        nav2();
        
                      </script>
        
                      <style>
        
        .nav {
          position: relative;
          width: 60%;
          
          height: 35px;
          border-radius: 56px;
          margin: auto;
          min-width: 250px;
          background-color: rgb(221, 218, 218) ; 
        }
        .nav_copy {
          margin-top: 80px;
        }
        .nav__list {
          list-style: none;
          padding: 0;
          margin: 0;
          display: flex;
          height: 100%;
          z-index: 1;
        }
        .nav__item {
          position: relative;
          flex: 1;
          height: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          z-index: 1;
        }
        .nav__link {
          display: flex;
          flex: 1;
          align-items: center;
          justify-content: center;
          height: 100%;
          color: var(--black);
          text-decoration: none;
          transition: color 0.3s ease-in-out;
        }
        .nav_copy .nav__link {
          transition: color 0.3s ease-in-out;
        }
        .nav__link_active {
          color: #000;
        }
        .nav__slider {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          padding: 3px;
          pointer-events: none;
          z-index: 0;
        }
        .nav_copy .nav__slider {
          left: 3px;
          right: 3px;
          padding: 0;
        }
        .nav__slider-rect {
          width: 50%;
          height: 100%;
          background-color:#ffffff;
          border-radius: 50px;
          transition: transform 0.4s;
          box-shadow: 1px 1px 3px rgba(0, 42, 50, 0.15);
        }
        .nav_copy .nav__slider-rect {
          position: absolute;
          top: 3px;
          left: 0;
          right: 66.6%;
          bottom: 3px;
          height: auto;
          width: auto;
          transition: all 0.3s cubic-bezier(1, 0.48, 0.71, 0.96);
        }
        
                          /** for tabs **/
        
        .tabs { 
          width: 100%;
          margin: auto; 
        }
          
        .tabs-stage {
          border: none
          border-radius: 0 0 6px 6px;
          border-top: 0;
          clear: both;
          padding: 24px 30px;
          position: relative;
          top: -1px;
        }
        
                      </style>
        
            <script>
                // Show the first tab by default
        $('.tabs-stage div').hide();
        $('.tabs-stage div:first').show();
        $('.tabs-nav li:first').addClass('tab-active');
        
        // Change tab class and display content
        $('.tabs-nav a').on('click', function(event){
          event.preventDefault();
          $('.tabs-nav li').removeClass('tab-active');
          $(this).parent().addClass('tab-active');
          $('.tabs-stage div').hide();
          $($(this).attr('href')).show();
        });
            </script> 
        


                
                  </div>

                
                  
                  
                  
                  
   <!--phone navigation links -->
          <?php include("./includes/footer.php"); ?>
          <!-- phone nav links ends-->

          
  
                <?php include("./includes/popups.php"); ?>
          <!--"Includes Ends here"-->

                </main> 

              
              </div>

              <div class="sidenav2 scrollbaz" style="overflow: scroll;     "  >
        
                
                <script>
                  $(function() {
  $('#datex').datepicker({
    dateFormat: 'dd-M-yy',
    minDate: 1
  });
  
  $('.date-icon').on('click', function() {
    $('.date').focus();
  })
});
                </script>


<script> 
$(function() {
  $('#datexx').datepicker({
    dateFormat: 'dd-M-yy',
    minDate: 1
  });
  
  $('.date-icon').on('click', function() {
    $('.date').focus();
  })
});
                </script>

                <style>
               
.datex {
  width: 65px;
height: 25px;
left: 188px;
top: 19px;
color: #7A83A1;
border: 1px solid #B3A9C5;
box-sizing: border-box;
font-size: 9px;
border-radius: 5px;
}

.searchx {
  width: 35px;
height: 25px;
left: 188px;
top: 19px;
color: #7A83A1;
border: 1px solid #B3A9C5;
box-sizing: border-box;
font-size: 9px;
border-radius: 5px;
}

.date-container {
  position: relative; 
}
.date-container .date-text {
  position: absolute;
  top: 6px;
  left: 12px;
  color: #aaa;
}
.date-container .date-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  /* pointer-events: none; */
  cursor: pointer;
  color: #aaa;
}
                
                </style>


              

                <div class="the-nav thenav scrollbaz" style="    width: 100%;"> 

        

                  <div class="progress-cont   scrollbaz ">
                    <div class="HBox scrollbaz">

                      
                        <div class="Hbox-row scrollbaz side-row" style="display: block;">
                        

                          <div class="progress-cellx" style=" width: 100%; font-size: 27px; color: rgb(58, 58, 58); font-weight: bold; ">
                            <div class="" style=" margin-bottom: 10px ">
                                <span style="text-align: left !important; font-family: calibri !important; font-weight: bolder !important; font-size: 12px !important;">
                                Recent Activity 
                                </span>
                                <!--span style="float: right; text-align: center; font-size:12px !important;  padding: 10px; border-radius: 40px; min-width: 40px; min-height:40px; ">
                                    All
            
                                </span-->
                            </div>
                          </div>

                             <div class="progress-cellx" style=" width: 100%; font-size: 27px; color: rgb(58, 58, 58); font-weight: bold; ">
                            <div class="" style=" margin-bottom: 10px; display: flex; position: relative; height: 35px; width: 100%;">
                                <div class="phone" style="text-align: left !important; font-family: calibri !important; font-weight: bolder !important; font-size: 12px !important; position: absolute; left:0; ">
                                  <input class="datex" id="search" placeholder="SEARCH" type="text" style="font-size: 9px;" />
                                </div>
                                <div style="display: flex; right: 0; bottom: 0; top: 0; margin: auto;  position: absolute; text-align: center; font-size:12px !important;  padding: 10px; border-radius: 40px; min-width: 40px; min-height:40px; ">
                                  <div style="width: 27px;  font-style: normal;font-weight: 500;font-size: 9px;color: #C4C4C4; vertical-align: middle; margin-top: 5px;"> FROM </div>
                                  <div class="col-of-date">
                                    <div class=" ">
                                      <input class="datex" id="datex" type="text" placeholder="DATE"  />
                                 
                                      <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                  </div>
                                  <div style="width: 27px;  font-style: normal;font-weight: 500;font-size: 9px;color: #C4C4C4; vertical-align: middle; margin-top: 5px; text-align: center;"> TO </div>
                                  <div class="col-of-date">
                                    <div class=" ">
                                      <input class="datex" id="datexx" type="text" placeholder="DATE" />
                                 
                                      <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>

                          <div class="container " style="display: flex; position: relative; display: block;">

                           
                          </div>
          

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
                        </div>
                    </div>
                  </div>
                
                  
                </div>
              </div >

              <div class="  phone  Hcontainer" style="width: 100%;"  >
         
                <!--div class="" style=" margin-bottom:-10px; margin-left: 28px; ">
                  <span style="text-align: left !important; font-family: calibri !important; font-weight: bolder !important; font-size: 17px !important;">
               Don't miss out
                  </span>
                  
              </div-->
                


                <!--div class=" swiper-container1 swiper-container  container ">
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
                </div-->

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

<!-- script for chart --> 
 <script>
$(function(){
$("#doughnutChart").drawDoughnutChart([
  { title: "Outputs 'withdrawals, and transfers'",         value : 24650,  color: "#b30000" },
  { title: "Inputs 'investents & deposits'", value:  14200,   color: "#e69500" },
  { title: "Earnings 'ROI' ",      value: 10200  ,   color: "#009b1a" },

]);
});

                 $("#chartz").click(function() {
      $('.analysis-container').toggleClass(' nil');
      $('.opp').addClass('ovv');

    });


;(function($, undefined) {
$.fn.drawDoughnutChart = function(data, options) {
  var $this = this,
    W = $this.width(),
    H = $this.height(),
    centerX = W/2,
    centerY = H/2,
    cos = Math.cos,
    sin = Math.sin,
    PI = Math.PI,
    settings = $.extend({
      segmentShowStroke : true,
      segmentStrokeColor : "#fff",
      segmentStrokeWidth : 1,
      baseColor: "black",
      baseOffset: 0,
      edgeOffset : 0,//offset from edge of $this
      percentageInnerCutout : 2 ,
      animation : true,
      animationSteps : 90,
      animationEasing : "easeInOutExpo",
      animateRotate : true,
      tipOffsetX: -8,
      tipOffsetY: -45,
      tipClass: "doughnutTip",
      summaryClass: "doughnutSummary",
      summaryTitle: "TOTAL:",
      summaryTitleClass: "doughnutSummaryTitle",
      summaryNumberClass: "doughnutSummaryNumber",
      beforeDraw: function() {  },
      afterDrawed : function() {  },
      onPathEnter : function(e,data) {  },
      onPathLeave : function(e,data) {  }
    }, options),
    animationOptions = {
      linear : function (t) {
        return t;
      },
      easeInOutExpo: function (t) {
        var v = t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t;
        return (v>1) ? 1 : v;
      }
    },
    requestAnimFrame = function() {
      return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function(callback) {
          window.setTimeout(callback, 1000 / 60);
        };
    }();

  settings.beforeDraw.call($this);

  var $svg = $('<svg width="' + W + '" height="' + H + '" viewBox="0 0 ' + W + ' ' + H + '" xmlns=" " xmlns:xlink="http://www.w3.org/1999/xlink"></svg>').appendTo($this),
      $paths = [],
      easingFunction = animationOptions[settings.animationEasing],
      doughnutRadius = Min([H / 2,W / 2]) - settings.edgeOffset,
      cutoutRadius = doughnutRadius * (settings.percentageInnerCutout / 100),
      segmentTotal = 0;

  //Draw base doughnut
  var baseDoughnutRadius = doughnutRadius + settings.baseOffset,
      baseCutoutRadius = cutoutRadius - settings.baseOffset;
  $(document.createElementNS(' ', 'path'))
    .attr({
      "d": getHollowCirclePath(baseDoughnutRadius, baseCutoutRadius),
      "fill": settings.baseColor
    })
    .appendTo($svg);

  //Set up pie segments wrapper
  var $pathGroup = $(document.createElementNS(' ', 'g'));
  $pathGroup.attr({opacity: 0}).appendTo($svg);

  //Set up tooltip
  var $tip = $('<div class="' + settings.tipClass + '" />').appendTo('body').hide(),
      tipW = $tip.width(),
      tipH = $tip.height();

  //Set up center text area
  var summarySize = (cutoutRadius - (doughnutRadius - cutoutRadius)) * 2,
      $summary = $('<div class="' + settings.summaryClass + '" />')
                 .appendTo($this)
                 .css({ 
                   width: summarySize + "px",
                   height: summarySize + "px",
                   "margin-left": -(summarySize / 2) + "px",
                   "margin-top": -(summarySize / 2) + "px"
                 });
  var $summaryTitle = $('<p class="' + settings.summaryTitleClass + '">' + settings.summaryTitle + '</p>').appendTo($summary);
  var $summaryNumber = $('<p class="' + settings.summaryNumberClass + '"></p>').appendTo($summary).css({opacity: 0});

  for (var i = 0, len = data.length; i < len; i++) {
    segmentTotal += data[i].value;
    $paths[i] = $(document.createElementNS(' ', 'path'))
      .attr({
        "stroke-width": settings.segmentStrokeWidth,
        "stroke": settings.segmentStrokeColor,
        "fill": data[i].color,
        "data-order": i
      })
      .appendTo($pathGroup)
      .on("mouseenter", pathMouseEnter)
      .on("mouseleave", pathMouseLeave)
      .on("mousemove", pathMouseMove);
  }

  //Animation start
  animationLoop(drawPieSegments);

  //Functions
  function getHollowCirclePath(doughnutRadius, cutoutRadius) {
      //Calculate values for the path.
      //We needn't calculate startRadius, segmentAngle and endRadius, because base doughnut doesn't animate.
      var startRadius = -1.570,// -Math.PI/2
          segmentAngle = 6.2831,// 1 * ((99.9999/100) * (PI*2)),
          endRadius = 4.7131,// startRadius + segmentAngle
          startX = centerX + cos(startRadius) * doughnutRadius,
          startY = centerY + sin(startRadius) * doughnutRadius,
          endX2 = centerX + cos(startRadius) * cutoutRadius,
          endY2 = centerY + sin(startRadius) * cutoutRadius,
          endX = centerX + cos(endRadius) * doughnutRadius,
          endY = centerY + sin(endRadius) * doughnutRadius,
          startX2 = centerX + cos(endRadius) * cutoutRadius,
          startY2 = centerY + sin(endRadius) * cutoutRadius;
      var cmd = [
        'M', startX, startY,
        'A', doughnutRadius, doughnutRadius, 0, 1, 1, endX, endY,//Draw outer circle
        'Z',//Close path
        'M', startX2, startY2,//Move pointer
        'A', cutoutRadius, cutoutRadius, 0, 1, 0, endX2, endY2,//Draw inner circle
        'Z'
      ];
      cmd = cmd.join(' ');
      return cmd;
  };
  function pathMouseEnter(e) {
    var order = $(this).data().order;
    $tip.text(data[order].title + ": " + data[order].value)
        .fadeIn(200);
    settings.onPathEnter.apply($(this),[e,data]);
  }
  function pathMouseLeave(e) {
    $tip.hide();
    settings.onPathLeave.apply($(this),[e,data]);
  }
  function pathMouseMove(e) {
    $tip.css({
      top: e.pageY + settings.tipOffsetY,
      left: e.pageX - $tip.width() / 2 + settings.tipOffsetX
    });
  }
  function drawPieSegments (animationDecimal) {
    var startRadius = -PI / 2,//-90 degree
        rotateAnimation = 1;
    if (settings.animation && settings.animateRotate) rotateAnimation = animationDecimal;//count up between0~1

    drawDoughnutText(animationDecimal, segmentTotal);

    $pathGroup.attr("opacity", animationDecimal);

    //If data have only one value, we draw hollow circle(#1).
    if (data.length === 1 && (4.7122 < (rotateAnimation * ((data[0].value / segmentTotal) * (PI * 2)) + startRadius))) {
      $paths[0].attr("d", getHollowCirclePath(doughnutRadius, cutoutRadius));
      return;
    }
    for (var i = 0, len = data.length; i < len; i++) {
      var segmentAngle = rotateAnimation * ((data[i].value / segmentTotal) * (PI * 2)),
          endRadius = startRadius + segmentAngle,
          largeArc = ((endRadius - startRadius) % (PI * 2)) > PI ? 1 : 0,
          startX = centerX + cos(startRadius) * doughnutRadius,
          startY = centerY + sin(startRadius) * doughnutRadius,
          endX2 = centerX + cos(startRadius) * cutoutRadius,
          endY2 = centerY + sin(startRadius) * cutoutRadius,
          endX = centerX + cos(endRadius) * doughnutRadius,
          endY = centerY + sin(endRadius) * doughnutRadius,
          startX2 = centerX + cos(endRadius) * cutoutRadius,
          startY2 = centerY + sin(endRadius) * cutoutRadius;
      var cmd = [
        'M', startX, startY,//Move pointer
        'A', doughnutRadius, doughnutRadius, 0, largeArc, 1, endX, endY,//Draw outer arc path
        'L', startX2, startY2,//Draw line path(this line connects outer and innner arc paths)
        'A', cutoutRadius, cutoutRadius, 0, largeArc, 0, endX2, endY2,//Draw inner arc path
        'Z'//Cloth path
      ];
      $paths[i].attr("d", cmd.join(' '));
      startRadius += segmentAngle;
    }
  }
  function drawDoughnutText(animationDecimal, segmentTotal) {
    $summaryNumber
      .css({opacity: animationDecimal})
      .text((segmentTotal * animationDecimal).toFixed(1));
  }
  function animateFrame(cnt, drawData) {
    var easeAdjustedAnimationPercent =(settings.animation)? CapValue(easingFunction(cnt), null, 0) : 1;
    drawData(easeAdjustedAnimationPercent);
  }
  function animationLoop(drawData) {
    var animFrameAmount = (settings.animation)? 1 / CapValue(settings.animationSteps, Number.MAX_VALUE, 1) : 1,
        cnt =(settings.animation)? 0 : 1;
    requestAnimFrame(function() {
        cnt += animFrameAmount;
        animateFrame(cnt, drawData);
        if (cnt <= 1) {
          requestAnimFrame(arguments.callee);
        } else {
          settings.afterDrawed.call($this);
        }
    });
  }
  function Max(arr) {
    return Math.max.apply(null, arr);
  }
  function Min(arr) {
    return Math.min.apply(null, arr);
  }
  function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  }
  function CapValue(valueToCap, maxValue, minValue) {
    if (isNumber(maxValue) && valueToCap > maxValue) return maxValue;
    if (isNumber(minValue) && valueToCap < minValue) return minValue;
    return valueToCap;
  }
  return $this;
};
})(jQuery);
</script>