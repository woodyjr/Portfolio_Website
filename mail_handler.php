<?php 
if(isset($_POST['submit'])){
    

    $to = "woodyjr@mail.uc.edu"; // this is your Email address
    $from = $_POST['inputEmail']; // this is the sender's Email address
    $name = $_POST['inputName'];
    $subject = "Portfolio Site";
    $subject2 = "Copy of your form submission";
    $message = $name . " emailed you:" . "\n\n" . $_POST['inputMessage'];
    $message2 = "Copy of your message to Josh Woody" . "\n\n" . $_POST['inputMessage'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header("location: http://jw00dy.com",  true,  301 );  exit;

    
  }
?>