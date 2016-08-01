<?php

$to = "mail@tamasbalint.com";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $message = "";

function checkPost() {

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = array("name" => "Name is required");
      return $nameErr;
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = array("name" => "Only letters and white space allowed"); 
        return $nameErr;
      }
    }
    
    if (empty($_POST["email"])) {
      $emailErr = array("email" => "Email is required");
      return $emailErr;
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = array("email" => "Invalid email format"); 
        return $emailErr;
      }
    }
      
    if (empty($_POST["message"])) {
      $message = "";
    } else {
      $message = test_input($_POST["message"]);
    }

    return TRUE;

  }
}

//====================================================

$check = checkPost();

if (!is_array($check)) {

  $subject = "Contact Me, from Portfolio website";
  $message = "Name: " . $_POST["name"] . " \r\n\r\n";
  $message .= "Email: " . $_POST["email"] . " \r\n\r\n";
  $message .= "Message: " . $_POST["message"];

  if (mail($to, $subject, $message)) {
    echo(json_encode($success = array("message" => "Your message has been sent!")));
  } else {
    echo(json_encode($error = array("error" => "Unable to send email. Please try again later.")));
  }

} else {
  echo(json_encode($error = array("error" => $check)));
}

?>


