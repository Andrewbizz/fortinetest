<?php

    session_start();

    include("./include_files/functions.php");
    include("./include_files/validate_functions.php");
    
    // Declaring and hoisting the variables
    $username = "";
    $email    = "";
    $errors = array();
    $_SESSION['success'] = "";
    
    /* DB Connection Initialization */
   $db_host = "localhost";
   $db_user = "binaqfcu_binancevestu1";
   $db_pass = "@mikord09";
   $db_name = "binaqfcu_binanceVest-db";

    // Create connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name);

    // Check connection
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo("Connection Successful");
    }
    /* DB Connection Closing */

    $userID = $_POST["username"];
    $emailID = $_POST["inputemail"];
    $phoneID = $_POST["phone"];
    $passID = $_POST["passwrd"];
    $CpassID = $_POST["confm_passwrd"];
    $walletID = $_POST["walletid"];


    if (isset($_POST['register_user'])) {
    
        // Receiving the values entered and storing
        // in the variables
        // Data sanitization is done to prevent
        // SQL injections
        $userID = mysqli_real_escape_string($conn, $userID);
        $emailID = mysqli_real_escape_string($conn, $emailID);
        $phoneID = mysqli_real_escape_string($conn, $phoneID);
        $passID = mysqli_real_escape_string($conn, $passID);
        $CpassID = mysqli_real_escape_string($conn, $CpassID);
        $walletID = mysqli_real_escape_string($conn, $walletID);
        $balance = "0";
    
        // Ensuring that the user has not left any input field blank
        // error messages will be displayed for every blank input
        if (empty($userID)) { array_push($errors, "Username is required"); }
        if (empty($emailID)) { array_push($errors, "Email is required"); }
        if (empty($phoneID)) { array_push($errors, "Phone Number is required"); }
        if (empty($passID)) { array_push($errors, "Password is required"); }
        if (empty($CpassID)) { array_push($errors, "Password Confirmation is required"); }
        if (empty($walletID)) { array_push($errors, "Wallet ID is required"); }


    
        if ($passID != $CpassID) {
            array_push($errors, "The two passwords do not match");
            // Checking if the passwords match
        }
    
        // If the form is error free, then register the user
        if (count($errors) == 0) {
            
            // Password encryption to increase data security
            $passID = md5($passID);
            
            $token = md5($_POST['inputemail']).rand(10,9999);
            $link = "<a href='localhost/email-verification/verify-email.php?key=".$_POST['inputemail']."&token=".$token."'>Click and Verify Email</a>";
            
            // Inserting data into table
            $query="INSERT INTO `create_acc`(`user_id`, `email_id`, `phone_id`, `passwrd`, `confrmpswrd`, `email_verification_link`, `wallet_id`,`acc_balance`) 
                    VALUES ('$userID','$emailID','$phoneID','$passID','$CpassID','$token','$walletID','$balance')";
            $result = mysqli_query($conn, $query);
            if (isset($result)){

                // Storing username of the logged in user,
                // in the session variable
                
                $_SESSION['username'] = $userID;
                
                // Welcome message
                $_SESSION['success'] = "You have logged in";
                
                // Page on which the user will be
                // redirected after logging in

                $to = $_POST["inputemail"];
                $subject = "Binancevestltd Signup";
                $email_content = include("email.php");
                $message = $email_content;

                
                $header = "From:support@binancvestltd.co \r\n";
                $header .= "Cc:afgh@somedomain.com \r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";
                
                $retval = mail ($to,$subject,$message,$header);
                
                if( $retval == true ) {
                    echo "Email sent successfully...";
                }else {
                    echo "Email could not be sent...";
                }

                echo "  <html>
                            <script>
                                window.alert('Check Email for Verification');
                            </script>
                        </html>
                    ";
                redirect_to('./wallet/overview.php');   
            }else{
                echo "  <html>
                            <script>
                                window.alert('Can't perform the insertion operation');
                            </script>
                        </html>
                    ";
            }

        }else{
            echo "  <html>
                        <script>
                            window.alert('Form Submission Error');
                        </script>
                    </html>
                ";
        }
    }
       
    
    mysqli_close($conn);

    // Handle AJAX request (start)
?>
