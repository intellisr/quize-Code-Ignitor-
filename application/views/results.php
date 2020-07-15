<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<?php require 'common/head.php'; ?>
<body class="w3-black">

<?php require 'common/navbar.php'; ?>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo">Celebrity Quiz</h1>
    <p>Guess the name of the celebrity.</p>
  </header>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey">

    <h2 class="w3-text-light-grey">Results</h2>

    <hr style="width:200px" class="w3-opacity">
    <?php
      if(isset($score)){ 
    ?>
    <p><h2 class="w3-text-light-grey">Points: <?=$score?></h2></p>
    <?php
      }
    ?>
  </div>

  <?php require 'common/footer.php'; ?>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
