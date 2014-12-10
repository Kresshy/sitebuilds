
<?php

echo "My first PHP script!";

?>


<?php
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  echo "$name $email";

  
  //Validate first
  if(empty($name)||empty($email)) {
    echo "Name and email are mandatory!\n\n";
    exit;
  } else {
    echo "everything is filled right\n\n";
  }
  
  
  if(IsInjected($email)) {
    echo "Bad email value!\n\n";
    exit;
  } else {
    echo "this is a valid email address\n\n";
  }
  
  $email_from = $email;
  $email_subject = "Contact $name";
  $email_body = $message;

  $to = "kresshy@gmail.com"; 
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";
  
  echo "\n\n $email_from\n $email_subject\n $email_body\n $to\n $headers\n";

  mail($to, $email_subject, $email_body, $headers);

  header('Location: index.html');

  // Function to validate against any email injection attempts
  function IsInjected($str) {
    $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str)) {
      return true;
    } else {
      return false;
    }
  }
?>
