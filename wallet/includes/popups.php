<span class="opp"></span>
          <!-- this pops up when transact is clicked -->
          <div class="transact">
           
              <div class="itemx">
                <a id="withdraw"  class="juzz">
                    <span   style="height:40px; width:40px">
                      <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                      <span class="iconify" data-icon="feather:log-out" style="font-size: 35px;"></span>
                    </span>
                    <div style="padding-left:10px">
                      <div class="bold">withdraw</div>
                      <div class="little">Make a withdrawal</div>
                    </div>
                </a>
                <a id="deposit"  class="juzz">
                    <span class="" style="color:   height:40px; width:40px">
            
                      <span class="iconify" data-icon="feather:log-in" style="font-size: 35px; "></span>
                    </span>
                    <div style="padding-left:10px">
                      <div class="bold">Deposite</div>
                      <div class="little"> Fund Your E-wallet</div>
                    </div>
                </a>
                <a id="transfer"  class="juzz  ">
                    <span style="height: 40px; width: 40px;  " class="">
                       <span class="iconify" data-icon="akar-icons:send" style="font-size: 35px;   "></span>
                    </span>
                    <div style="padding-left:10px">
                      <div class="bold">Transfer</div>
                      <div class="little">Transfer to a user</div>
                    </div>
                </a>
                <a id="reinvest"  class="juzz">
                    <span style="height: 40px; width: 40px; -" >
                    <span class="iconify" data-icon="akar-icons:leaf" style="font-size: 35px;   "></span>
                    </span>
                    <div style="padding-left: 10px">
                      <div class="bold">Invest</div>
                      <div class="little">Make an investment</div>
                    </div>
                </a>
              </div>
          </div>
          <!-- ends -->
       

            <!-- TRANSACTION FUNCTIONS BEGINS  -->

          <!-- withdral function starts here -->
          <div class="withdrawzz deppp">
              <div class="balance-cont">
                <div class="">
                    <span class=" close-btn" style="  ">
                      <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                    </span>
                </div>
                <div class="the-bal-cont">
                    <div></div>
                    <div class="the-bal">
                      <span class="remain"></span>
                      Withdrawal
                    </div>

                </div>
              </div>
              <div class="the-imp" style="">
                <form class="the-fx">
                    
                       <div class="query" style="font-size: 12px !important; text-align:left; margin-top: 30px;">select prefered mode of withdraw
                      </div>
                      <div class="dix">
                          <div class="cc-selector">
                            <span class="meth">
                                <input id="c-card" type="radio" name="method" value="c-card" required />
                                <label class="drinkcard-cc c-card" for="c-card"> My Bank Account</label>
                                <div class="c-cardc"> </div>
                            </span>
                            <span class="meth">
                                <input id="crypto" type="radio" name="method" value="crypto" />
                                <label class="drinkcard-cc crypto" for="crypto">My Crypto Wallet</label>
                                <div class="cryptoc"></div>
                            </span>
                            <span class="meth bot">
                                <input id="etherium" type="radio" name="method" value="etherium" />
                                <label class="drinkcard-cc etherium" for="etherium">My Etherium Wallet</label>
                                <div class="etheriumc"></div>
                            </span>
                          </div>
                      </div>                   
                    
                    <div style="text-align:left; font-size:12px" class="query">How much do you want to withdraw?
                    </div>
                    <div class="the-input  " style=" ">
                      
                      <span class="naira" style=" display: block; height: 58px; margin-top: 29px; min-width:300px">    
                        <div class="label" style="background-color: #fff; top:-05px;">  amount </div>           
                        <input class="input"   type="numeric" onchange="checkWithdrawalInput(this.value)"  style="margin-top: 0 !important; font-size: 22px;" >
                      </span>
                  

                      
                      
                    </div>
                    <div style="margin: auto"  value="" class="biz-btnx withdconfirm"> Withdraw </div>
               
                </form>
              </div>
              <div class="withdconfirmation deppp">
                <div class="balance-cont" style="background-image: none">
                    <div class="">
                    </div>
                    <div class="the-bal-cont">
                      <div class="the-bal" style="font-size:30px">
                          Confirm Process
                      </div>
                      <div>Confirm the transaction you initiated </div>
                    </div>
                </div>
                <div class="the-imp">
                    <form class="the-fx">
                      <div class="the-input">
                          <div  class="withdrawsucc" style=""> 
                          </div>
                      </div>
                      <div class="query">Process details</div>
                      <div class="">you are about to withdraw a total of 
                           $<b class="confirm-withdrawal-amount-show">1000</b> from your dispensable balance to your provided <b> crypto wallet  </b>
                      </div>
                      <div class="biz-btnx withdsucc"> proceed </div>
                      <div>  or</div>
                      <div> <a href=""> Cancel withdrawal </a> </div>
                    </form>
                </div>
              </div>
          </div>
          <!--ends-->
          <!-- depositing and funding function starts here-->
          <div class="depositzz deppp">
            <div class="balance-cont">
              <div class="">
                <span class=" close-btn" style="  border:#fff solid 1px !important">
                  <span style="color:#fff; border-color:#fff !important; font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                </span>
              </div>
              <div class="the-bal-cont">

                  <div class="the-bal" style="color: #fff !important;">
                    <span class="remain">$</span>Fund
                  </div>
                  <div>You have 0 active investment</div>
              </div>
            </div>
            <div class="the-imp" style="background-color:white; border-radius:20px">
              <form id="the-fx" name="invest_form" method="POST" action="/dashboard/invest">
                  <input type="hidden" name="_token" value="2ejvf8sYFjHsBR3KRtQN1i3iUtx20GIyMK5nc5Ge">          <div class="query" style="font-size:11px; text-align:left">How much do you want to Fund?</div>
                  <div class="the-input">
                    <span class="naira" style=" display: block; height: 58px; margin-top: 29px; min-width:300px">    
                      <div class="label" style="background-color: #fff; top:-05px;">  amount </div>           
                      <input class="input "   type="number" onchange="checkDepositInput(this.value)"   style="margin-top: 0 !important; font-size: 22px;" >
                    </span>
                    <div style="margin-top:20px; font-size:10px; color: #6998f7">MIN: $100 <span style="color:#C4C4C4; margin-right:5px; margin-left:5px">|</span> MAX ~
                    </div>
                  </div>
                  <div class="biz-btnx investconf"> Fund Now</div>
                  <div class="extra" style="font-weight: 500; margin-top: 15px !important; font-size:11px"> Not enough Funds? <a style="font-weight:bold"id="fund" class="">Fund account</a> </div>
              </form>
            </div>

            <div class="investconfirmation deppp" style="    background-image: linear-gradient(  #fff 0%, #fff 99.99%, #fff 100%) !important ; background-position: left; background-size: 100%; ">
              <div class="balance-cont" >
                <div class="">
                  <span class=" close-btn" style="  border:#fff solid 1px !important">
                    <span style="color:#fff; border-color:#fff !important; font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont" style="z-index: 999999999999999999999999999999999999999999999999999999999;">

                    <div class="the-bal" style="color: #fff;">
                      <span class="remain">$</span>checkout
                    </div> 
                </div>
              </div>
              <div class="the-imp" style="background-color:white !important; border-radius:20px; height: 540px;">
                <form class="the-fx" name="invest_form" method="POST" action="/dashboard/invest" style="background-color:white !important;">
                    <input type="hidden" name="_token" value="2ejvf8sYFjHsBR3KRtQN1i3iUtx20GIyMK5nc5Ge">        
                
                                              <div class="" >
                          <div class="query" style="font-size: 11px !important; margin-top: 30px; text-align:left;">Choose Crypto network to Fund?</div>
                          <div class="dix">
                            <div class="ccselector">
                                <span class="meth bep">
                                  <input class="inputr " id="bep" type="radio" name="method" value="card"  />
                                  <label class="drinkcardcc ccard" for="ccard">BEP20</label>
                                  <div class="ccardr"></div>
                                </span>
                                <span class="meth btc">
                                  <input class="inputr" id="btc" type="radio" name="method" value="crypto" />
                                  <label class="drinkcardcc cryptorr" for="cryptor">BITCOIN</label>
                                  <div class="cryptor"></div>
                                </span>
                                <span class="meth trc">
                                  <input class="inputr" id="trc" type="radio" name="method" value="crypto" />
                                  <label class="drinkcardcc transferrr" for="transferr">TRC20</label>
                                  <div class="transferr"></div>
                                </span>
                                <span class="meth erc">
                                  <input class="inputr" id="trc" type="radio" name="method" value="crypto" />
                                  <label class="drinkcardcc transferrr" for="transferr">ERC20</label>
                                  <div class="transferr"></div>
                                </span>


                                
                            </div>
                          </div>
                      </div>
                     
                     
                </form>
              </div>
            </div>


            <div class="bepnet deppp"  style="    background-image: linear-gradient(  #fff 0%, #fff 99.99%, #fff 100%) !important ; background-position: left; background-size: 100%; ">
              <div class="balance-cont" >
                <div class="">
                  <span class=" close-btn" style="  border:#fff solid 1px !important">
                    <span style="color:#fff; border-color:#fff !important; font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont" style="z-index: 999999999999999999999999999999999999999999999999999999999;">

                    <div class="the-bal" style="color: #fff;">
                      <span class="remain">$</span>checkout
                    </div> 
                </div>
              </div>
              <div class="the-imp" style="background-color:white !important; border-radius:20px; height: 540px;">
                <form class="the-fx" name="invest_form" method="POST" action="/dashboard/invest" style="background-color:white !important;">
                    <input type="hidden" name="_token" value="2ejvf8sYFjHsBR3KRtQN1i3iUtx20GIyMK5nc5Ge">        
                
                                              <div class="" >
                          <div class="query" style="font-size: 11px !important; margin-top: 30px; text-align:left;">Deposit Crypto</div>
                          <div class="dix">
                            <div class="ccselector">
                                <span class="meth" style="height: 200px; box-shadow: none !important;">
                                 <div style="height: 150px; width: 150px; margin: auto; background-color: #fff; background-image: url(imgs/bepx.png); background-size: contain; background-position: center; background-repeat: no-repeat;"> </div>
                                  <div style="font-size: 10px; text-align: center;"> send crypto to this address </div>
                                </span>
                                <span class="meth" style="max-width: fit-content; box-shadow: none !important;">
                                  
                                  <div style="font-size:10px;">Wallet Address</div>
                     
                                   <div style="font-size:12px;">0x69a58e137E03d789170CDCA888e976D3A2EF8217</div>

                                   <br>

                                   <div style="font-size:10px;">Network</div>
                     
                                   <div style="font-size:12px;">BEP20</div>

                                   <div class="biz-btnx deppsucc"> Deposited </div>
                                   <div>  or</div>
                                   <div> <a href="#"> Cancel  </a> </div>
                     
                              
                                </span>
                      
                            </div>
                          </div>
                      </div>
                     
                     
                </form>
              </div>
            </div>

            <div class="btcnet deppp"  style="    background-image: linear-gradient(  #fff 0%, #fff 99.99%, #fff 100%) !important ; background-position: left; background-size: 100%; ">
              <div class="balance-cont" >
                <div class="">
                  <span class=" close-btn" style="  border:#fff solid 1px !important">
                    <span style="color:#fff; border-color:#fff !important; font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont" style="z-index: 999999999999999999999999999999999999999999999999999999999;">

                    <div class="the-bal" style="color: #fff;">
                      <span class="remain">$</span>checkout
                    </div> 
                </div>
              </div>
              <div class="the-imp" style="background-color:white !important; border-radius:20px; height: 540px;">
                <form class="the-fx" name="invest_form" method="POST" action="/dashboard/invest" style="background-color:white !important;">
                    <input type="hidden" name="_token" value="2ejvf8sYFjHsBR3KRtQN1i3iUtx20GIyMK5nc5Ge">        
                
                                              <div class="" >
                          <div class="query" style="font-size: 11px !important; margin-top: 30px; text-align:left;">Deposit Crypto</div>
                          <div class="dix">
                            <div class="ccselector">
                              <span class="meth" style="height: 200px; box-shadow: none !important;">
                               <div style="height: 150px; width: 150px; margin: auto; background-color: #FFF; background-image: url(imgs/btcx.png); background-size: contain; background-position: center;"> </div>
                                <div style="font-size: 10px; text-align: center;"> send crypto to this address </div>
                              </span>
                              <span class="meth" style="max-width: fit-content; box-shadow: none !important;">
                                
                                <div style="font-size:10px;">Wallet Address</div>
                   
                                 <div style="font-size:12px;">bc1qrsrd3sugsvve4n2fkr5rpfe0txje4rqkyz67hd</div>

                                 <br>

                                 <div style="font-size:10px;">Network</div>
                   
                                 <div style="font-size:12px;">BITCOIN</div>
                   
                            
                                 <div class="biz-btnx deppsucc"> Deposited </div>
                                 <div>  or</div>
                                 <div> <a href="#"> Cancel  </a> </div>

                              </span>
                    
                          </div>
                          </div>
                      </div>
                     
                     
                </form>
              </div>
            </div>

            <div class="trcnet deppp"  style="    background-image: linear-gradient(  #fff 0%, #fff 99.99%, #fff 100%) !important ; background-position: left; background-size: 100%; ">
              <div class="balance-cont" >
                <div class="">
                  <span class=" close-btn" style="  border:#fff solid 1px !important">
                    <span style="color:#fff; border-color:#fff !important; font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont" style="z-index: 999999999999999999999999999999999999999999999999999999999;">

                    <div class="the-bal" style="color: #fff;">
                      <span class="remain">$</span>checkout
                    </div> 
                </div>
              </div>
              <div class="the-imp" style="background-color:white !important; border-radius:20px; height: 540px;">
                <form class="the-fx" name="invest_form" method="POST" action="/dashboard/invest" style="background-color:white !important;">
                    <input type="hidden" name="_token" value="2ejvf8sYFjHsBR3KRtQN1i3iUtx20GIyMK5nc5Ge">        
                
                                              <div class="" >
                          <div class="query" style="font-size: 11px !important; margin-top: 30px; text-align:left;">Deposit Crypto</div>
                          <div class="dix">
                            <div class="ccselector">
                              <span class="meth" style="height: 200px; box-shadow: none !important;">
                               <div style="height: 150px; width: 150px; margin: auto; background-color: #FFF;  background-image: url(imgs/trcx.png); background-size: contain; background-position: center; background-repeat: no-repeat;"> </div>
                                <div style="font-size: 10px; text-align: center;"> send crypto to this address </div>
                              </span>
                              <span class="meth" style="max-width: fit-content; box-shadow: none !important;">
                                
                                <div style="font-size:10px;">Wallet Address</div>
                   
                                 <div style="font-size:12px;">TC6aybvXqz4mbD3aXXhzzbXQiPA7DHgU8C</div>

                                 <br>

                                 <div style="font-size:10px;">Network</div>
                   
                                 <div style="font-size:12px;">TRC20</div>


                                 <div class="biz-btnx deppsucc"> Deposited </div>
                                 <div>  or</div>
                                 <div> <a href="#"> Cancel  </a> </div>
                   
                            
                              </span>
                    
                          </div>
                          </div>
                      </div>
                     
                     
                </form>
              </div>
            </div>

            <div class="ercnet deppp"  style="    background-image: linear-gradient(  #fff 0%, #fff 99.99%, #fff 100%) !important ; background-position: left; background-size: 100%; ">
              <div class="balance-cont" >
                <div class="">
                  <span class=" close-btn" style="  border:#fff solid 1px !important">
                    <span style="color:#fff; border-color:#fff !important; font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont" style="z-index: 999999999999999999999999999999999999999999999999999999999;">

                    <div class="the-bal" style="color: #fff;">
                      <span class="remain">$</span>checkout
                    </div> 
                </div>
              </div>
              <div class="the-imp" style="background-color:white !important; border-radius:20px; height: 540px;">
                <form class="the-fx" name="invest_form" method="POST" action="/dashboard/invest" style="background-color:white !important;">
                    <input type="hidden" name="_token" value="2ejvf8sYFjHsBR3KRtQN1i3iUtx20GIyMK5nc5Ge">        
                
                                              <div class="" >
                          <div class="query" style="font-size: 11px !important; margin-top: 30px; text-align:left;">Deposit Crypto</div>
                          <div class="dix">
                            <div class="ccselector">
                              <span class="meth" style="height: 200px; box-shadow: none !important;">
                               <div style="height: 150px; width: 150px; margin: auto; background-color: #FFF;  background-image: url(imgs/ercx.png); background-size: contain; background-position: center; background-repeat: no-repeat;"> </div>
                                <div style="font-size: 10px; text-align: center;"> send crypto to this address </div>
                              </span>
                              <span class="meth" style="max-width: fit-content; box-shadow: none !important;">
                                
                                <div style="font-size:10px;">Wallet Address</div>
                   
                                 <div style="font-size:12px;">0x69a58e137E03d789170CDCA888e976D3A2EF8217</div>

                                 <br>

                                 <div style="font-size:10px;">Network</div>
                   
                                 <div style="font-size:12px;">ERC20</div>
                   
                            
                                 <div class="biz-btnx deppsucc"> Deposited </div>
                                 <div>  or</div>
                                 <div> <a href="#"> Cancel  </a> </div>
                              </span>
                    
                          </div>

                  
                          </div>
                      </div>
                     
                     
                </form>
              </div>
            </div>

        </div>

          <!-- depositing  function ends here-->
 

          <!-- transfer function starts here-->
          <div class="transferzz deppp">
              <div class="balance-cont">
                <div class="">
                  <span class=" close-btn" style="  ">
                    <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont">
                    <div>Dispensable Balance</div>
                    <div class="the-bal">
                      <span class="remain">$</span>Transfer
                    </div>
               
                </div>
              </div>
              <div class="the-imp4">
                <div class="form ">

                    <input class="transimp"id="one" type="radio" name="stage" checked="checked" />
                    <input class="transimp"id="two" type="radio" name="stage" />
                    <input class="transimp"id="three" type="radio" name="stage" />
                    <div class="stages">
                      <label for="one">1</label>
                      <label for="two">2</label>
                      <label for="three">3</label>
                    </div>
                    <span class="progrexss"><span></span></span>
                    <div class="panels">
                      <div data-panel="one">
                          <h4 class="query" style="text-align: left; font-size:11px">Paste recipient's transaction ID </h4>
                          <input style="text-align:center; font-size: 16px; " class="transimp input the-id"type="text" placeholder="**********************************" />
                          <section style="text-align: center">
                            Tansfering to
                          </section>
                          <section style="text-align: center; font-weight: bold !important; border: none; color: black; margin: 0 !important" class="  "type="text"  >DrewBIZ</section>
                      </div>
                      <div data-panel="two">
                          <h4 class="query" style="text-align: left; font-size:11px"> How much do you want to transfer </h4>
                          <input class="transimp input "type="number" placeholder="$0.00"/>
                      </div>
                      <div data-panel="three">
                          <h4 class="query" style="text-align: left; font-size:11px"> Enter Your Transaction PIN </h4>
                          <input class="transimp input"type="number" maxlength="4" style="text-align: center;" placeholder="****" />
                      </div>
                    </div>
                    <div style="display: flex">
                      <button class="transnext transferproceed" style="margin: auto"><span style="font-weight: 1000; font-size: 19px" class="lnr">
                          <svg height="16" fill="white" viewBox="0 0 30 30" width="30" xmlns=" "><path d="M20.49 16c-.13 0-.253.054-.344.146l-13 13c-.44.422.24 1.175.708.708l13-13c.31-.303.095-.854-.364-.854zM7.5 0c-.45 0-.664.543-.354.854l14 14c.448.447 1.16-.273.708-.708l-14-14C7.76.05 7.634 0 7.5 0z"/></svg>
                      </span></button>
                    </div>
                    <div>

                    </div>
                    <div class="extra" style="font-weight: bold; margin-top: 15px !important; text-align: center"> Not enough Funds? <a id="fundt" class="">Fund account</a> </div>
                </div>
              </div>
          </div>
          <!-- transfer function ends here-->

          <!-- this is for the investment-->
          <div class="reinvestzz deppp">
              <div class="balance-cont">
                <div class="">
                  <span class=" close-btn" style="  border:#fff solid 1px !important">
                    <span style="color:#fff; border-color:#fff !important; font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont">

                    <div class="the-bal" style="color: #fff !important;">
                      <span class="remain">$</span>Invest
                    </div>
                    <div>You have 1 active investment</div>
                </div>
              </div>
              <div class="the-imp" style="background-color:white; border-radius:20px">
                <form class="the-fx" name="invest_form" method="POST" action="/dashboard/invest">
                    <input type="hidden" name="_token" value="2ejvf8sYFjHsBR3KRtQN1i3iUtx20GIyMK5nc5Ge">          <div class="query" style="font-size:11px; text-align:left">How much do you want to invest?</div>
                    <div class="the-input">
                      <span class="naira" style=" display: block; height: 58px; margin-top: 29px; min-width:300px">    
                        <div class="label" style="background-color: #fff; top:-05px;">  amount </div>           
                        <input class="input  "   type="number"   style="margin-top: 0 !important; font-size: 22px;" >
                      </span>
                      <div style="margin-top:20px; font-size:10px; color: #6998f7">MIN: $100 <span style="color:#C4C4C4; margin-right:5px; margin-left:5px">|</span> MAX ~
                      </div>
                    </div>
                    <div class="biz-btnx investconf"> Invest now</div>
                    <div class="extra" style="font-weight: 500; margin-top: 15px !important; font-size:11px"> Not enough Funds? <a style="font-weight:bold"id="fund" class="">Fund account</a> </div>
                </form>
              </div>
              <div class="investconfirmation deppp" style="    background-image: linear-gradient(  #2A5AFC 0%, #3888EA 99.99%, #9CECFB 100%) !important ; background-position: left; background-size: 100%; ">
                <div class="balance-cont" >
                  <div class="">
                    <span class=" close-btn" style="  border:#fff solid 1px !important">
                      <span style="color:#fff; border-color:#fff !important; font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                    </span>
                  </div>
                  <div class="the-bal-cont" style="z-index: 999999999999999999999999999999999999999999999999999999999;">
  
                      <div class="the-bal" style="color: #fff;">
                        <span class="remain">$</span>checkout
                      </div> 
                  </div>
                </div>
                <div class="the-imp" style="background-color:white; border-radius:20px; height: 540px;">
                  <form class="the-fx" name="invest_form" method="POST" action="/dashboard/invest">
                      <input type="hidden" name="_token" value="2ejvf8sYFjHsBR3KRtQN1i3iUtx20GIyMK5nc5Ge">        
                      <div class="the-input" style="font-size: 12px;">
                        
                        <div style="font-size: 12px; margin-top: 42px;">CHECKOUT INVESTVESTMENT</div>
                         <div style="font-size: 10px; margin-top: 35px;">AMOUNT INVESTED</div>
                         <div style="font-size: 20px; font-weight: 700; margin-top: 18px;">$100000</div>
                         <div class="biz-brzs"> </div>
                         
                         <div style="font-size: 10px; margin-top: 35px;">INTEREST RATE</div>
                         <div style="font-size: 20px; font-weight: 700; margin-top: 18px;">15% ROI</div>
                         <div class="biz-brzs"> </div>
                         <div class="biz-btnx   investsucc" style="margin-top: 57px !important ;"> Proceed</div>
                      </div>
                       
                       
                  </form>
                </div>
              </div>
          </div>
          <!-- investment function ends here-->

          <!-- TRANSACTION FUNCTIONS ENDS -->
          <!-- TRANSACTION FUNCTIONS ENDS -->
          <!-- TRANSACTION FUNCTIONS ENDS -->
            
            


 
          <!-- PROFILE EDITING FUNSTIONS FOR THE PROFILE PAGE -->
          <!-- PROFILE EDITING FUNSTIONS FOR THE PROFILE PAGE -->
          <!-- PROFILE EDITING FUNSTIONS FOR THE PROFILE PAGE -->
          <!-- PROFILE EDITING FUNSTIONS FOR THE PROFILE PAGE -->
          <!-- PROFILE EDITING FUNSTIONS FOR THE PROFILE PAGE -->




          <!--profile edits-->
         <div class="profilezz deppp">

            <div class="balance-cont">
            <div class="">
              <span class=" close-btn" style="  ">
                <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
              </span>
            </div>
                <div class="the-bal-cont">
                    <div></div>
                   <div class="the-bal">
                                  <span class="remain">It's Your Profile</span>
                   </div> 
         
                </div>
         
            </div>
                    <div class="the-impx">
                    

                    <div class="tabs">
                        <nav class="nav js-nav">
                            <ul class="nav__list tabs-nav">
                               <li class="nav__item">
                                  <a href="#tab-1" class="nav__link nav__link_active" data-transform="0"> Account </a>
                               </li>
                               <li class="nav__item">
                                  <a  href="#tab-2" class="nav__link" data-transform="100">Security</a>
                               </li>
                              
                            </ul>
                            <div class="nav__slider">
                               <div class="nav__slider-rect"></div>
                            </div>
                         </nav>
                        <div class="tabs-stage">
                          <div id="tab-1">
                            <form class="the-fx" style=" width:100%; min-width:300px;margin:auto;">
                                 

                              <span class="dp" style="margin-top: 30px !important; margin-bottom: 30px !important; ">

                                <span class="iconify" data-icon="ant-design:camera-outlined"></span>
                              </span>
                                
                                <divv class="the-input">
                                    <divv class="label" style="">Your username</divv>
                                    <input class="input" type="text" style="width:100% !important" value="Drew">
                                </divv>
                                <divv class="the-input">
                                    <divv class="label" style="">Your Phone number</divv>
                                    <input style="width:100% !important"  class="input" type="tel" value="+2349066298197">
                                </divv>
                 
                                <divv class="the-input">
                                    <divv class="label" style="">Your Email address</divv>
                                    <input style="width:100% !important"  class="input" type="tel" value="ezeaniandrew8197@gmail.com" disabled style=" ">
                                </divv>
                 
                 
                                <input style="margin: auto ; display: block;" value="Update" type="button" class="biz-btnx validate-btn"> 
                 
                 
                            </form>
                          </div>
        
        
                          <div id="tab-2" style="   " >
                            <form class="the-fx" style="background-color: #fff;  margin: auto;">          
                             
                              <span id="Paxword" class="" style=" min-width: 300px; cursor: pointer; border-bottom: solid 1px rgba(0, 0, 0, .1); display: flex;  position: relative; height: 80px; align-items: center; vertical-align: middle; align-content: center;">
                                 <span class="notecon" style="  display: block; position: relative; float: left; "> 

                                 </span>

                                 <span class="content" style="   display: block; width: 60%; text-align: left; vertical-align: middle;  font-weight: bold;" >
                                  Change Password

                                  <span class="tiny" style="font-weight: 400;">
                                    Update profile information

                                  </span>
                                 </span>

                                 <span class="notecon" style="  display: block; position: relative; float: left; background: transparent !important;"> 
                                  <span class="iconify" data-icon="ep:arrow-right"></span>
                                </span>
                              </span>

                               


                             <span id="PIN" class="" style=" min-width: 300px; cursor: pointer; border-bottom: solid 1px rgba(0, 0, 0, .1); display: flex;  position: relative; height: 80px; align-items: center; vertical-align: middle; align-content: center;">
                              <span class="notecon" style="  display: block; position: relative; float: left; "> 

                              </span>

                              <span class="content"  style="    display: block; width: 60%; text-align: left; vertical-align: middle;  font-weight: bold;" >
                               Change Transaction PIN

                               <span class="tiny" style="font-weight: 400;">
                                 Update profile information

                               </span>
                              </span>

                              <span class="notecon" style="  display: block; position: relative; float: left; background: transparent !important;"> 
                               <span class="iconify" data-icon="ep:arrow-right"></span>
                             </span>
                           </span>
                             
                             </form>
                      
                          
                             
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
      width: 100%;
      max-width: 300px;
      height: 60px; 
      border-radius: 5px;
      margin: auto;
      min-width: 250px;
      background-color: #ffff ; 
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
      width: 48%;
      height: 46px;
      margin-top: 4px;
      margin-left: 4px;
      margin-right: 4px;
      background-color:#F2F5F9;
      border-radius: 5px;
      transition: transform 0.4s; 
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

                <div class="passwordzz seczz">

                  <div class="balance-cont">
                  <div class="">
                    <span class=" close-btn" style="  ">
                      <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                    </span>
                  </div>
                      <div class="the-bal-cont">
                          <div></div>
                         <div class="the-bal">
                                        <span class="remain">Manage Your Security</span>
                         </div> 
               
                      </div>
               
                  </div>
                          <div class="the-imp">
                          <form class="the-fx">
                              <div class="query mini-container" style="margin-bottom: 34px;"> Edit Your Password</div>
                              
               
               
               
               
                              <div class="the-input" id="Password">
                                  <div class="label" style="">New Password</div>
                                  <input class="input" type="password"  style=" color: #000; text-align: center;  " >
                                  </div>
               
                              <div class="the-input" id="Password">
                                  <div class="label" style="">Repeat Password</div>
                                  <input class="input" type="password"  style=" color: #000; text-align: center;  " >
                                  </div>
               
               <input class="biz-btnx pin-btn" type="button" value="Validate" style="text-align: center !important">
                                                   <!--div class="x2-cont method-form">
                                <div class="x2-address">
                          <form>
                                                            <input required class="imp" placeholder="Enter x2 address"/>
                                                            <input type="number" required class="imp" placeholder="($)Enter amount"/>
               
                                                         </form>
                                                      </div>
                                                   </div-->
               
               
               
               
               
                          </form>
                      </div>
               
               </div>
               
               
               <div class="PINzz seczz">
               
                  <div class="balance-cont">
                  <div class="">
                    <span class=" close-btn" style="  ">
                      <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                    </span>
                  </div>
                      <div class="the-bal-cont">
                          <div></div>
                         <div class="the-bal">
                                        <span class="remain">Manage Your Security</span>
                         </div> 
               
                      </div>
               
                  </div>
                          <div class="the-imp">
                          <form class="the-fx">
                              <div class="query mini-container" style="margin-bottom: 34px;"> Edit Your transaction PIN</div>
                              
               
               
               
               
                              <div class="the-input" id="Password">
                                  <div class="label" style="">Old PIN</div>
                                  <input class="input" type="password"  style=" color: #000; text-align: center;  " >
                                  </div>
               
                              <div class="the-input" id="Password">
                                  <div class="label" style="">New PIN</div>
                                  <input class="input" type="password"  style=" color: #000; text-align: center; " >
                                  </div>
               
                              <div class="the-input" id="Password">
                                  <div class="label" style="">Repeat New PIN</div>
                                  <input class="input" type="password"  style=" color: #000; text-align: center;  " >
                                  </div>
               
               <input type="button" class="biz-btnx validate-btn" value="Validate" style="text-align: center !important">
                                                   <!--div class="x2-cont method-form">
                                <div class="x2-address">
                          <form>
                                                            <input required class="imp" placeholder="Enter x2 address"/>
                                                            <input type="number" required class="imp" placeholder="($)Enter amount"/>
               
                                                         </form>
                                                      </div>
                                                   </div-->
               
               
               
               
               
                          </form>
                      </div>
               
               </div>
         
         </div>
          <!--profile edits end-->
          <!--payment method edits editing one's payment gateway -->
          <div class="paymentzz deppp">
              <div class="balance-cont">
                <div class="">
                  <span class=" close-btn" style="  ">
                    <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont">
                    <div></div>
                    <div class="the-bal">
                      <span class="remain">Manage Your withdrawals</span>
                    </div>
                </div>
              </div>
              <div class="the-imp">
                <form class="the-fx">
                    <div class="query mini-container" style="margin-bottom: 34px;"> Fill up at least one method of withdrawal<br> </div>
                    <div style="display: flex">
                      <span  class="x1   selected" style="margin:auto; cursor:pointer; position: relative; display: inline-block">         
                          <span style="font-size: 34px;"  style="color:">
     
                             <span class="iconify" data-icon="clarity:bank-solid"></span>
                     </span>                <span class="tiny" style="text-align: center; width 100%; display: inline-block; position: absolute; bottom: 2px; left:0; right:0; margin: auto">Bank </span>
                                               </span>
     
                       <span class="x3  " style="cursor: pointer; position: relative; display: inline-block; margin:auto; ">                    
                                               <span style="font-size: 34px;" class="  ">  
                                                 <span class="iconify" style=" " data-icon="cryptocurrency:usdt"></span>
                      
                                               </span>
                                               <span class="tiny" style="text-align: center; width 100%; display: inline-block; position: absolute; bottom: 2px; left:0; right:0; margin: auto">Crypto</span>
                                               </span>
     
                      <span  class="x2 " style=" cursor:pointer; position: relative; display: inline-block; margin:auto; ">         
                                               <span   class="" style="font-size: 34px;">
                                                 <span class="iconify" data-icon="ci:paypal"></span>
                                              </span> 
                                                  <span class="tiny" style="text-align: center; width 100%; display: inline-block; position: absolute; bottom: 2px; left:0; right:0; margin: auto " > Paypal  </span>
                          </span>
             </div>        
                    <div class="x1-cont height method-form">
                      <div class="x1-address">
                <form>
                <div class="the-input">
                <div class="label" style="">Your Bank</div>
                <select style=" background: white" type="text" class=" " id="bank">
                <option selected>Choose bank</option>
                <option value="access">Access Bank</option>
                <option value="citibank">Citibank</option>
                <option value="diamond">Diamond Bank</option>
                <option value="ecobank">Ecobank</option>
                <option value="fidelity">Fidelity Bank</option>
                <option value="fcmb">First City Monument Bank (FCMB)</option>
                <option value="fsdh">FSDH Merchant Bank</option>
                <option value="gtb">Guarantee Trust Bank (GTB)</option>
                <option value="heritage">Heritage Bank</option>
                <option value="Keystone">Keystone Bank</option>
                <option value="rand">Rand Merchant Bank</option>
                <option value="skye">Skye Bank</option>
                <option value="stanbic">Stanbic IBTC Bank</option>
                <option value="standard">Standard Chartered Bank</option>
                <option value="sterling">Sterling Bank</option>
                <option value="suntrust">Suntrust Bank</option>
                <option value="union">Union Bank</option>
                <option value="uba">United Bank for Africa (UBA)</option>
                <option value="unity">Unity Bank</option>
                <option value="wema">Wema Bank</option>
                <option value="zenith">Zenith Bank</option>
                </select>
                </div>
                <div class="the-input">
                <div class="label" style="">Account name</div>
                <input class="input" type="text">
                </div>
                <div class="the-input">
                <div class="label" style="">Account number</div>
                <input class="input" type="text">
                </div>
                </form>
                </div>  
                </div>
                <div class="x3-cont method-form">
                    <div class="x3-address">
                      <form>
                          <div class="the-input">
                            <div class="label" style="">blockchain wallet address</div>
                            <input class="input" type="text">
                          </div>
                      </form>
                    </div>
                </div>
                <div class="x2-cont method-form">
                    <div class="x2-address">
                      <form>
                          <div class="the-input">
                            <div class="label" style="">etherium address</div>
                            <input class="input" type="text">
                          </div>
                      </form>
                    </div>
                </div>
                <button class="biz-btnx pin-btn" type="submit"> Update
                </button>
                </form>
              </div>
          </div>
          <!--payment edits End-->
          <!-- Security edits -->
          <div class="securityzz deppp">
              <div class="balance-cont">
                <div class="">
                  <span class=" close-btn" style="  ">
                    <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                <div class="the-bal-cont">
                    <div></div>
                    <div class="the-bal">
                      <span class="remain">Manage Your Security</span>
                    </div>
                </div>
              </div>
              <div class="the-imp">
                <form class="the-fx">
                    <div class="query mini-container" style="margin-bottom: 34px;"> Keep your account secured </div>
                    <div class="">
                      <div class="the-input" id="Paxword">
                          <div  style="  border-radius: 4px;
                            border: solid 1.4px #575757;
                            width: 80%;
                            margin: auto ;
                            margin-top: 23px !important;
                            padding: 8px 15px;
                            outline: 0;">
                            <span class="lnr">
                                
                              <span class="iconify" data-icon="bi:shield-lock"></span> Edit password </span>
                          </div>
                      </div>
                      <div class="the-input" id="PIN">
                          <div  style="  border-radius: 4px;
                            border: solid 1.4px #575757;
                            width: 80%;
                            margin: auto ;
                            margin-top: 23px !important;
                            padding: 8px 15px;
                            outline: 0;">
                            <span> <span class="iconify" data-icon="bi:shield-lock"></span> Edit PIN </span>
                          </div>
                      </div>
                    </div>
                </form>
              </div>

              <div class="passwordzz seczz">

                <div class="balance-cont">
                <div class="">
                  <span class=" close-btn" style="  ">
                    <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                    <div class="the-bal-cont">
                        <div></div>
                       <div class="the-bal">
                                      <span class="remain">Manage Your Security</span>
                       </div> 
             
                    </div>
             
                </div>
                        <div class="the-imp">
                        <form class="the-fx">
                            <div class="query mini-container" style="margin-bottom: 34px;"> Edit Your Password</div>
                            
             
             
             
             
                            <div class="the-input" id="Password">
                                <div class="label" style="">New Password</div>
                                <input class="input" type="password"  style=" color: #000; text-align: center;   " >
                                </div>
             
                            <div class="the-input" id="Password">
                                <div class="label" style="">Repeat Password</div>
                                <input class="input" type="password"  style=" color: #000; text-align: center;   " >
                                </div>
             
             <input class="biz-btnx pin-btn" type="button" value="Validate" style="text-align: center !important">
                                                 <!--div class="x2-cont method-form">
                              <div class="x2-address">
                        <form>
                                                          <input required class="imp" placeholder="Enter x2 address"/>
                                                          <input type="number" required class="imp" placeholder="($)Enter amount"/>
             
                                                       </form>
                                                    </div>
                                                 </div-->
             
             
             
             
             
                        </form>
                    </div>
             
             </div>
             
             
             <div class="PINzz seczz">
             
                <div class="balance-cont">
                <div class="">
                  <span class=" close-btn" style="  ">
                    <span style=" font-size: 25px; vertical-align: bottom; position: absolute; top: 0; bottom: 0; margin: auto; left: 0; right: 0;" class="iconify" data-icon="feather:chevron-left"></span>
                  </span>
                </div>
                    <div class="the-bal-cont">
                        <div></div>
                       <div class="the-bal">
                                      <span class="remain">Manage Your Security</span>
                       </div> 
             
                    </div>
             
                </div>
                        <div class="the-imp">
                        <form class="the-fx">
                            <div class="query mini-container" style="margin-bottom: 34px;"> Edit Your transaction PIN</div>
                            
             
             
             
             
                            <div class="the-input" id="Password">
                                <div class="label" style="">Old PIN</div>
                                <input class="input" type="password"  style=" color: #000; text-align: center;   " >
                                </div>
             
                            <div class="the-input" id="Password">
                                <div class="label" style="">New PIN</div>
                                <input class="input" type="password"  style=" color: #000; text-align: center;   " >
                                </div>
             
                            <div class="the-input" id="Password">
                                <div class="label" style="">Repeat New PIN</div>
                                <input class="input" type="password"  style=" color: #000; text-align: center;   " >
                                </div>
             
             <input type="button" class="biz-btnx validate-btn" value="Validate" style="text-align: center !important">
                                                 <!--div class="x2-cont method-form">
                              <div class="x2-address">
                        <form>
                                                          <input required class="imp" placeholder="Enter x2 address"/>
                                                          <input type="number" required class="imp" placeholder="($)Enter amount"/>
             
                                                       </form>
                                                    </div>
                                                 </div-->
             
             
             
             
             
                        </form>
                    </div>
             
             </div>
          </div>
          <!--security edits End---->
          
              <!-- request pin function for Security purposes-->
            <div class="pin-request deppp" style="width:80%; min-height: 400px; max-height: 400px; max-width: 600px;">
              <div class="balance-cont">
              <div class="">
          
              </div>
                  <div class="the-bal-cont"> 
                    
                      <div>We'd need to Confirm it's you </div>
                  </div>
          
              </div>
                      <div class="the-imp">
                      <form class="the-fx">
                          
                      
          
                          
          
                          <div class="query">validate Process</div>
                          <div class="" style="max-width:400px; margin: auto">Enter Your transaction Personal Identitification Number to complete this Process</div> 
                          <div class="the-input">
                              <div class="label" style="">Enter Your PIN</div>
                              <input class="input" type="password" style="text-align: center;">
                              </div>
          
          
                          <a href="">  <div class="biz-btnx"> Proceed </div></a>
                      </form>
                  </div>
          
          </div>
           <!-- request pin ends here-->


          <!-- PROFILE EDITING FUNSTIONS FOR THE PROFILE PAGE ENDS --> 
          <!-- PROFILE EDITING FUNSTIONS FOR THE PROFILE PAGE ENDS --> 
          <!-- PROFILE EDITING FUNSTIONS FOR THE PROFILE PAGE ENDS -->



         <!--"Visit Main.js to understand what To do when a function is complete; I used Jquery so it should be very easy "-->
                    
         <!--"Visit Main.js to understand what To do when a function is complete; I used Jquery so it should be very easy "-->
                    
         <!--"Visit Main.js to understand what To do when a function is complete; I used Jquery so it should be very easy "-->
                    
         <!--"Visit Main.js to understand what To do when a function is complete; I used Jquery so it should be very easy "-->
                    
         <!--"Visit Main.js to understand what To do when a function is complete; I used Jquery so it should be very easy "-->
                    


                   <!-- ALERTS STARTS HERE -->
                   <!-- ALERTS STARTS HERE -->
                   <!-- ALERTS STARTS HERE -->
                   <!-- ALERTS STARTS HERE -->
                   <!-- ALERTS STARTS HERE -->
                   <!-- ALERTS STARTS HERE -->
          
          

            <!-- not enough funds alert-->
            <div class="notenoghalert deppp">
              <div class="balance-cont">
              <div class="">

              </div>
                  <div class="the-bal-cont"> 
                    <div class="the-bal">
                                Sorry Drew 
                    </div> 
                      <div>But you can't use what you don't have</div>
                  </div>

              </div>
                      <div class="the-imp">
                      <form class="the-fx">
                          
                          <div class="the-input">
                              <div  class="withdrawerr" style=""> 

                              </div>
                          </div>

                          

                          <div class="query">Process failed</div>
                          <div class="">you do not have up to that amount to complete that transaction
                              <b> Drew</b> You can simply use what you have</div> 

                          <div style="margin-top: 14px;">
                            <b>Your dispensable balance is </b>
                            <div style="font-size: 30px;"> $<?php echo $balance; ?>  </div>
                          </div>
                          <a href="">  <div class="biz-btnx"> Done </div></a>

                          <div>  or</div> <div> <a id="fundn"> Fund account </a> </div>

                      </form>
                  </div>

            </div>
          
            <!--ends-->
          
          <!-- withdrawal alert-->
          <div class="withdrawalert deppp" style="max-width:100%">
              <div class="balance-cont">
                <div class="">
                </div>
                <div class="the-bal-cont">
                    <div class="the-bal">
                      <div style="font-size: 23px;">  
                        SUCCESS
                      </div>
                    </div>
                    <div>a total of $0 withdrawn</div>
                </div>
              </div>
              <div class="the-imp">
                <form class="the-fx">
                    <div class="the-input">
                      <div  class="withdrawsucc" style=""> 
                      </div>
                    </div>
                    <div class="query">Withdrawal placed</div>
                    <div class=""> expect a $<b class="confirm-withdrawal-amount-show">1000 </b> to be paid into your provided payment details within the next 24hours</div>
                    <div style="margin-top: 14px;">
                      <b>Your dispensable balance is </b>
                      <div style="font-size: 30px;"> $<?php echo $balance; ?> </div>
                    </div>
                    <a href="">
                      <div class="biz-btnx" style=" "> Done </div>
                    </a>
                </form>
              </div>
          </div>
          <!-- ends -->
          
          <!-- depositing and funding alerts-->
          <div class="deppalert deppp" style="max-width:100%">
            <div class="balance-cont">
            <div class="">
         
            </div>
                <div class="the-bal-cont"> 
                   <div class="the-bal">
                               SUCCESS
                   </div>  
                </div>
         
            </div>
                    <div class="the-imp">
                    <form class="the-fx">
                        
                        <div class="the-input">
                            <div  class="depositesucc" style=""> 
         
                            </div>
                        </div>
         
                        
         
                        <div class="query">Funding Completed</div>
                        
                        <div class="">You have successfully deposited a total of $<b class="confirm-deposit-amount-show">1000</b> into your wallet.  you should expect an email from us when your transaction is completed <div> 
         
                       
         
                        <a href="">  <div class="biz-btnx"> Done </div></a>
                    </form>
                </div>
         
         </div>
            <!-- ends -->
          
          <!-- after transfer alert-->
          <div class="transferalert deppp">
              <div class="balance-cont">
                <div class="">
                </div>
                <div class="the-bal-cont">
                    <div class="the-bal">
                      SUCCESS
                    </div>
                    <div>Done and dusted </div>
                </div>
              </div>
              <div class="the-imp">
                <form class="the-fx">
                    <div class="the-input">
                      <div  class="transfersucc" style=""> 
                      </div>
                    </div>
                    <div class="query">Transfer Completed</div>
                    <div class="">You Have successfully transfered <b>$1000 </b> to <b>Drewbiz </b>, and 
                      your available balance account has been debited 
                    </div>
                    <div style="margin-top: 14px;">
                      <b>Your dispensable balance is </b>
                      <div style="font-size: 30px;"> $0.00 </div>
                    </div>
                    <a href="">
                      <div class="biz-btnx"> Done </div>
                    </a>
                </form>
              </div>
          </div>
          <!-- ends -->
          
          <!-- alerts after investment -->
          <div class="investalert deppp" style="max-width:100%">
              <div class="balance-cont">
                <div class="">
                </div>
                <div class="the-bal-cont">
                    <div class="the-bal" style="color: #fff !important;">
                      Successful
                    </div>
                    <div>We are done here</div>
                </div>
              </div>
              <div class="the-imp">
                <form class="the-fx">
                    <div class="the-input">
                      <div  class="depositesucc" style=""> 
                      </div>
                    </div>
                     
                     
                    <a href="">
                      <div class="biz-btnx" style="background-color: #fff; color: #2A5AFC;">  Done </div>
                    </a>
                </form>
              </div>
          </div>
            <!-- ends-->
          
          <!-- use this alert when any validation is Successful -->
          
          <!-- validated ends-->
          <!-- random error alert-->
          <div class="erroralert deppp">
              <div class="balance-cont">
                <div class="">
                </div>
                <div class="the-bal-cont">
                    <div class="the-bal">
                      Sorry Drew 
                    </div>
                    <div>But there's a problem</div>
                </div>
              </div>
              <div class="the-imp">
                <form class="the-fx">
                    <div class="the-input">
                      <div  class="withdrawerr" style=""> 
                      </div>
                    </div>
                    <div class="query">Process failed</div>
                    <div class="">
                      There was an error performing this action, check your process and try again.
                      <br>
                      If it continues, contact us and our team would get back to you in no time
                    </div>
                    <a href="">
                      <div class="biz-btnx"> close </div>
                    </a>
                    <div>  or</div>
                    <div> <a id="fundn"> contact my account manager </a> </div>
                </form>
              </div>
          </div>
          <!-- error ends-->
          <!-- alerts end-->
  