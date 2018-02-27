<?php
include("includes/init.php");
include("includes/projects.php");
// declare the current location, utilized in header.php
$current_page_id="project";

// otherwise positive.
function print_projects(){
  global $projects_time;
  global $projects_detail;
  foreach($projects_time as $name => $time) {
    echo "<div>";
    echo "<div id = 'projects_print' >";
    echo "<h3> $name </h3>";
    echo "<p> $time[0]";
    echo " to ";
    echo "$time[1] </p>";
    echo "</div>";

    echo "<div id = 'detail_print'><ul>";
    foreach($projects_detail[$name] as $detail) {
      echo "<li>$detail</li>";
    }
    echo "</ul></div>";
    echo "</div>";
  }
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

<body id = "project_background" >
  <?php include("includes/header.php");?>
  <div class = "container">
    <div class = "page_header">
      <h3 class = "page_header">
        PROJECTS
      </h3>
    </div>

    <p class = "general">
      My focus has taken a natural progression from embedded system, to image processing,
      to robotics, to machine learning, to web, IOS and Android development.
    </p>

    <hr class = "separator">

    <?php
    sort_projects_by_time();
    print_projects();
    ?>


  </div>
  <div style = "margin: 100px">
  </div>
  <?php include("includes/footer.php");?>
</body>
</html>
