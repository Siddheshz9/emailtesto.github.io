<<?php
  if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $to='siddheshadsv@gmail.com';
    $subject='Form Sumbit data';
    $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote: "."\n\n".msg;
    $headers="Form: ".$email;

    if (mail($to, $subject, $message, $headers) {
      echo "<h1>Sent Succsesfully! Thankyou"." ".$name", We will contact you soon!</h1>";
    }
    else {
      echo "<h1>Sorry Something went wrong!</h1>";
    }
  }
?>
