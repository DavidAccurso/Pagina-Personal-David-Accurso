<?php

  function php_email_form_submit(){
    console.log("dentro de contact.php");

    $to      = 'davidmaccurso@gmail.com';
    $subject = 'davadssad'; // $_POST['subject'];
    $message = 'asdasdsdsad'; // add_message( $_POST['message'], 'Message', 10);
    // $headers = 'From:'  $_POST['email'] + ' '       . "\r\n" .
    //              'Reply-To:' + $_POST['email'] + ' '. "\r\n" .
    //              'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message);
  }

?>

