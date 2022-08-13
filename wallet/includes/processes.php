<?  
    session_start();
    // include_once "../../includes/dbconnection.php";
    $db_host = "localhost";
    $db_user = "binaqfcu_binancevestu1";
    $db_pass = "@mikord09";
    $db_name = "binaqfcu_binanceVest-db";
    
    
    // Create connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name);

    // $myfile = fopen("log.txt", "a") or die("Unable to open file!"); // Open or create log files
    // $current_date = date('Y-m-d h:i:s a'); // the current date
    // $user_id = $_SESSION["s_user_id"];
    // $email = $_SESSION["s_email"];
    // $transaction_code = $_SESSION["s_tranx_code"];

    function test_input($data) {
        $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
	
	
// 	// get the updated account values
//     $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
// 	$result = mysqli_query($conn, $sql);
// 	$result_check = mysqli_num_rows($result);
// 	if($result_check > 0){
// 		if($row = mysqli_fetch_assoc($result)){
// 	    	/// 
//         	$spill_off = $row["spill_off"]; // get spill_off value
//         	$contract_profit = $row["contract_profit"]; // get contract_profit value 
//         	$current_plan = $row["current_plan"]; // get current_plan value
//         	$phone = $row["phone"]; // get phone value 
//         	$firstname = $row["firstname"]; // get firstname value
//             $lastname = $row["lastname"]; // get lastname value
//             $username = $row["username"];
//             $dispensible_amount = $row['dispensible'];
//             $tranx_pin = $row["tranx_pin"];
//             $special = $row['special'];
// 		}
// 	}
	
// 	// get the number of referrals done 
//     $sql = "SELECT * FROM rewards WHERE beneficiary_id = '$user_id' AND reward_type_id = 1";
// 	$result = mysqli_query($conn, $sql);
// 	$contract_profit_count = mysqli_num_rows($result);
	
// 	// get the number of spil off available
//     $sql = "SELECT * FROM rewards WHERE beneficiary_id = '$user_id' AND reward_type_id = 2";
// 	$result = mysqli_query($conn, $sql);
// 	$spill_off_count = mysqli_num_rows($result);
    
//     // get the number of contracts done 
//     $sql = "SELECT * FROM transactions1 WHERE sender_email = '$email'";
// 	$result = mysqli_query($conn, $sql);
// 	$contracts_count = mysqli_num_rows($result);
	
// 	// get the account_balance and pending amount
// 	$account_balance = $current_plan + $dispensible_amount;
// 	$pending_amount =  $current_plan;
	
	
	
	

    // #################################################################################################
    // ################################################################################################
    /**
    *  // Withdrawal POST Request
    */
    if(isset($_POST["method"]) && isset($_POST["withdrawal"])){
        // disable withdrawal if account is special
        if($special){
            echo 'not allowed';
        }else{
            // check if there is a pending withdrawals
        	$pending_withdrawal_count = 0;
            $sql = "SELECT * FROM transactions2 WHERE receiver_email = '$email' AND status_id = 2";
        	$result = mysqli_query($conn, $sql);
        	$pending_withdrawal_count = mysqli_num_rows($result);
            
    		$amount = test_input($_POST["amount"]);
    		$method = test_input($_POST["method"]);
    		$status_id = 2; // the status Id results to pending
    	    // check if the dispensile amount is enough to make the withdrawal
    		if(($amount > $dispensible_amount) || ($dispensible_amount == 0)){
    		    echo 'insufficient';
    		}elseif($pending_withdrawal_count > 0){ // check if there is a pending withdrawals
    		    echo 'pending';
    		}else{
    		    if($method == 'bank'){
    		        $bank_name = test_input($_POST["bank_name"]); 
            		$account_name = test_input($_POST["account_name"]);
                    $account_number = test_input($_POST["account_number"]);
                    
                    $sql = "INSERT INTO transactions2 (receiver_name,receiver_email,amount,status_id,withdrawal_method,bank_name,account_name,account_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_prepare($conn,$sql);
                    mysqli_stmt_bind_param($stmt,'ssiissss', $username, $email, $amount, $status_id, $method, $bank_name, $account_name, $account_number);
                    mysqli_stmt_execute($stmt);
                    echo 'inserted'; //
        		}elseif($method == 'crypto'){
        		    $wallet_address = test_input($_POST["wallet_address"]);
        		    
        		    $sql = "INSERT INTO transactions2 (receiver_name,receiver_email,amount,status_id,withdrawal_method,wallet_address) VALUES (?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_prepare($conn,$sql);
                    mysqli_stmt_bind_param($stmt,'ssiiss', $username, $email, $amount, $status_id, $method, $wallet_address);
                    mysqli_stmt_execute($stmt);
                    echo 'inserted'; // 
        		}else{
        		    fwrite($myfile, "\n Method Null ");
        		}
        		$sql = "UPDATE users SET dispensible = dispensible - ? WHERE email = ?";
                $stmt = mysqli_prepare($conn,$sql);
                mysqli_stmt_bind_param($stmt, 'is', $amount, $email);
                // Execute the statement.
                mysqli_stmt_execute($stmt);
    		}
        }
	}
    
    
    
    // #################################################################################################
    // ################################################################################################
    /**
    * // Account detail update (email and phone)
    **/
    if(isset($_POST["update"]) && ($_POST["update"] == 'contact')){
		$username = test_input($_POST["username"]);
		$phone = test_input($_POST["phone"]);
		$firstname = test_input($_POST["firstname"]);
		$lastname = test_input($_POST["lastname"]);
		$phone_validate = false;
		
// 		// check if email is valid or not
// 		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
// 		    $email_validate = true;
//     	}else{
//     	    echo 'invalid email';
//     	    $email_validate = false;
//     	}
    	// check if number is valid or not
        if(preg_match("/^[0-9]{3}[0-9]{4}[0-9]{4}$/", $phone)) {
            $phone_validate = true;
        }else{
            echo 'invalid phone';
            $phone_validate = false;
        }
        // // check if email already exists
        // $sql = "SELECT * FROM users WHERE email = '$email'";
        // $result = mysqli_query($conn, $sql);
        // $result_check = mysqli_num_rows($result);
        // if($result_check > 0){
        //     echo 'email exists';
        //     $email_validate = false;
        // }else{
        // 	$email_validate = true;
        // }
        
        if($phone_validate){
            
            $sql = "UPDATE users SET username = ?, phone = ?, firstname = ?, lastname = ? WHERE user_id = ?";
            $stmt = mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($stmt, 'sssss', $username, $phone, $firstname, $lastname, $user_id);
            // Execute the statement.
            mysqli_stmt_execute($stmt);
            echo 'updated';
        }
    }
    
    
    /**
    * // password update
    **/
    if(isset($_POST["update"]) && ($_POST["update"] == 'password')){
        $password = test_input($_POST["password"]);
		$new_password = test_input($_POST["new_password"]);
		$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        
        $sql = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);
		$result_check = mysqli_num_rows($result);
		if($result_check > 0){
			if($row = mysqli_fetch_assoc($result)){
		    	//de-hashing the password
				$hashed_password_check = password_verify($password, $row["password"]);
				if($hashed_password_check == false){
					echo 'invalid password';
				}elseif($hashed_password_check == true){
				    $sql = "UPDATE users SET password = ? WHERE user_id = ?";
                    $stmt = mysqli_prepare($conn,$sql);
                    mysqli_stmt_bind_param($stmt, 'ss', $hashed_password, $user_id);
                    // Execute the statement.
                    mysqli_stmt_execute($stmt);
                    echo 'updated';
				}
			}
		}
        
    }
    
    
    /**
    * // pin update
    **/
    if(isset($_POST["update"]) && ($_POST["update"] == 'pin')){
        $sent_tranx_pin = test_input($_POST["tranx_pin"]);
		$new_pin = test_input($_POST["new_pin"]);
		
		
        if(($sent_tranx_pin == $tranx_pin) == false){ // check if the pin matches
			echo 'invalid pin';
		}elseif(($sent_tranx_pin == $tranx_pin) == true){
		    $sql = "UPDATE users SET tranx_pin = ? WHERE user_id = ?";
            $stmt = mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($stmt, 'ss', $new_pin, $user_id);
            // Execute the statement.
            mysqli_stmt_execute($stmt);
            echo 'updated';
		}
        
    }
    
    
    
    // #################################################################################################
    // ################################################################################################
    /**
    * // Recording funds
    **/
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reference'])){  
        fwrite($myfile, "\n ##################################################"); // log division
      //set reference to a variable @ref
        $reference = $_POST['reference'];
        date_default_timezone_set('Europe/London');
		$username = mysqli_real_escape_string($conn,test_input($_POST['username']));
		$email = mysqli_real_escape_string($conn,test_input($_POST['email']));
		$phone = mysqli_real_escape_string($conn,test_input($_POST['phone']));
		$amount = mysqli_real_escape_string($conn,test_input($_POST['amount']));
		$refered_id = mysqli_real_escape_string($conn,test_input($_POST['refered_id'])); // referral Id of the host
		$payment_method = mysqli_real_escape_string($conn,test_input($_POST['payment_method'])); // payment method
		
        
        if($payment_method == 'c_card'){ // if the payment method is card payment // ################################################################################################# #################################################################################################
            //The parameter after verify/ is the transaction reference to be verified
            $url = 'https://api.paystack.co/transaction/verify/'.$reference;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt(
              $ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer sk_live_9f5dfef370aaf96d442dcd2e9d6f6dbb2924dc32']
            );
            
            //send request
            $request = curl_exec($ch);
            //close connection
            curl_close($ch);
            //declare an array that will contain the result 
            $result = array();
            
            if ($request) {
              $result = json_decode($request, true);
            }
            
            if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
                //Perform necessary action
                fwrite($myfile, "\n ".$current_date.": Funding Successful"); // Log the payment status
                fwrite($myfile, "\n Email: ".$email); // Log the Senders Email address 
                fwrite($myfile, "\n Reference: ".$reference); // Log Paymrnt Reference
                
                
                // store the transaction
                $sql = "INSERT INTO transactions1 (sender_name, sender_email, amount, payment_method, tranx_date, reference, refered_id, status_id) 
        				VALUES ('$username', '$email', '$amount', '$payment_method', '$current_date', '$reference', '$refered_id', 1)";
        		if(mysqli_query($conn, $sql)){
        			fwrite($myfile, "\n ".$current_date.": Transaction Recorded"); // Log the payment status
        		}else{
        			fwrite($myfile, "\n ".$current_date.": Transaction Record Failed");
        		}
        		
        		$sql = "UPDATE users SET dispensible = dispensible + '$amount' WHERE email = '$email'";
            	if(mysqli_query($conn, $sql)){
                    fwrite($myfile, "\n ".$amount.":  Fund record Sucessful");
                }else{
                     fwrite($myfile, "\n ".$amount.":  Fund record Failed");
                }
        		
        		
            }
        
        
        }elseif($payment_method == 'crypto'){ // if the payment method is crypto payment // ################################################################################################# #################################################################################################
            //The parameter after verify/ is the transaction reference to be verified
            $url = 'https://api.paylot.co/transactions/verify/'.$reference;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt(
              $ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer pyt_sk-65d25af7ac09411895fb9678acbecef8']
            );
            
            //send request
            $request = curl_exec($ch);
            //close connection
            curl_close($ch);
            //declare an array that will contain the result 
            $result = array();
            
            if ($request) {
              $result = json_decode($request, true);
            }
            
            if(($result['sent']) && ($result['confirmed']) && ($result['amount'] == $result['amountSent'])){
                //Perform necessary action
                fwrite($myfile, "\n ".$current_date.": Funding Successful"); // Log the payment status
                fwrite($myfile, "\n Email: ".$email); // Log the Senders Email address 
                fwrite($myfile, "\n Reference: ".$reference); // Log Paymrnt Reference
                
                
                // store the transaction
                $sql = "INSERT INTO transactions1 (sender_name, sender_email, amount, payment_method, tranx_date, reference, refered_id, status_id) 
        				VALUES ('$username', '$email', '$amount', '$payment_method', '$current_date', '$reference', '$refered_id', 1)";
        		if(mysqli_query($conn, $sql)){
        			fwrite($myfile, "\n ".$current_date.": Transaction Recorded"); // Log the payment status
        		}else{
        			fwrite($myfile, "\n ".$current_date.": Transaction Record Failed");
        		}
        		
        		$sql = "UPDATE users SET dispensible = dispensible + '$amount' WHERE email = '$email'";
            	if(mysqli_query($conn, $sql)){
                    fwrite($myfile, "\n ".$amount.":  Fund record Sucessful");
                }else{
                     fwrite($myfile, "\n ".$amount.":  Fund record Failed");
                }
        		
            }
            
            
        }else{
            fwrite($myfile, "\n ".$current_date.": Transaction was unsuccessful on User Email :".$email);
        }
    }
    
    
    
    // #################################################################################################
    // ################################################################################################
    /**
    * // Transfer to others(sharing is caring)
    **/
    
    // check is transaction code exists
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['code_check'])){
        $recipient_tranx_code = test_input($_POST['recipient_tranx_code']);
        
        if(!($transaction_code == $recipient_tranx_code)){
            $sql = "SELECT username FROM users WHERE tranx_code = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, 's',$recipient_tranx_code);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt,$recipient_username);
            mysqli_stmt_fetch($stmt);
            
            echo $recipient_username;
        }
    }
    
    // do the transfer
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['transfer'])){
        // disable transfer if account is special
        if($special){
            echo 'not allowed';
        }else{
            $recipient_tranx_code = mysqli_real_escape_string($conn,test_input($_POST['recipient_tranx_code']));
            $amount = mysqli_real_escape_string($conn,test_input($_POST['amount']));
            $pin = mysqli_real_escape_string($conn,test_input($_POST['pin']));
            $pin_validate = false;
            $amount_validate = false;
            
            if(($pin == $tranx_pin) == false){ // check if the pin matches
                $pin_validate = false;
    			echo 'wrong pin';
    		}elseif(($pin == $tranx_pin) == true){
    		    $pin_validate = true;
    		    //####################################
    		    if(!($amount <= $dispensible_amount)){ // check if the balance is sufficient
                    $amount_validate = false;
        			echo 'insufficient balance';
        		}elseif(($amount <= $dispensible_amount)){
        		    $amount_validate = true;
        		}
    		}
    		
    		
    		if($pin_validate && $amount_validate){
    		    // deduct the amount from the sender's balance
    		    $sql = "UPDATE users SET dispensible = dispensible - ? WHERE email = ?";
                $stmt = mysqli_prepare($conn,$sql);
                mysqli_stmt_bind_param($stmt, 'ss', $amount, $email);
                // Execute the statement.
                mysqli_stmt_execute($stmt);
    		    
    		    // increment the receiver's balance
    		    $sql = "UPDATE users SET dispensible = dispensible + ? WHERE tranx_code = ?";
                $stmt = mysqli_prepare($conn,$sql);
                mysqli_stmt_bind_param($stmt, 'ss', $amount, $recipient_tranx_code);
                // Execute the statement.
                mysqli_stmt_execute($stmt);
                echo 'transferred'; // echo the response
                
                // record the transfer
                $sql = "INSERT INTO transactions3 (sender_email, amount, receiver_tranx_code) VALUES ('$email', '$amount', '$recipient_tranx_code')";
            	if(mysqli_query($conn, $sql)){
            		fwrite($myfile, "\n ".$current_date.": Transfer Recorded. from: ".$email); // Log the tranfer status
            	}else{
            		fwrite($myfile, "\n ".$current_date.": Transfer Record Failed. from: ".$email); // Log the tranfer status
            	}
    		}
        }
    }
    
    
    
    // #################################################################################################
    // ################################################################################################
    /**
    * // Reactivate another contract
    **/
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reactivate'])){
        $contract_amount = test_input($_POST['contract_amount']);
        $referee_tranx_code = mysqli_real_escape_string($conn,test_input($_POST['referee_tranx_code']));
        $active = 1;
        
        if($current_plan > 0){
            echo "active";
        }elseif($contract_amount > $dispensible_amount){
            echo 'insufficient balance';
        }elseif(($current_plan <= 0) && ($contract_amount <= $dispensible_amount)){
            // deduct the amount for the contract plan and update the contract plan
            $sql = "UPDATE users SET dispensible = dispensible - ?, current_plan = ?, active = ? WHERE email = ?";
            $stmt = mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($stmt, 'ssss', $contract_amount, $contract_amount, $active, $email);
            // Execute the statement.
            mysqli_stmt_execute($stmt);
            
            echo 'reactivated';
        }
        
        
        
        if(!($transaction_code == $referee_tranx_code)){
            // Reward the referee
            $sql = "SELECT * FROM `users` WHERE tranx_code = '$referee_tranx_code'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check > 0){
                while($each = mysqli_fetch_assoc($result)){
                    $host_id = $each['user_id']; // get the value of the referee id
            		$host_plan = intval($each['current_plan']); // get the value of the referee plan
            		$contract_amount = intval($contract_amount);
            		if($contract_amount == $host_plan){ // Checked if the referee plan is the same as New User plan
            		    $contract_profit = (30/100)*$contract_amount; // get the 30% of the plan amount
            			$sql = "UPDATE users SET contract_profit = contract_profit + '$contract_profit', dispensible = dispensible + '$contract_profit' WHERE tranx_code = '$referee_tranx_code'";
            			if(mysqli_query($conn, $sql)){
                            fwrite($myfile, "\n ".$contract_profit.": CP Reward Sucessful");
                            // record the reward
                            $sql = "INSERT INTO rewards (reward_type_id, beneficiary_id, reward_amount) VALUES (1, '$host_id', '$contract_profit')";
                    		if(mysqli_query($conn, $sql)){
                    			fwrite($myfile, "\n ".$current_date.": Reward Recorded"); // Log the payment status
                    		}else{
                    			fwrite($myfile, "\n ".$current_date.": Reward Record Failed");
                    		}
            
                        }else{
                             fwrite($myfile, "\n ".$contract_profit.": CP Reward Failed");
                        }
            		}else{ // Checked if the referee plan is the same as New User plan
            		    if($contract_amount >= 1000){ // check if plan amount is up to 1000
            		        $spill_off  = (30/100)*$contract_amount; // get the 30% of the plan amount
            		    }elseif($contract_amount >= 200){ // check if plan amount is up to 200
            		        $spill_off  = (20/100)*$contract_amount; // get the 20% of the plan amount
            		    }else{
            		        $spill_off  = (10/100)*$contract_amount; // get the 10% of the plan amount
            		    }
            			$sql = "UPDATE users SET spill_off = spill_off + '$spill_off', dispensible = dispensible + '$spill_off' WHERE tranx_code = '$referee_tranx_code'";
            			if(mysqli_query($conn, $sql)){
                            fwrite($myfile, "\n ".$spill_off.": SP Reward Sucessful");
                            // record the reward
                            $sql = "INSERT INTO rewards (reward_type_id, beneficiary_id, reward_amount) VALUES (2, '$host_id', '$spill_off')";
                    		if(mysqli_query($conn, $sql)){
                    			fwrite($myfile, "\n ".$current_date.": Reward Recorded"); // Log the payment status
                    		}else{
                    			fwrite($myfile, "\n ".$current_date.": Reward Record Failed");
                    		}
                        }else{
                             fwrite($myfile, "\n ".$spill_off.": SP Reward Failed");
                        }
            		}
            	}
            }else{
            	// do nothing
            }
        }
        
        		
    }
    
    
    /**
    * GET USER BALANCE
    **/
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['getbalance'])){
        // check if the user session is still active
        if($_SESSION['username']){
            $username = $_SESSION['username'];
            
            $sql = "SELECT acc_balance FROM create_acc WHERE user_id = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, 's',$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt,$acc_balance);
            mysqli_stmt_fetch($stmt);
            
            $data = [ 'balance' => $acc_balance, 'error' => false, 'message' => 'balance available' ];
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($data);
        }else{
            $data = [ 'balance' => 0, 'error' => true, 'message' => 'Session is lost. Login to continue' ];
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($data);
        }
    }
    
    
    // fclose($myfile);
?>