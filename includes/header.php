<header>
  <!-- <h1 id="title"><?php echo $title; ?></h1> -->

  <nav id="menu">
    <ul>
      <?php
      foreach($pages as $page_id => $page_name) {
        // utilize the current location to style it differently
        if ($page_id == $current_page_id && $page_id != "index") {
          $css_id = "id='current_page'";
        } else if ($page_id == "index") {
          $css_id = "id='index_page'";
        }
        else {
          $css_id = "";
        }
        echo "<li><a " . $css_id . " href='" . $page_id. ".php'>$page_name</a></li>";
      }
      ?>
    </ul>
  </nav>
</header>
