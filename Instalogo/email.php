
<html>
<body>

Welcome <?php echo $_POST['name']; ?><br>
Your email address is: <?php echo $_POST['email']; ?>

</body>
</html>

<?php
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  //Validate first
  if(empty($name)||empty($email)) {
    echo "Name and email are mandatory!";
    exit;
  }

  if(IsInjected($email)) {
    echo "Bad email value!";
    exit;
  }

  $email_from = $email;
  $email_subject = 'Contact - ' + $name;
  $email_body = $message

  $to = "kresshy@gmail.com"; 
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";
  
  mail($to, $email_subject, $email_body, $headers);

  // header('Location: index.html');

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
