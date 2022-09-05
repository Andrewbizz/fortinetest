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

   if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
   && ($_GET["action"]=="reset") && !isset($_POST["action"])){
   $key = $_GET["key"];
   $email = $_GET["email"];
   $curDate = date("Y-m-d H:i:s");
   $query = mysqli_query($con,
   "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';"
   );
   $row = mysqli_num_rows($query);
   if ($row==""){
   $error .= '<h2>Invalid Link</h2>
   <p>The link is invalid/expired. Either you did not copy the correct link
   from the email, or you have already used the key in which case it is 
   deactivated.</p>
   <p><a href="https://www.binancvestltd.co/forgot.php">
   Click here</a> to reset password.</p>';
      }else{
   $row = mysqli_fetch_assoc($query);
   $expDate = $row['expDate'];
   if ($expDate >= $curDate){
   ?>
   <br />
   <form method="post" action="" name="update">
   <input type="hidden" name="action" value="update" />
   <br /><br />
   <label><strong>Enter New Password:</strong></label><br />
   <input type="password" name="pass1" maxlength="15" required />
   <br /><br />
   <label><strong>Re-Enter New Password:</strong></label><br />
   <input type="password" name="pass2" maxlength="15" required/>
   <br /><br />
   <input type="hidden" name="email" value="<?php echo $email;?>"/>
   <input type="submit" value="Reset Password" />
   </form>
   <?php
   }else{
   $error .= "<h2>Link Expired</h2>
   <p>The link is expired. You are trying to use the expired link which 
   as valid only 24 hours (1 days after request).<br /><br /></p>";
               }
         }
   if($error!=""){
   echo "<div class='error'>".$error."</div><br />";
   }			
   } // isset email key validate end


   if(isset($_POST["email"]) && isset($_POST["action"]) &&
   ($_POST["action"]=="update")){
   $error="";
   $pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
   $pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
   $email = $_POST["email"];
   $curDate = date("Y-m-d H:i:s");
   if ($pass1!=$pass2){
   $error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
   }
   if($error!=""){
   echo "<div class='error'>".$error."</div><br />";
   }else{
   $pass1 = md5($pass1);
   mysqli_query($con,
   "UPDATE `create_acc` SET `passwrd`='".$pass1."', `trn_date`='".$curDate."' 
   WHERE `email`='".$email."';"
   );

   mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
      
   echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
   <p><a href="https://www.allphptricks.com/forgot-password/login.php">
   Click here</a> to Login.</p></div><br />';
      }		
   }
?>