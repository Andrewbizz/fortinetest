<?php 

// * Presence
// use trim() so empty spaces don't count
// use === to avoid false positives
// empty() consider "0" to be empty

$error = array();

function fieldname_as_text($fieldname){
    $fieldname = str_replace("_", " ,",$fieldname);
    $fieldname = ucfirst($fieldname);
    return $fieldname;
}

function has_prescence($value){
    return isset($value) && $value !== "";
}

function validate_prescences($required_fields){
    global $errors;
    foreach($required_fields as $field){
        $value = trim($_POST[$field]);
        if (!has_prescence($value)){
            $errors[$field] = fieldname_as_text($field) ." can't be blank";
        }
    } 
}

// * String length
//max length

function has_max_length($value,$max){
    return strlen($value) <= $max;
}

function validate_max_length($fields_with_max_lengths){
    global $errors;
    // Expects an assoc. array
    foreach($fields_with_max_lengths as $fields => $max){
        $value = trim($_POST[$fields]);
        if (!has_max_length($value,$max)){
            $errors[$fields] = fieldname_as_text($fields) . " is too long";
        }
    }
}

// * inclusion in a set
function has_inclusion_in($value,$set){
    return in_array($value, $set);
}
/*if( isset($_POST['ajax']) && isset($_POST['username'])&&
    isset($_POST['email'])&&
    isset($_POST['phone'])&&
    isset($_POST['amount']) ){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone =  $_POST['phone'];
        $amount =  $_POST['amount'];
 exit;
}else{
    $username  = '';
    $email = '';
    $phone =  '';
    $amount = '';
}*/
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$ok = true;
$messages = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($username)) {
     $nameErr = "Name is required";
     echo " <script>
                alert('no name');
                redirect_to('ajax_test.php');
             </script>";*
             $ok = false;
             $messages[] =  $nameErr;
   } else if (!preg_match("/^[a-zA-Z ]*$/",$name2)) {
    $nameErr = "Only letters and white space allowed";
    echo " <script>
                alert('a valid name duh');
                redirect_to('ajax_test.php');
            </script>";   
    }else {
        redirect_to('index.php');
    } 

    if (empty($email)) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["inputemail"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $ok = false;
        $messages[] =  $emailErr;
      }
    }
  
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
      // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
      }
    }

  
    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );

}
// Handle AJAX request (end)
*/



?>