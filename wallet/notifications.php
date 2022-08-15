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
        <script src="javascript/swiper-bundle.min.js"></script>
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
        <!-- CSS_ADSBLOCK_START -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">  
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">   
        <!-- CSS_ADSBLOCK_END -->
         
     </head>
</head>

<!-- radio buttons styling -->
<style> 

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
      background-image: url(svg/shrimp.svg);
      background-position: center;
      }
      .cryptorr {
      background-image: url(svg/shrimp.svg);
      background-size: cover;
      background-position: center;
      }
      .etheriumrr {
      background-image: url(svg/shrimp.svg);
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
       


      .dix {
         width:100%;
         display: block;
         margin: auto !important;
         text-align: center !important;
         margin-bottom: 39px;
      }
</style>

   <style>

        .progress-cell{
           
            display: flex;
            background-color: transparent !important;
            box-shadow: transparent 0px 0px 2px 0 !important;
            border-radius: 0px !important;
            width: 80%; 
            margin: auto;
        }

        .progress-cell .inner{
            color: black;
            width: 80% !important;
            display: block !important; 
        }

        .tiny{
            display: block !important;
        }
      .active:hover{
          transform: none !important;
          
      }
      .active:hover .svg{
          transform: none !important;
          bottom: 0!important;
      }
      .notecon{
          display: flex !important; 
          justify-content: center;
          align-items: center;
    background-color: #4162ff;
          margin-right: 6px;
          height: 45px !important;
          font-size: 29px!important ;
          border-radius: 50%;
          width: 45px !important;
         
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
  @media screen and (max-width:900px) {
    .progress-cell{
        max-width: none !important;
        width: 100%;
    }
    
    
    .progress-cell .inner{ 
  
}

.progress-cell .amount{
    text-align: right;
}
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
    background: #fff !important;
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






.nil{
    transform: translate(0, 0) !important;
}


   </style>
   

<!-- edit securityzz-->
<style>
    .seczz{
        position: fixed;
        top: 0 !important;
        width: 100%;
    transform: translate(100%, 0);
    transition: 0.01s;
    opacity: 0;
    z-index: 99999999999999999999999999999999;
    }
    
.nile{
    transition: 0.01s;
    opacity: 1;
    animation: 0.01s;
    transform: translate(0%, 0);
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
         <img src="imgs/fav.png">
      </div>
   </div>
   <!--body-->
   <body class="biz-body" onload="loader()" >
      <!-- include everything from here down to where you see for sidenav on the computer view "Includes Ends here"-->
      <div class="dpadding" style="  position: absolute; width: 100%; margin: auto; max-width: 1400px; left: 0; right: 0; background-color: #eff3fc; "> 
       <!-- include everything from here down to where you see for sidenav on the computer view "Includes Ends here"-->
      <?php include("./includes/aside.php"); ?>
      <!-- "Includes Ends here"-->
      
      
     
     
     <div class="the-main" style=" "> 
      
      <div class="home-container" style=" ">
          

          
          
      <main class="main " style=" ">
        <div class="header " >
            <div class="biz-left">

              <div>

              </div>
              <span>
                  <span style="font-family: poppins !important;">Ojayi Emma  </span>
                  <div class="dashboard">
                    <span style="font-family: poppins !important;">Dashboard  </span>
                  </div>
              </span>

            


            </div>
            <div class="biz-right" id="buttonx" >
                <a href="notifications.html">
                    <span class="round">

                      <span style="color: rgb(182, 182, 182); font-size: 29px;" class="iconify" data-icon="fa-regular:bell"></span>
                      <div class="status"style="text-align: center;
                          font-size:7px">  Manager </div>
                    </span>
                </a>
              </div>
              
              <div class="biz-right" style="right: 50px;"  >
                <a >
                    <span class="roundn">
                      <span style="color:rgb(182, 182, 182);  font-size: 25px;" class="iconify" data-icon="whh:magnifier"></span>
                       
                    </span>
                </a>
              </div>



        </div>
         
         
         <div class="  dash-body"  id="button">
         <div class=" baby-top" style="width: 100%; " >
         <!--div class="Hcontainer container" style="">
            <div class="HBox">
               <div class="Hbox-row">
                  <div class=" bgc box-cell one beep">
                     <div class="inner">
                        <div class="caption"> Dispensable Balance</div>
                        <div class="content">
                          <span style="font-family: 'poppins', sans-serif; " class="remain">$</span><span class="fund">10,200.<span class="remain">20</span></span>
                        <div class="dexx">
                                                       <div class="tiny"> ezeaniandrew8197@gmail.com </div>
                            
                            <div class="">
                                <div class="tiny" style="color:#81FF00">
                                    net worth
                                </div>
                                <div class="dexx-funds">
                                    $220,000
                                </div>
                            </div>
                            
                        </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div-->






      <!--div class="progress-cont Hcontainer charts-container">
         <div class="HBox">
            <div class="Hbox-row">
               <div id="Profile" style="cursor: pointer;" class="progress-cell investment">
                  <div class="notecon">
                     <span style="color: #fff;" class="lnr ">
                                                    <svg version="1.1" fill="white" width="80%" style="margin:auto; display: block" id="Capa_1" xmlns=" " xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                        	<g>
                        		<path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148
                        			C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962
                        			c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216
                        			h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40
                        			c59.551,0,108,48.448,108,108S315.551,256,256,256z"/>
                        	</g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg>
                     </span>
                  </div>
                  <div class="inner">

                     <div class="content">
                        <span style="">
                           
                           <div  class=" p" style="text-align: left;  padding-bottom: 10px !important; padding-top: 10px; font-size:18px; font-weight: bold">
                               Profile
                               <div class="tiny" style="color:black"> view edit and update your profile </div>
                            </div>
                        </span>


                       
                     </div>
                    
                  </div>
                  <div class="amount">

                  </div>
               </div>
               <div id="payment" style="cursor:pointer;" class="progress-cell investment">
                  <div class="notecon">
                     <span style="color: #fff;" class="lnr ">
                                             <svg fill="white" version="1.1" id="Capa_1" xmlns=" " xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    	 viewBox="0 0 18.972 18.972" style="  margin:auto; display: block" xml:space="preserve"  width="80%">
                    <g>
                    	<g>
                    		<path style="fill:#fff;" d="M17.873,3.12L7.284,3.126c-0.607-0.001-1.101,0.493-1.1,1.101v0.505
                    			C5.959,4.635,5.68,4.567,5.324,4.567c-0.445,0-0.814,0.1-0.855,0.113C4.383,4.704,4.305,4.746,4.238,4.805L0.202,8.341
                    			C0.07,8.458-0.004,8.627,0,8.803l0.035,5.821c0.008,0.31,0.364,0.563,0.675,0.577c0.016,0,1.521,0.063,2.851,0.063
                    			c0.811,0,1.383-0.021,1.748-0.067c1.064-0.134,1.529-0.448,1.722-0.648c0.2-0.146,0.378-0.29,0.564-0.434
                    			c-0.155,0.568,0.104,1.187,0.648,1.462c0.176,0.09,0.374,0.138,0.57,0.138c0.349,0,0.669-0.145,0.903-0.385
                    			c0.115,0.156,0.261,0.292,0.445,0.387c0.177,0.087,0.374,0.135,0.571,0.135c0.478,0,0.91-0.267,1.126-0.693l0.837-1.648
                    			c0.153-0.302,0.185-0.645,0.079-0.965c-0.034-0.104-0.088-0.201-0.148-0.291l5.239,0.003c0.607,0,1.102-0.494,1.103-1.1
                    			l0.004-6.924C18.973,3.625,18.48,3.12,17.873,3.12z M10.072,13.012l-0.835,1.65c-0.113,0.228-0.407,0.325-0.636,0.21
                    			c-0.233-0.119-0.326-0.405-0.209-0.637l0.687-1.353c0,0,0.225-0.549,0.584-0.555c0.07,0.002,0.138,0.017,0.202,0.05
                    			c0.112,0.058,0.196,0.153,0.235,0.274C10.14,12.772,10.132,12.899,10.072,13.012z M8.756,11.561l-0.755,0.692h0.007
                    			c-0.473,0.41-1.036,0.865-1.729,1.377c-0.052,0.038-0.056,0.034-0.093,0.086c-0.002,0.002-0.231,0.206-1.021,0.304
                    			c-0.216,0.027-0.668,0.023-1.603,0.023c-0.813,0-1.825,0.012-2.378-0.007L1.193,9.05l3.714-3.255
                    			c0.1-0.019,0.252-0.041,0.417-0.041c0.242,0,0.409,0.043,0.499,0.132v4.116c0,0.209,0.11,0.401,0.29,0.509
                    			c0.021,0.012,0.045,0.01,0.067,0.02v0.044l0.055-0.028c0.153,0.051,0.318,0.058,0.464-0.023c0.923-0.5,2.672-1.295,3.434-1.295
                    			c0.034,0,0.063,0,0.083,0.004c0.003,0.007,0.006,0.011,0.01,0.017C10.242,9.329,10.318,10.015,8.756,11.561z M11.989,13.15
                    			l-0.835,1.65c-0.114,0.228-0.409,0.324-0.637,0.209c-0.232-0.117-0.324-0.404-0.207-0.636l0.836-1.65
                    			c0.081-0.16,0.242-0.261,0.422-0.261c0.075,0,0.147,0.019,0.215,0.053c0.114,0.058,0.197,0.155,0.235,0.273
                    			C12.058,12.91,12.049,13.037,11.989,13.15z M18.236,11.155c-0.001,0.205-0.165,0.367-0.367,0.367l-7.476-0.002
                    			c0.611-0.754,0.962-1.43,1.02-2.016c0.043-0.464-0.094-0.76-0.195-0.907c-0.125-0.236-0.419-0.557-1.085-0.557
                    			c-0.871,0-2.229,0.57-3.124,0.996V7.393L18.237,7.39L18.236,11.155z M18.237,5.214L6.917,5.209V4.225
                    			c0-0.203,0.164-0.367,0.366-0.367l10.59-0.008c0.2,0,0.367,0.178,0.367,0.38L18.237,5.214z"/>
                    		<polygon style="fill:#030104;" points="17.403,10.842 17.395,9.847 14.496,9.845 14.505,10.842 		"/>
                    	</g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>

                     </span>
                  </div>
                  <div class="inner">

                     <div class="content">
                        <span style="">
                         <div >
                           <div class=" p" style="text-align: left;  padding-bottom: 10px !important; padding-top: 10px; font-size:18px; font-weight: bold">
                               Payments
                                           <div class="tiny" style="color:black"> Setup your withdrawal methods</div> 
                                           </div>
                                           </div>
                        </span>


                       
                     </div>
                    
                  </div>
                  <div class="amount">

                  </div>
               </div>
               <div id="security" class="progress-cell investment">
                  <div class="notecon">
                     <span style="color: #fff;" class="lnr">
                                                 <svg version="1.1" fill="white" width="80%" style="margin:auto; display: block" id="Capa_1" xmlns=" " xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                    	<g>
                    		<path d="M409.6,170.667h-17.067V153.6C392.439,68.808,323.725,0.094,238.933,0c-84.792,0.094-153.506,68.808-153.6,153.6v17.067
                    			H68.267c-9.426,0-17.067,7.641-17.067,17.067V460.8c0,9.426,7.641,17.067,17.067,17.067H409.6c9.426,0,17.067-7.641,17.067-17.067
                    			V187.733C426.667,178.308,419.026,170.667,409.6,170.667z M119.467,153.6c0-65.98,53.487-119.467,119.467-119.467
                    			S358.4,87.62,358.4,153.6v17.067H119.467V153.6z M392.533,443.733h-307.2V204.8h307.2V443.733z"/>
                    	</g>
                    </g>
                    <g>
                    	<g>
                    		<path d="M287.209,290.111c-7.211-20.472-26.571-34.152-48.276-34.111c-28.211-0.053-51.124,22.773-51.177,50.984
                    			c-0.041,21.705,13.639,41.065,34.111,48.276v37.274c0,9.426,7.641,17.067,17.067,17.067S256,401.959,256,392.533V355.26
                    			C282.609,345.888,296.582,316.719,287.209,290.111z M238.933,324.267c-9.426,0-17.067-7.641-17.067-17.067
                    			s7.641-17.067,17.067-17.067S256,297.774,256,307.2S248.359,324.267,238.933,324.267z"/>
                    	</g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                     </span>
                  </div>
                  <div class="inner">

                     <div class="content">
                        <span style="">
                           
                           <div class=" p" style="text-align: left;  padding-bottom: 10px !important; padding-top: 10px; font-size:18px; font-weight: bold">
                               Security
                                           <div class="tiny" style="color:black"> Password and transaction pin  settings </div>
                          </div>
                        </span>


                       
                     </div>
                    
                  </div>
                  <div class="amount">

                  </div>
               </div>
               <a href="../login.html" style="color: black;" class="progress-cell investment">
         
                 <div class="notecon">
                     <span style="color: #fff;" class="lnr ">
                         
                                                 <svg version="1.1" fill="white" width="80%" style="margin:auto; display: block" id="Capa_1" xmlns=" " xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="m416 320.007812c-4.097656 0-8.191406-1.558593-11.308594-4.691406-6.25-6.253906-6.25-16.386718 0-22.636718l68.695313-68.691407-68.695313-68.695312c-6.25-6.25-6.25-16.382813 0-22.632813 6.253906-6.253906 16.386719-6.253906 22.636719 0l80 80c6.25 6.25 6.25 16.382813 0 22.632813l-80 80c-3.136719 3.15625-7.230469 4.714843-11.328125 4.714843zm0 0"/><path d="m170.667969 512.007812c-4.566407 0-8.898438-.640624-13.226563-1.984374l-128.386718-42.773438c-17.46875-6.101562-29.054688-22.378906-29.054688-40.574219v-384c0-23.53125 19.136719-42.6679685 42.667969-42.6679685 4.5625 0 8.894531.6406255 13.226562 1.9843755l128.382813 42.773437c17.472656 6.101563 29.054687 22.378906 29.054687 40.574219v384c0 23.53125-19.132812 42.667968-42.664062 42.667968zm-128-480c-5.867188 0-10.667969 4.800782-10.667969 10.667969v384c0 4.542969 3.050781 8.765625 7.402344 10.28125l127.785156 42.582031c.917969.296876 2.113281.46875 3.480469.46875 5.867187 0 10.664062-4.800781 10.664062-10.667968v-384c0-4.542969-3.050781-8.765625-7.402343-10.28125l-127.785157-42.582032c-.917969-.296874-2.113281-.46875-3.476562-.46875zm0 0"/><path d="m325.332031 170.675781c-8.832031 0-16-7.167969-16-16v-96c0-14.699219-11.964843-26.667969-26.664062-26.667969h-240c-8.832031 0-16-7.167968-16-16 0-8.832031 7.167969-15.9999995 16-15.9999995h240c32.363281 0 58.664062 26.3046875 58.664062 58.6679685v96c0 8.832031-7.167969 16-16 16zm0 0"/><path d="m282.667969 448.007812h-85.335938c-8.832031 0-16-7.167968-16-16 0-8.832031 7.167969-16 16-16h85.335938c14.699219 0 26.664062-11.96875 26.664062-26.667968v-96c0-8.832032 7.167969-16 16-16s16 7.167968 16 16v96c0 32.363281-26.300781 58.667968-58.664062 58.667968zm0 0"/></svg>
                     </span>
                  </div>
                  <div class="inner">

                     <div class="content">
                        <span style="">
                           
                           <div class=" p" style="text-align: left;  padding-bottom: 10px !important; padding-top: 10px; font-size:18px; font-weight: bold">
                               Logout
           </div>
                        </span>


                       
                     </div>
                    
                  </div>
                  <div class="amount">

                  </div>  
            
               </a>
            </div>
         </div>
      </div-->
      
       
<div style="min-height:300px">
               
        <div class="progress-cell">
            <div class="notecon">

                <span style="color: rgb(255, 255, 255); font-size: 29px;" class="iconify" data-icon="fa-regular:bell"></span>
            </div>
            <div class="inner" style="  background-size:36px; background-position: top right; background-repeat: no-repeat">
               <div class="title"> Complete your profile</div>
               <div class="date tiny" >30th sep 2020, 1:30pm</div>
               <div class="content">
                  <span style="">
                     
                     <div class=" p danote" style="text-align: left; font-weight: normal !important; padding-bottom: 10px !important; padding-top: 10px;">
                        Welcome to the Triskelion family kindly complete your withdrawal profile to be able to start making withdrawals 

                     </div>
                  </span>

                  <div>
                     <a class="paymentsetup danote" style=" "> Proceed <span style="top: 2px; position: relative;" class="lnr icon-keyboard_arrow_right"></span>  </a>
                  </div>
                 
               </div>
              
            </div>
         </div>
      
      
</div>


      <div class="Hcontainer phone " style="width: 100%;"  >
        <div class="HBox" >
            <div  class="Hbox-row">
              <div style="  position: relative; overflow: hidden" class="  box-cell one beep">
                  <div class="inner" style="display: block; text-align: left;">

                    <div class="content">
                      <div style="font-size:19px; font-family: 'poppins', sans-serif; width:60%; line-height: 30px; " class="remain">
                        Easy to manage your crypto transactions
                      </div>
                      <div class="" style="font-weight: normal; margin-top: 15px;  margin-bottom: 10px; font-size: 13px; color: #D9D9D9; "> View your detailed transaction here </div>

                      <a class="btx">
                        Detail Transaction

                      </a>
                    </div>
                  </div>


              </div>
            </div>
        </div>
      </div>


      </div>

      </div>

 <!-- include everything from here down -->

    <!-- include everything from here down to where you see "Includes Ends here"-->
 
     <!-- include everything from here down to where you see "Includes Ends here"-->
 
          <!--phone navigation links -->
          <?php include("./includes/footer.php"); ?>
          <!-- phone nav links ends-->
          <!-- TRANSACTION FUNCTIONS BEGINS  -->
 <?php include("./includes/popups.php"); ?>
          <!--"Includes Ends here"-->
        <!--"Includes Ends here"-->
 


 

      </main>
      
 
      
      </div>

      </div>

      </div>
   </body>
   
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

	if (selectedIndex < 3) {
		$('.transnext').html('<span style="font-weight: 1000; font-size: 19px" class="lnr lnr-arrow-right"></span>');

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
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 0,
        stretch: 2,
        depth: 10,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>