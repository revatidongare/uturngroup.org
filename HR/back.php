<?php
//Contact Number
if(isset($_POST['submit'])){
    $name = $_POST['name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
    $message = $_POST['message'];

// email code
  $to = $name;
  $subject = "Hi " . $name. " " . ", Uturn Group Organizaton....!";
  $body = '
Dear ' . $name . ',
  Thank you for Contacting .
  Kind Regards,
Uturn Group Organizaton,Pune.
  ';
  $headers = 'From: pallavi@uturngroup.org.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:contact.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $name);
  }

  // email end

  //self mail
$to_email1 = 'pallavi@uturngroup.org.com';
  $subject1 = ' Uturn Group Organizaton  ';
  $message1 = 'Customer Name: '.$name.
  "\n".
  "\n" . 'Contact Number: '.$phone.
  "\n".
  "\n" . 'Email: '.$email.
  "\n".
   "\n" . 'Message: '.$message.
  "\n".
  "\n".
  //'Message: '.$message.
 
  $headers1 = 'From: '.$name;
  mail($to_email1,$subject1,$message1,$headers1);
  //self email end

    }
    else{

      header("location:contact.php?q=101");
    }


?>
