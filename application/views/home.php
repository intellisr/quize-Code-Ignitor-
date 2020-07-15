<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<?php require 'common/head.php'; ?>
<style type="text/css">
  #sub-main{
    background-image: url("/quiz/assests/img/bg.jpg");
    opacity: 0.6;
  }

</style>
<body class="w3-black">

<?php require 'common/navbar.php'; ?>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo">Celebrity Quiz</h1>
    <p>Guess the name of the celebrity.</p>
    <!-- <img src="/quiz/assests/img/bg.jpg" alt="home-img" class="w3-image" width="60%"> -->
    <div class="w3-container w3-padding-large" id="sub-main" style="height:500px;">

      <form method="POST" action="<?=base_url()?>index.php/play/" style="height:500px;margin-top: 10%">
        <div class="w3-center">
          <p><input class="w3-input w3-center w3-padding-16" type="text" placeholder="Insert Name" required name="name"></p>
          <p>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
              <i class="fa fa-gamepad"></i> PLAY
            </button>
          </p>

        </div>
      </form>

    </div>
    
  </header>

  
  <?php require 'common/footer.php'; ?>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
