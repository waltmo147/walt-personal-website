<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="contact";
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
    <form id="insurance_form" method="post" action="submit.php">
      <fieldset>
        <legend>Contact Walt</legend>

          <ul>
            <li class="app_note">What shall I call you?<font color="red"> *</font></li>
            <li class="app_order">
              <input type="text" name="last" required/>
              <input type="text" name="first" class = "last" required/>
            </li>

            <div class = "first_p">First</div>
            <div class = "first_p">Last</div>

            <li class="app_note email_t">Email<font color="red"> *</font></li>
            <li class="app_order">
              <input type="text" name="email" class="email" required/>
            </li>

            <li class="app_note">Phone</li>
            <li class="app_order">
              <input type="text" name="phone_number"/>
            </li>

            <div class = "first_p">(xxx) xxx-xxxx</div>

            <li class="app_note email_t">Message</li>
            <li class="app_order">
              <textarea class = "messege" name="messege"></textarea>
            </li>

          </ul>

        <input id="app_button" type="submit" name="submit" value="Submit"/>
      </fieldset>
    </form>
  </div>
  <div style = "margin: 100px">
  </div>
  <?php include("includes/footer.php");?>
</body>
</html>
