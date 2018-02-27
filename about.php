<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="about";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Home - <?php echo $title;?></title>
</head>

<body id = "about_background">

  <?php include("includes/header.php");?>
  <div class = "container">
    <div class = "page_header">
      <h3 class = "page_header">
        ABOUT WALT
      </h3>
    </div>
    <p class = "general">
      I am currently studying Electrical and Computer Engineering as a master student in Cornell University, chasing for a career in Software Engineering.
    </p>
    <p class = "general">
      I wonder what's next..
    </p>

    <hr class = "separator">

    <div class = "row text-left push-top-lg push-bottom-lg">
      <div class = "col_school col_yali col-sm-4">
        <p class = "bio-text">
          Born and raised in Changsha where I attended Yali middle school.
          Three years in Yali really made me become a positive person with various interests, hobbies and friends as well.
          This is where Walt was born.
        </p>
      </div>

      <div class = "col_school col_southeast col-sm-4">
        <p class = "bio-text">
          I did my undergrad in Southeast University, and graduated in Automation Engineering in 2017.
          During this period, I spent effort in research, projects and classes in Engineering.
          This is where I found Software Engineering so appealing.
        </p>
      </div>

      <div class = "col_school col_cornell col-sm-4">
        <p class = "bio-text">
          From China to America, from SEU to Cornell, I never stopped chasing what I want.
          Majoring in ECE, I am diving into the most advanced fields in computing like Machine learning and Software Development.
          This is where the dream started.
        </p>
      </div>
    </div>

  </div>
  <div style = "margin: 100px">
  </div>
  <?php include("includes/footer.php");?>


</body>
</html>
