<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="shortcut icon" href="images/imgs/fav.png" />
      <meta name="description" content=" The world's largest financial framework " />
      <meta name="keywords" content="investment fintech finance revolution networking company" />
      <meta charset="UTF-8" />
      <title>TRISKELION COIN</title>
      <link rel="stylesheet" type="text/css" href="css/header.css" />
      <link rel="stylesheet" type="text/css" href="css/w3.css" />
      <link rel="stylesheet" type="text/css" href="css/linearicons.css" />
      <link rel="stylesheet" type="text/css" href="css/icomoon.css" />
      <link rel="stylesheet" type="text/css" href="css/bizmain.css" />
      <script src="javascript/swiper.min.js"></script>
      <link rel="stylesheet" href="css/swiper.css" />
      <link rel="stylesheet" href="css/swiper.min.css" />
      <link rel="stylesheet" type="text/css" href="css/head.css" />
      <link rel="stylesheet" type="text/css" href="css/signups.css" />
      <link rel="stylesheet" type="text/css" href="css/pages.css" />
      <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
      <link rel="stylesheet" href="bootstrap/3.3.6/css/bootstrap.min.css" />
      <!--important-->
      <script src="bootstrap/ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="javascript/navhide.js"></script>
      <script src="javascript/menubar2nd.js"></script>
      <link rel="stylesheet" href="fonts/money/flaticon.css" />

      <!-- Bootstrap -->
      <script src="javascript/bootstrap.min.js"></script>
   </head>

   <style>
      .focus-border {
         position: absolute;
         content: "";
         background: lightgrey;
         height: 2px;
         width: 0%;
         bottom: -1px;
         margin: auto;
         z-index: 1;
         left: 0;
         right: 0;
      }

      .field-container {
         position: relative;
         border-bottom: 1px solid #ddd;
         height: 40px;
         margin-top: 39px !important;
         margin: auto;
         margin-bottom: 11px;
         width: 96% !important;
      }

      .field-placeholder {
         position: absolute;
         top: 50%;
         left: 10% !important;
         transform: translate(5px, -50%);
         pointer-events: none;
         transition: all 0.14s ease-in-out;
         font-size: 18px;
         font-weight: 400 !important;
         color: #fff;
      }

      @media screen and (min-width: 880px) {
         .field-placeholder {
            position: absolute;
            top: 50%;
            left: 6% !important;
         }
      }

      .inputxv.field-input {
         color: #fff;
         border: none;
         padding: 5px;
         margin-top: 10px;
         background: transparent;
         position: relative;
         font-size: 15px;
         display: inline-block;
         box-sizing: border-box;
         width: 90%;
         bottom: 8px !important;
      }
      .inputxv.field-input:focus {
         outline: none;
      }

      .inputxv.field-input.c-fix ~ .label,
      .inputxv.field-input:focus ~ .label,
      .inputxv.field-input:not(:placeholder-shown) ~ .label {
         color: #fff;
         font-size: 10px !important;
         font-weight: bold !important;
         top: -10px;

         left: 20px !important;
         transform: translate(5px, 0%);
      }

      .inputxv.field-input.c-fix ~ .focus-border,
      .inputxv.field-input:focus ~ .focus-border,
      .inputxv.field-input:not(:placeholder-shown) ~ .focus-border {
         width: 100%;
      }

      .inputxv.field-input::-webkit-input-placeholder {
         color: transparent;
      }
      .inputxv.field-input::-moz-placeholder {
         color: transparent;
      }
      .inputxv.field-input:-ms-input-placeholder {
         color: transparent;
      }

      .field-container .lnr {
         color: #fff !important;
         font-weight: bold !important;
         font-size: 18px;
         left: 0;
         bottom: 4px !important;
         display: inline-block;
         position: relative;
      }

      .label {
         font-size: 14px !important;
      }
   </style>
   <style>
      .custom-select {
         position: relative;
         z-index: 9999;
      }
      .custom-select-trigger {
         position: relative;
         display: block;
         padding-left: 45px;
         padding-bottom: 10px;
         background: transparent;
         margin-top: 30px;
         margin-bottom: 30px;
         border-bottom: 2px solid #d9d9d9;
         position: relative;
         cursor: pointer;
         font-weight: bold;
         font-size: 14px !important;
         text-align: left;
          color: #fff;
         font-family: calibri !important;
         text-transform: uppercase;
         font-weight: 400 !important;
         transition: 0.3s;
      }
      .custom-select-trigger:before {
         position: absolute;
         display: block;
         z-index: 999;
         content: "\e80e";
         width: 10px;
         height: 10px;
         top: 10%;
         left: 10px;
         margin-top: -3px;
         font-size: 19px;
         border-radius: 50%;
         transition: all 0.4s ease-in-out;
         transform-origin: 50% 0;
         font-weight: bold;
         font-family: "Linearicons-Free";
         speak: none;
         font-style: normal;
         font-variant: normal;
         text-transform: none;
         line-height: 1;

         /* Better Font Rendering =========== */
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
      }

      .custom-select-trigger:after {
         position: absolute;
         display: block;
         content: "";
         width: 10px;
         height: 10px;
         top: 50%;
         right: 25px;
         margin-top: -3px;
         border-bottom: 1px solid grey;
         border-right: 1px solid grey;
         transform: rotate(45deg) translateY(-50%);
         transition: all 0.4s ease-in-out;
         transform-origin: 50% 0;
      }
      .custom-select.opened .custom-select-trigger:after {
         margin-top: 3px;
         transform: rotate(-135deg) translateY(-50%);
      }
      .custom-options {
         position: absolute;
         display: block;
         top: 100%;
         left: 0;
         right: 0;
         min-width: 100%;
         margin: 15px 0;
         border: 1px solid #b5b5b5;
         border-radius: 4px;
         box-sizing: border-box;
         box-shadow: 0 2px 1px rgba(0, 0, 0, 0.07);
         background: #fff;
         transition: all 0.4s ease-in-out;

         opacity: 0;
         visibility: hidden;
         pointer-events: none;
         transform: translateY(-15px);
      }
      .custom-select.opened .custom-options {
         opacity: 1;
         visibility: visible;
         pointer-events: all;
         transform: translateY(0);
      }
      .custom-options:before {
         position: absolute;
         display: block;
         content: "";
         bottom: 100%;
         right: 25px;
         width: 7px;
         height: 7px;
         margin-bottom: -4px;
         border-top: 1px solid #b5b5b5;
         border-left: 1px solid #b5b5b5;
         background: rgba(0, 0, 0, 0.6);
         transform: rotate(45deg);
         transition: all 0.4s ease-in-out;
      }
      .option-hover:before {
         background: rgba(0, 0, 0, 0.6);
      }
      .custom-option {
         position: relative;
         display: block;
         padding: 0 20px;
         background: #4848c7;
         font-size: 18px;
         font-weight: 600;
         color: #fff;
         margin-bottom: 3px;
         line-height: 47px;
         cursor: pointer;
         transition: all 0.4s ease-in-out;
      }
      .custom-option:first-of-type {
         border-radius: 4px 4px 0 0;
      }
      .custom-option:last-of-type {
         border-bottom: 0;
         border-radius: 0 0 4px 4px;
      }
      .custom-option:hover,
      .custom-option.selection {
         background: #f9f9f9;
         color: #555;
      }
   </style>
   <style>
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
         background-image: url(imgs/new/cc3.svg);
         background-position: center;
      }
      .crypto {
         background-image: url(imgs/new/wallet.svg);
         background-size: cover;
         background-position: center;
      }
      
      .bot{
          margin-top: 30px;
      }
      
      .voucher {
         background-image: url(imgs/new/wallet.svg);
         background-size: cover;
         background-position: center;
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
         width: 80px;
         height: 50px;
         -webkit-transition: all 100ms ease-in;
         -moz-transition: all 100ms ease-in;
         transition: all 100ms ease-in;
         -webkit-filter: brightness(1.8) grayscale(1) opacity(0.7);
         -moz-filter: brightness(1.8) grayscale(1) opacity(0.7);
         filter: brightness(1.8) grayscale(1) opacity(0.7);
      }

      .drinkcard-cc:hover {
         -webkit-filter: brightness(1.2) grayscale(0.5) opacity(0.9);
         -moz-filter: brightness(1.2) grayscale(0.5) opacity(0.9);
         filter: brightness(1.2) grayscale(0.5) opacity(0.9);
      }

      .cryptoc:after {
         position: absolute;
         top: -32px;
         content: "crypto";
         width: 80%;
          color: #fff;
         height: 10px;
         text-transform: uppercase;
         text-align: center; 
         right: 0;
         left: 0;
         margin: auto;
         font-weight: bold;
         font-size: 10px;
         z-index: 1;
      }
      
            .voucherc:after {
         position: absolute;
         top: -32px;
         content: "voucher";
         width: 80%;
          color: #fff;
         height: 10px;
         text-transform: uppercase;
         text-align: center; 
         right: 0;
         left: 0;
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
      .voucherc {
         display: block;
         position: relative;
         width: 80px;
      }

      .c-cardc:after {
         position: absolute;
         top: -32px;
         content: "Bank";
         width: 80%;
         height: 10px;
         text-transform: uppercase;
         text-align: center; 
         right: 0;
         left: 0;
          color: #fff;
         margin: auto;
         font-weight: bold;
         font-size: 10px;
         z-index: 1;
      }

      .meth {
         display: inline-block;
         width: 100px;
      }
       


      .dix {
         width: 207px;
         display: block;
         margin: auto !important;
         text-align: center !important;
         margin-bottom: 39px;
      }
   </style>
   <div class="loader" id="loader">
      <div class="theb"></div>

      <div class="div">
         <img src="images/imgs/fav.png" />
      </div>
   </div>
   <!--body-->
   <body class="  " onload="loader()">
      <div class="popupxx" id="the-box">
          
         <div class="the-box containerxxx">
            <div class="half-top">
               <div class="img jazzz" style="background-image: url(imgs/robot.svg); background-size: contain; background-position: center; background-repeat: no-repeat;"> </div>
            </div> 
            <div class="the-half mini-container">
               <h2 style="font-family: barlow semi condensed; font-size: 20px !important; margin:0 !important; padding: 0 !important;"><span class="w3-text-black" style="margin: 0 !important; padding:0px !important;"> To complete Funding and access your contract account</span></h2>
               <div class="the-content" style="margin-top: 0 !important;">
                  <p style="margin:0 !important; padding: 0 !important;" class=" ">fill out the form on this page with the correct details and immediately fund your account with the  capital for your selected plan using the provided wallet.</p>
                  <p class=" margin:0 !important; padding: 0 !important; ">when this is done, Your credentials would be sent to your Entered Email address</p>
                  <div class="the-buttons">
                     <div><a href="#" onclick="document.getElementById('the-box').style.display='none'" style="font-size: 20px; font-family: Barlow Semi Condensed;  font-weight: bold;"> Continue</a></div>
                     <div><a href="help.html" style="font-size: 20px; font-family: Barlow Semi Condensed; font-weight: bold;"> need help </a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="the-affiliate">
         <div id="navbarx">
            <div class="logo">
               <div class="phone-logo">
                  <a href="Tcontract.html">
                     <span class="logophone-img"> <img src="images/imgs/fav.png" /> </span>
                     <div class="logotext">TRISKELION COIN</div>
                  </a>
               </div>

               <a href="Tcontract.html"><img src="images/imgs/logo.png" class="logo-img" /> </a>
            </div>

            <div class="rigg">
               <div class="phoneo">
                  <span style="color: #00041b;" class="img lnr lnr-user"> </span>
                  <div class="omahlay">
                     <a href="Tcontract.html"> <span class="lnr lnr-home"> </span> HOME</a>

                     <a href="login.html"> <span class="lnr lnr-lock"> </span> LOGIN</a>
                     <a href="signups.html"> <span class="lnr lnr-users"> </span> JOIN</a>
                  </div>
               </div>

               <script>
                  $(".img").on("click", function () {
                     $(".omahlay").toggleClass("omah");
                  });
               </script>
            </div>
         </div>

         <div class="body" style="z-index: 1;">
            <div class="mini-container" style="text-align: center;" class="top-text">
               <h3 style="color: #fff;">welcome!</h3>

               <p class="minii-container" style="color: #fff; margin-bottom: 50px;">please fill out the form below to create your contract account</p>
            </div>

            <div class="login-container"> 
               <form action="dashboard/overview.html" style="
	  ">
                <div class="bg" style="background-image: url(images/networks/net1.png); width:400px; background-position: center; background-size: contain;left:0; z-index:-1; opacity:0.7">
                   
               </div>
                  <img class="avatar" src="svg/proff.svg" />
                  <div></div>

                  <div>
                     <div class="field-container">
                        <span class="lnr lnr-user"></span> <input required class="field-input inputxv" name="Username" type="text" placeholder=" " />
                        <p class="field-placeholder label" for="username">USERNAME</p>
                        <span class="focus-border"></span>
                     </div>
                     <div class="field-container">
                        <span class="lnr lnr-envelope"></span> <input class="field-input inputxv" id="inputid" name="inputName" required type="email" placeholder=" " />
                        <p class="field-placeholder label" for="EMAIL ">EMAIL ADDRESS</p>
                        <span class="focus-border"></span>
                     </div>
                     <div class="field-container">
                        <span class="lnr lnr-phone"></span> <input class="field-input inputxv" name="phone" type="tel" placeholder=" " required />
                        <p class="field-placeholder label" for="phone">PHONE</p>
                        <span class="focus-border"></span>
                     </div>
                  </div>

                  <div class=" input-div-half ">
                     <p class="" style="font-size: 15px; font-weight: bold; color: #FFF; line-height: 15px !important; margin: auto; text-align: center; margin-bottom: 10px; margin-top: 25px; width: 250px; padding: 0; font-weight: normal !important;">
                       How much do you want to invest?
                     </p>
                     <div class="field-container" style="margin-top: 0 !important;">
                        <span class="lnr lnr-arrow-down"></span> <input min="199" class="field-input inputxv" name="amount" type="number" placeholder=" " required />
                        <p class="field-placeholder label"  for="phone">AMOUNT</p>
                        <span class="focus-border"></span>
                     </div>
                  </div>
 

                  <!--div class="dix">
                     <p class="" style="font-size: 12px; font-weight: bold!important; color: #fff; line-height: 15px !important; margin: 0; margin-bottom: 30px; padding: 0;">CHOOSE YOUR PREFERRED FUNDING METHOD FROM BELOW</p>
                     <div class="cc-selector">
                        <span class="meth">
                           <input id="c-card" type="radio" name="method" value="c-card" required />
                           <label class="drinkcard-cc c-card" for="c-card"></label>
                           <div class="c-cardc"></div>
                        </span>
                        <span class="meth">
                           <input id="crypto" type="radio" name="method" value="crypto" />
                           <label class="drinkcard-cc crypto" for="crypto"></label>
                           <div class="cryptoc"></div>
                        </span>
                        <span class="meth bot">
                           <input id="voucher" type="radio" name="method" value="voucher" />
                           <label class="drinkcard-cc crypto" for="voucher"></label>
                           <div class="voucherc"></div>
                        </span>

                        <span class="vouchee meth bot">
                           <input id="voucher" type="radio" name="method" value="voucher" />
                           <label class="drinkcard-cc crypto" for="voucher"></label>
                           <div class="voucherc"></div>
                        </span>

                     </div>
                  </div-->

                  <input required type="submit" class="sub-btn vouchee" value="ACTIVATE NOW" />

                  <div class="minii-container">
                     <p>
                        by signing up you are agreeing to the <a href="terms.html" style="color: inherit;"> terms and conditions </a> of the Triskelion coin company and the contract
                        <a href="txterms.html" style="color: inherit;"> terms </a> of TX-Contract
                     </p>
                  </div>
               </form>
            </div>

            <div class="padding">
               <ul class="foot-nav">
                  <div class="div">&copy;2020 Triskelion Coin</div>
                  <li><a href="Tcontract.html"> Home </a></li>
                  <li><a href="guide.html"> guide</a></li>
                  <li><a href=" help.html"> FAQs </a></li>
               </ul>
            </div>
         </div>


      </div>

   <div class="vouchup">
       
       <div class="the-connt">
           <div class="the-conntex"> 
           <form class="flex" style="max-width: 700px; margin: auto; ">
             
            <span style="display:inline-block; 
             color:#fff; font-family:barlow semi condensed; font-size:34px;  margin-left:30px; margin-bottom: 0px !important; padding: 0px !important; padding-bottom: 0px !important;">
                 <span>USD</span>  300
            <span class="huttu" style="margin-top:0px !important; margin-bottom:10px"> extragmail@gmail.com </span>
            </span>
              
              <div class="bar-cont"  style=" block; text-align: center; background-color: #fff; padding-bottom: 30px; padding-top: 40px; border-radius: 10px;">
               <div class="tittie"> <div class="titimg"></div> RAGNOR WALLET </div>
               <div class="barcode"></div>

               <div id="textToCopy"   style="text-align: center; color: #00041b; word-wrap: break-word; word-break: break-all;  " class="hx"  type="text" value=" "  > bc1qwj9m7w65vg6gwt0c7hv84ewu0vca8v4kswq0r5 </div>

               <span class="copyResult" id="copyResult"> Copy successful </span>

               <style>
                  .copyResult{
                     color: black;
                     transform: translateX(-500px) ; 
                     opacity: 0;
                     position: absolute;
                     left: 0;
                     right: 0; 
                     margin: auto;
                     width: 0%;   
                     background-color: #00041b;
                     border-radius: 10px;
                     padding: 30px  30px;

                  }

                  .pufx{ 
                     left: 0;
                     right: 0;
                     opacity: 100%;
                     transform: translateX(0px) !important;
                     margin: auto; 
                     z-index: 99999999999;
                     width: 80%;
                     display: block;   
                  }
               </style>
               <div class=" ">
                   <div> 
                     <button data-copytarget="#link" class="btnc "  id="copyButton"   style="padding:10px; background-repeat: no-repeat; border-radius: 50px; background-position: center; margin-top: 0 !important; background-color: #00041b; background-image: url(imgs/recieve/copy.svg); background-size: 60%;"> </button>
                   </div>

                   <div style="margin-top: 35px;"> 
                      <div style="font-size: 10px; margin: 0; padding: 0; margin-bottom: 10px !important;"> DONE? </div>
                      <a href="signupsx.html" class=" " type="submit "   style=" border: none; padding:10px; background-repeat: no-repeat; border-radius: 10px; color: #f9f9f9; margin-top: 0 !important; background-color: #00041b;  "> Proceed </a>
                   </div>
                  </div>
              
             </div>

   
           </form>
           <span>
              Send only Bitcoin to this address. <br> Sending any other coin may result to permanent loss
           </span>
   


           </div>
       </div>

 

   </div>
   
   
<style>
    .vouchup{
        position: fixed;
        top: 0;
        bottom: 0;
        transform: translate(-100%);
        overflow: scroll !important;
        right: 0;
        width: 100%;
        height: 105%;
        background: rgba(0,0,0,0.5);
        z-index: 9999999;
    }
    
    .bottom{
        bottom: 5%;
        position: absolute;
        color: #fff;
        display: block;
        padding: 10px;
        background: #00041b!important;
        text-align: center;
        left: 0;
        border-top: solid 1.2px #4848c7;
        right: 0;
        margin: auto;
    }
    
    .bottom a{
        text-align: center;
        font-size: 19px;
        font-family: bizfont3;
        display: block;
        color: #fff;
    }
    
    
    .the-connt{
        display: flex;
    }


.the-conntex::-webkit-scrollbar {
  background: transparent !important;
  width: 5px;
 
}



.the-conntex::-webkit-scrollbar-track { 
  border-radius: 10px;
}

.the-conntex::-webkit-scrollbar-thumb {
  background: transparent ;
  border-radius: 15px;
}

    
    .the-conntex{
        margin: auto;
        overflow: scroll;
        margin-top: 10px !important;
        color: #fff !important;
        width: 100%;
        height: 100%;
        
    }
    
    .the-conntex span{
        color: #fff;
        margin-top: 18px;
        text-align: center;
        display: block;
        font-size: 10px;
    }
    
    .akin {
        display: flex;
    }
    
    .akin a {
        display: block;
        margin: auto;
        color: #B5B5B5;
        border: solid 2px #4848c7;
        padding: 4px;
        margin-top: 10px;
        border-radius: 8px;
        font-size: 13px;
        width: 45%;
        text-align: center;
    }
    
    .the-conntex .hx{
        display: block;
        margin: auto;
        outline: none; 
        color: #fff;
        background: transparent;
        box-shadow: 0 0 0px transparent;
        border: none;
        padding: 10px 19px;
        position: relative; 
        word-wrap: break-word !important;
        word-break: break-all;
        font-size: 14px;
        width: 90% !important;
    }
  
    .before{
        content: ;
        display: block;
        height: 12px;
        width:120px;
        color: #fff;
        left: 25px;
        top: -16px;

        background-color:#00041b !important;
        font-size: 13px;
        position: absolute;
    }

        .the-conntex .btnc{
            border-radius: 8px;
            font-size: 20px; 
            display: block;
            margin: auto;
            border: solid 2px #fff;
            margin-top: 30px;
            outline: none;
            background: #282871;
            color: #fff;
            padding: 5px; 
            
            background-size: 50% !important;
            height: 70px  ;
            width: 70px  ; 
        }

        .the-conntex .btnc::before{
           left:0;
           right: 0;
           margin: auto;
           bottom: -20px;
           font-size: 15px;
           font-family: barlow semi condensed;
           content: "copy funding address";
           position: absolute;
           color: #00041b;
        }

        @media screen and (max-width:900px) {
         .the-conntex .btnc{
            border-radius: 8px;
            font-size: 20px; 
            display: block;
            margin: auto;
            border: solid 2px #fff;
            margin-top: 30px;
            outline: none;
            background: #282871;
            color: #fff;
            background-size: 50% !important;
            padding: 5px; 
            height: 50px  !important;
            width: 50px !important; 
        }

        }


    
    .vouchup .the-connt{
        height: 99%;
        width: 100%;
        background: #00041b;
        top: 0;
        left: 0;
        border-radius: 10px;
        right: 0;
        position: absolute;
        bottom: 0;
        margin: auto;
    }
    
    .omahx{
                transform: translate(0%);
    }
</style>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '72ec25c290a1746dfe22e2306b4af1d4a9f3509e';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

 




   </body>
         <script>
            $(".body").on("click", function () {
               $(".omahlay").removeClass("omah");
            });

            $(".vouchee").on("click", function () {
               $(".vouchup").addClass("omahx");
            });
            
            $(".bottom").on("click", function () {
               $(".vouchup").removeClass("omahx");
            });


         </script>
   <script type="text/javascript">
      const inputs = document.querySelectorAll(".input");

      function focusFunc() {
         let parent = this.parentNode.parentNode;
         parent.classList.add("focusx");
      }

      function blurFunc() {
         let parent = this.parentNode.parentNode;
         if (this.value == "") {
            parent.classList.remove("focusx");
         }
      }

      inputs.forEach((input) => {
         input.addEventListener("focus", focusFunc);
         input.addEventListener("blur", blurFunc);
      });
   </script>

   <script>
      // Get the modal
      var modal = document.getElementById("the-box");

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {};
   </script>

   <script>
      const answer = document.getElementById("copyResult");
const copy   = document.getElementById("copyButton");
const selection = window.getSelection();
const range = document.createRange();
const textToCopy = document.getElementById("textToCopy")

copy.addEventListener('click', function(e) {
    range.selectNodeContents(textToCopy);
    selection.removeAllRanges();
    selection.addRange(range);
    const successful = document.execCommand('copy');
    if(successful){
      $('.copyResult').addClass('pufx'); 
    } /** else {
      answer.innerHTML = 'Unable to copy!';  
    }**/
    window.getSelection().removeAllRanges()
});
   </script>
 
</html>
