<?php
//var_dump($_POST);
//if they pressed the button, pull out the user inputs
if($_POST['did_send'] == 1){

    // create variables from inputs and sanitize
    $senderName = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $senderAddress= trim(filter_var($_POST['address'], FILTER_SANITIZE_STRING));
    $senderEmail = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $senderType = trim(filter_var($_POST['type'], FILTER_SANITIZE_STRING));
    $senderZip = trim(filter_var($_POST['zip'], FILTER_SANITIZE_URL));
    $senderCity = trim(filter_var($_POST['city'], FILTER_SANITIZE_STRING));
    $senderState = trim(filter_var($_POST['state'], FILTER_SANITIZE_STRING));
    $senderTshirt = trim(filter_var($_POST['tshirt'], FILTER_SANITIZE_STRING));
    $chname = trim(filter_var($_POST['chname'], FILTER_SANITIZE_STRING));
    $address = trim(filter_var($_POST['baddress'], FILTER_SANITIZE_STRING));
    $bcity = trim(filter_var($_POST['bcity'], FILTER_SANITIZE_STRING));
    $bstate = trim(filter_var($_POST['bstate'], FILTER_SANITIZE_STRING));
    $bzip = trim(filter_var($_POST['bzip'], FILTER_SANITIZE_STRING));
    

    //VALIDATION 
    $valid = true;
    if($senderName == ''){
        $valid = false;
    }
    if($senderAddress == ''){
        $valid = false;
    }
    if($senderEmail == ''){
        $valid = false;
    }
    if( ! filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
        //double negative, checking if it is NOT a valid email
        $valid = false;
    }
    if($senderType == ''){
        $valid = false;
    }
    if($senderZip == ''){
        $valid = false;
    }
    if($senderCity == ''){
        $valid = false;
    }
    if($senderState == ''){
        $valid = false;
    }
    if($senderTshirt == ''){
        $valid = false;
    }
    if($chname == ''){
        $valid = false;
    }
    if($address == ''){
        $valid = false;
    }
    if($bcity == ''){
        $valid = false;
    }
    if($bstate == ''){
        $valid = false;
    }
    if($bzip == ''){
        $valid = false;
    }

    // IMPORTANT - Change these lines to be appropriate for your needs - IMPORTANT !!!!!!!!!!!!!!!!!!
    if($valid){
    $to = "morgannall0131@platt.edu";
    $from = "$senderEmail";
    $subject = "Walk For Animals Registration";
    // Modify the Body of the message however you like
    $message = "Form info:\n

        Name:  $senderName\n
        Address: $senderAddress $senderCity $senderState $senderZip\n
        Email:  $senderEmail\n
        Registration Type: $senderType\n
        Tshirt Size: $senderTshirt\n
        Cardholder Name: $chname\n
        Carholder Address: $baddress $bcity $bstate $bzip\n";

        // Build $headers Variable
        $headers = "From: $from\r\n";
        $headers .= "Reply-to: $senderEmail\r\n";

    //send the mail!
    $mail_sent = mail($to, $subject, $message, $headers);

    //success/error
    if($mail_sent == 1){
        //success
        $display_msg = 'Thank you for registering ' .$senderName.'. We can\'t wait to see you!';
        $status = 'success';
        //to open a new thank you page use: header( 'Location: thankYou.html' ) ;
    }else{
        //failure
        $display_msg = 'Oh no, something went wrong, and the form was not submitted. Please try again, we really want you there';
        $status = 'notsent';
    }
}else{
    //failure
    $display_msg = 'Oh no, you didn\'t complte the form. Please try again, we really want you there';
    $status = 'notsent';
}//if valid

}//if did_send

// echo  "message: $display_msg";
// echo "status: $status";
// echo $mail_sent;
// echo $valid;

?>
