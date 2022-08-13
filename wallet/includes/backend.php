<?php
    session_start();
    include_once "../includes/dbconnection.php";
    $current_date = date('Y-m-d h:i:s a'); // the current date
    $myfile = fopen("log.txt", "a") or die("Unable to open file!"); // Open or create log files 
	if(!(isset($_SESSION["s_user_id"]))){
		header("location: ../login.html");
        die("Access denied");
    }
    
    
    function test_input($data) {
        $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
    
    date_default_timezone_set('Europe/London');
    $user_id = $_SESSION["s_user_id"];
    $referral_id = $_SESSION["s_referral_id"];
    $transaction_code = $_SESSION["s_tranx_code"];
    $transaction_pin = $_SESSION["s_tranx_pin"];
    
    
    // get the updated account values
    $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
        	$spill_off = $row["spill_off"]; // get spill_off value
        	$contract_profit = $row["contract_profit"]; // get contract_profit value 
        	$current_plan = $row["current_plan"]; // get current_plan value
        	$email = $row["email"]; // get email value
        	$phone = $row["phone"]; // get phone value 
        	$firstname = $row["firstname"]; // get firstname value
            $lastname = $row["lastname"]; // get lastname value
            $username = $row["username"];
            $dispensible_amount = $row['dispensible'];
            $active = $row['active'];
            $special = $row['special'];
		}
	}
	

	
	// get the number of referrals done 
    $sql = "SELECT * FROM rewards WHERE beneficiary_id = '$user_id' AND reward_type_id = 1";
	$result = mysqli_query($conn, $sql);
	$contract_profit_count = mysqli_num_rows($result);
	
	// get the number of spill off available
    $sql = "SELECT * FROM rewards WHERE beneficiary_id = '$user_id' AND reward_type_id = 2";
	$result = mysqli_query($conn, $sql);
	$spill_off_count = mysqli_num_rows($result);
    
    // get the number of contracts done 
    $sql = "SELECT * FROM transactions1 WHERE sender_email = '$email'";
	$result = mysqli_query($conn, $sql);
	$contracts_count = mysqli_num_rows($result);
	
	// get the total number of withdrawals made
	$withdrawn_amount = 0;
    $sql = "SELECT * FROM transactions2 WHERE receiver_email = '$email' AND status_id = 1";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		while($each = mysqli_fetch_assoc($result)){
	    	///
	    	$withdrawn_amount += $each['amount'];
		}
	}
	
	
	
	/*
     * Move the money in $current_plan and $contract_profit 
     * to account balance when a contract has been completed
    */
    // if($contract_profit >= ((60/100)*$current_plan)){
    //     if(($current_plan > 0)){ // check if contract plan is greater than Zero before updating
    //         $null_value = 0;
    //         $one_value = 1;
            
    //         if($special){
    //             $sql = "UPDATE users SET contract_profit = ?, spill_off = ?, dispensible = dispensible + ?, no_of_contract = no_of_contract + ? WHERE user_id = ?";
    //             $stmt = mysqli_prepare($conn,$sql);
    //             mysqli_stmt_bind_param($stmt, 'ssssi',$null_value,$null_value,$current_plan,$one_value,$user_id);
    //         }else{
    //             $sql = "UPDATE users SET current_plan = ?, contract_profit = ?, spill_off = ?, active = ?, dispensible = dispensible + ?, no_of_contract = no_of_contract + ? WHERE user_id = ?";
    //             $stmt = mysqli_prepare($conn,$sql);
    //             mysqli_stmt_bind_param($stmt, 'ssssssi',$null_value,$null_value,$null_value,$null_value,$current_plan,$one_value,$user_id);
    //         }
            
    //         mysqli_stmt_execute($stmt);
    //         $spill_off = 0;
    //         $contract_profit = 0;
    //         $current_plan = 0;
    //     }
        
    // }
	
	// get the account_balance and pending amount
	$account_balance = $current_plan + $dispensible_amount;
	$pending_amount =  $current_plan;
	
    
	
	
	fclose($myfile);
    ob_end_flush();
	
