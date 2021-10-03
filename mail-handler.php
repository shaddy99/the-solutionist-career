<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if( isset($_POST['apply-button']) ){
    // Send to this email address
    $toEmailAddress = "info@the-solutionist.com";

    // Get from email address from form post
    $fromEmailAddress = $_POST['register_email']; 

    // Get Full name from form post
    $firstName = $_POST['register_first_name'];
    $lastName = $_POST['register_last_name'];
    
    $fullName = $firstName .' '. $lastName;
    
    
    // The email subject
    $emailSubject = "Contact Us Form Submission at demo.com";
    
    // Copy email subject line 
    $copyEmailSubject = "Copy of Contact Us Form Submission at demo.com";

    // The email body string 
    $emailBody = $fullName . " wrote the following:" . "\n\n" . $message;
    
    // The copy email body string
    $copyEmailBody = "Here is a copy of your message " . $fullName . "\n\n" . $message;

    // Email headers for both orignal and copy emails
    $emailHeaders = "From:" . $fromEmailAddress;
    $copyEmailHeaders = "From:" . $toEmailAddress;

    // Send the orignal and copy emails
    mail($toEmailAddress,$emailSubject,$emailBody,$emailHeaders);
    mail($fromEmailAddress,$copyEmailSubject,$copyEmailBody,$copyEmailHeaders); 
    
    // Redirect User to thank you page
    header('Location: https://the-solutionist.com/thankYou.html');
    }
    
?>
