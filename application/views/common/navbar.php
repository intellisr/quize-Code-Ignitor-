<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <!-- <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>QUIZ</p>
  </a> -->
  
    <img src="<?=base_url()?>assests/img/logo.jpg" style="width:100%">
  
  <a href="<?=base_url()?>" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-gamepad w3-xxlarge"></i>
    <p>PLAY</p>
  </a>
  <a href="<?=base_url()?>index.php/topten" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-trophy w3-xxlarge"></i>
    <p>TOP 10</p>
  </a>
  <a href="<?=base_url()?>index.php/add" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-plus w3-xxlarge"></i>
    <p>ADD</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">QUIZ</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">START</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">RESULTS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">ADD</a>
  </div>
</div>