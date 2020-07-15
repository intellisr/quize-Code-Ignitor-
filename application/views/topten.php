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
    <h1 class="w3-jumbo">Top 10 <i class="fa fa-trophy w3-xxxxlarge"></i></h1>
    <p>Best players around the world.</p>
  </header>

  <div class="w3-row-padding">
    <div class=" w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity">
          <li class="w3-light-grey w3-xlarge w3-padding-16">
            <span style="float:left;"><b>Rank</b></span>
            <b>Name</b>
            <span style="float:right;"><b>Score</b></span>
          </li>
        </ul>
      </div>
      <?php
      if(!isset($topten) || count($topten)<1){
      ?>
      <div class=" w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32"> - </li>
        </ul>
      </div>
              
      <?php
      } else {
        $count = 1;
        foreach($topten as $row){
      ?>
      <div class=" w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-16"><span style="float:left;"><?=$count?></span><?=$row['name']?> <span style="float:right;"><?=$row['score']?></span></li>
        </ul>
      </div>
      <?php
        $count++;
        }

      }
      ?>

  </div>

  <?php require 'common/footer.php'; ?>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
