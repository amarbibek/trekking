<style type="text/css">
	.navbar-inverse{
		padding top: -15px;
		padding-bottom: -15px;
    background-color: #c2c2d6;
	}
	.a{
		font-size: 20px;//
		font-family: "Times New Roman", Times, serif; 
    color: #000;
	}
</style>

<?php if(isset($_SESSION['admin'])){ ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <ul class="nav navbar-nav">
      <li class="a"><a href="index.php">HOME</a></li>
      <li class="a"><a href="packages.php">PACKAGES</a></li>
      <li class="a"><a href="my_bookings.php">MY BOOKINGS</a></li>
      <li class="a"><a href="requests.php">REQUESTS</a></li>
      <li class="a"><a href="add_package.php">ADD PACKAGES</a></li>
      <li class="a"><a href="view_packages.php">VIEW PACKAGES</a></li>
      <li class="a"><a href="gallery.php">GALLERY</a></li>
      <li class="a"><a href="aboutus.php">ABOUT US</a></li>
      <li class="a"><a href="contactus.php">CONTACT US</a></li>
    </ul>
  
  </div>
</nav>
<?php
}else{
 ?>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <ul class="nav navbar-nav">
      <li class="a"><a href="index.php">HOME</a></li>
      <li class="a"><a href="packages.php">PACKAGES</a></li>
      <li class="a"><a href="my_bookings.php">MY BOOKINGS</a></li>
     
      <li class="a"><a href="gallery.php">GALLERY</a></li>
      <li class="a"><a href="aboutus.php">ABOUT US</a></li>
      <li class="a"><a href="contactus.php">CONTACT US</a></li>
    </ul>
  
  </div>
</nav>
<?php } ?>
<!-- <div>
	<a href="index.php">HOME</a>
	<a href="packages.php">PACKAGES</a>//
	<a href="my_bookings.php">MY BOOKINGS</a>
	<a href="gallery.php">GALLERY</a>
	<a href="aboutus.php">ABOUT US</a>
	<a href="contactus.php">CONTACT US</a>
</div> -->