<?php
  require "connection.php";

  if (isset($_POST['submit'])) {
    $name = stripcslashes($_POST['name']);
    $mail = stripcslashes($_POST['email']);
    $subject = stripcslashes($_POST['subject']);
    $message = stripcslashes($_POST['message']);

    $insert = "INSERT INTO feeds(name,email,subject,message) VALUES('$name','$mail','$subject','$message')";
    //$result = $con->query($insert);
    $result = $con->query($insert) or die(mysqli_error($db));
    if ($result) {
      echo "<script>alert('Message sent successfully')</script>";

    }
    header('Location:contact.html');

  }
?>
