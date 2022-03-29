<?php
//if they pressed the button, pull out the user inputs
if($_POST['did_send'] == 1){

    // create variables from inputs and sanitize
    $senderName= filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $senderAddress= filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $senderEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senderType = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
    $senderZip = filter_var($_POST['zip'], FILTER_SANITIZE_URL);
    $senderCity = filter_var($_POST['city'], FILTER_SANITIZE_NUMBER_INT);
    $senderState = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
    $senderTshirt = filter_var($_POST['tshirt'], FILTER_SANITIZE_STRING);

    // IMPORTANT - Change these lines to be appropriate for your needs - IMPORTANT !!!!!!!!!!!!!!!!!!
    $to = "morgannall0131@platt.edu, tiziana@platt.edu";
    $from = "$senderEmail";
    $subject = "Class form Test";
    // Modify the Body of the message however you like
    $message = "form info:

        Name:  $senderName
        Address: $senderAddress+$senderCity+$senderState+$senderZip
        Email:  $senderEmail
        Registration Type: $senderType
        Tshirt Size: $senderTshirt";

        // Build $headers Variable
        $headers = "From: $from\r\n";
        $headers .= "Reply-to: $senderEmail\r\n";

    //send the mail!
    $mail_sent = mail($to, $subject, $message, $headers);

    //success/error
    if($mail_sent == 1){
        //success
        $display_msg = 'Thank you for registering ' .$senderName.'. We cant wait to see you!';
        $status = 'success';
        //to open a new thank you page use: header( 'Location: thankYou.html' ) ;
    }else{
        //failure
        $display_msg = 'Oh no, something went wrong, and the form was not submitted. Please try again, we really want you there';
        $status = 'notsent';
    }
}
?>
