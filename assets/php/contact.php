<?php
 $to = "mahamadouniakate120@gmail.com";
 $subject = $_POST['subject'];
 $body = "From, ".$_POST['name']."\n\n"."Email, ".$_POST['email']."\n\n".$_POST['message'];
 if (mail($to, $subject, $body)) {
  $responseArray = array('class' => 'alert alert-success', 'message' => 'Merci, le message a été envoyé. Nous reviendrons vers vous prochainement!');
  } else {
$responseArray = array('class' => 'alert alert-danger', 'message' => 'There was an error while submitting the form. Please try again later.');
     
  }

    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;

 ?>