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
    <h1 class="w3-jumbo">Add Celebrities</h1>
    <p>Add celebrities to the collection.</p>
  </header>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Add Details</h2>
    <hr style="width:200px" class="w3-opacity">

    <form method="POST" action="<?=base_url()?>index.php/add/celebrities">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Image Link" required name="image"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-plus"></i> ADD
        </button>
      </p>
      <p><?=$msg?></p>
    </form>
  <!-- End Contact Section -->
  </div>

  <?php require 'common/footer.php'; ?>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
