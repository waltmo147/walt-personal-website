<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="contact";

//enrollment form data
if (isset($_POST["submit"])) {
  $first_name = $_POST["first"];
  $email = $_POST["email"];
  $last_name = $_POST["last"];
  $phone_number = $_POST["phone_number"];
  $messege = $_POST["messege"];
}

function get_input() {
  global $email;
  global $first_name;
  global $last_name;
  global $phone_number;
  global $messege;

  //email
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

  //first name
  $first_name = filter_input(INPUT_POST, "first", FILTER_SANITIZE_STRING);
  if(!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
     $first_name = '';
  }

  //first name
  $last_name = filter_input(INPUT_POST, "last", FILTER_SANITIZE_STRING);
  if(!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
     $last_name = '';
  }

  // phone_number
  $phone_number = filter_input(INPUT_POST, "phone_number", FILTER_SANITIZE_STRING);
  if (!preg_match("/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/", $phone_number)) {
    $phone_number = '';
  }

  // Messege
  $messege = filter_input(INPUT_POST, "messege", FILTER_SANITIZE_STRING);
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Home - <?php echo $title;?></title>
</head>

<body id = "contact_background">
  <?php include("includes/header.php");?>
  <div class = "container">
    <div class = "thank">
      <?php
      $first_name = filter_input(INPUT_POST, "first", FILTER_SANITIZE_STRING);
      if(!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
         $first_name = '';
      }
      ?>
      <p>Hi, <?php echo $first_name;?></p>
      <p>Thank you for reaching out!</p>
      <p>I am so flattered!</p>
      <p>I will contact you soon!</p>

    </div>
  </div>
  <div style = "margin: 100px">
  </div>
  <?php include("includes/footer.php");?>
</body>
</html>
