<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="more";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Home - <?php echo $title;?></title>
</head>

<body id = "more_background">

  <?php include("includes/header.php");?>

  <div class = "container more_container">
    <div class = "page_header">
      <h3 class = "page_header">
        WHAT DOES WALT LIKE?
      </h3>
    </div>
    <p class = "general">
      I have various interests and hobbies. I love sports. I love singing. I love movies. I love everything that happend to me!
    </p>

    <p class = "general">
      If we love the same things, contact me! Let's be friends!
    </p>

    <hr class = "separator">


    <div class = "col-sm-likes float_left">
      <p class = "likes">
        I love sports!
      </p>

      <img src = "/images/bike.jpeg" alt="sports">

      <p class = "bio-text padding">
        I love sports! I play basketball, soccer, volleyball. I play badminton, tennis, ping pong.
        And I used to do marathon ocasionally. I am recently working out in gym to keep myself fit.
      </p>
    </div>

    <div class = "col-sm-likes float_left">
      <p class = "likes">
        I love Snooker & Billiards!
      </p>

      <img src = "/images/billiard.jpg" alt="Billiards">

      <p class = "bio-text padding">
        I was really good at Billiards and I love watching Snooker games. I was the
        vice president of the Billiards club in the school. And I was ranked top 10 in
        Nanjing city among college students. Even though I don't have time for it currently,
        I still watch Snooker occasionally.
      </p>
    </div>

    <div class = "col-sm-likes float_right">
      <p class = "likes">
        I love musicals!
      </p>
      <img src = "/images/musicals.jpeg" alt="musicals">
      <p class = "bio-text padding">
        I played Enjolras in Les Misérables before. It was a school event in high school.
        That when I fell in love with the musicals. Phantom, Dear Evan Hanson and of course
        Les Mis are my favorites.
      </p>
    </div>

    <div class = "col-sm-likes float_right">
      <p class = "likes">
        I love Friends!
      </p>

      <img src = "/images/friends.jpeg" alt="friends">

      <p class = "bio-text padding">
        I watch a loooot of tv shows. Walking dead, Game of Thrones, the Big Bang Theory etc.
        But Friends has always been my favorite. It changed me a lot and motivated me to study and chase my career in the US.
      </p>
    </div>


  </div>

  <div style = "margin: 100px">
  </div>
  <?php include("includes/footer.php");?>



</body>
</html>
