
<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="index";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Home - <?php echo $title;?></title>
</head>

<body id = "index_background">
      <?php include("includes/header.php");?>
  <div class = "home">
    <div class = "front">
      <p class = "front-title1">
        WALT YUFU MO / 莫 瑜 夫
      </p>
      <hr class = "separator">
      <p class = "front-title2">
        ELECTRICAL & COMPUTER ENGINEER
      </p>
      <p class = "front-title2">
        SOFTWARE DEVELOPER
      </p>
    </div>

    <div class = "page_footer">

    <?php include("includes/footer.php");?>
    </div>

  </div>


</body>
</html>
