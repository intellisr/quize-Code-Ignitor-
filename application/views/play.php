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
    <?php
      if(isset($player_name)){ 
    ?>
    <h2 class="w3-text-light-grey">Hi <?=$player_name?>, who is this?</h2>
    <?php
      }
    ?>
    <hr style="width:200px" class="w3-opacity">

    <form action="score" method="POST">
      <?php
      if(isset($quiz)){ 
        $celeb=0;
        $totalCelebs=count($quiz);
        $randomCeleb=rand(1,$totalCelebs - 1);
      ?>
      <h1>$totalCelebs <?=$totalCelebs?></h1>
      <h1>$randomCeleb  <?=$randomCeleb?></h1>

      <?php if (rand(0, 1)) { ?>

      <img src="<?=$quiz[$celeb]['image']?>" alt="celeb-img" class="w3-image" width="300px">
      <input type="hidden" id="real" name="real" value="<?=$quiz[$celeb]['id']?>">
      <p><input type="radio" name="answer" value="<?=$quiz[$celeb]['id']?>"><?=$quiz[$celeb]['name']?></p>
      <p><input type="radio" name="answer" value="<?=$quiz[$randomCeleb]['id']?>"><?=$quiz[$randomCeleb]['name']?></p>

      <?php }else{ ?>

      <img src="<?=$quiz[$randomCeleb]['image']?>" alt="celeb-img" class="w3-image" width="300px">
      <input type="hidden" id="real" name="real" value="<?=$quiz[$randomCeleb]['id']?>">
      <p><input type="radio" name="answer" value="<?=$quiz[$celeb]['id']?>"><?=$quiz[$celeb]['name']?></p>
      <p><input type="radio" name="answer" value="<?=$quiz[$randomCeleb]['id']?>"><?=$quiz[$randomCeleb]['name']?></p>

      <?php } ?>

      <?php
      }
      ?>
      
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-submit"></i> SUBMIT
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>

  <?php require 'common/footer.php'; ?>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
