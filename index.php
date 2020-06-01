<?php
session_start();
include('header.php');
include('logo.php');
?>
<div class="min-height">
<?php
// if($_SESSION['login']){
// 	echo "Hello,"; echo $_SESSION['login']; 
// }
if($_SESSION['admin']){
 //	echo '<a href="admin.php">Admin</a>';
}


?> 

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider/everest_s.jpg" width="100%">
      <div class="carousel-caption">
      	<h2>Everest Trekking</h2>
      </div>
    </div>
    <div class="item">
      <img src="images/slider/pokhara_s.jpg" width="100%">
      <div class="carousel-caption">
      <h2>Pokhra Trekking</h2>
      </div>
    </div>
    <div class="item">
      <img src="images/slider/ilam_s.jpg" width="100%">
      <div class="carousel-caption">
      <h2>ILLAM Trekking</h2>
      </div>
    </div>
  </div>



  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--complition of slider-->

<div class="container-fluid" style="margin-top:35px;">
<div class="container-fluid">
	<h2><strong>SERVICES</strong></h2>
</div>
<div id="row">
<div class="col-md-4 ">
<img src="images/service1.jpg">

	<h3><strong>TRANSPORTATION</strong></h3>

<p>
The number of trekkers increases day by day as new suitable places for trekking are discovered regularly- mostly untouched, unheard of remote locations where adventure becomes synonymous with the place names. Trekking in India does not require any official introduction since there are zillions of people do trekking every other day in India, regardless of time. The unique geographical features of India help trekking grow from height to height. 
</p>

<p>
The Western Ghats, the Eastern Ghats, the Sahyadris and the Himalayas etc are the major ranges at several locations with hundreds of trekking points within them. All of them equally presents the best adventurous moments to each trekker. 
</p>
</div>
<div class="col-md-4 ">
<img src="images/service2.jpg">

	<h3><strong>HOTEL</strong></h3>

<p>
Being an easy and time-effective process, online hotel booking is widely preferred. Booking Hotels online is safe and reliable, provided that you rely on a reputed travel website for your online hotel bookings. Goibibo is a trustworthy online hotel booking platform which has numerous filters to help you choose the best and most suitable hotel as per your budget and preference. You can go through the star ratings, reviews and travellers' images of a particular hotel to make the best decision. 
</p>
<p>
Goibibo also offers 'Gostays accommodations' that come with a money-back guarantee. Gostays accommodations include free wifi, AC, breakfast, TV and good hygiene. Thus, you can always choose 'Gostays accommodations' at your convenience.
</p>
</div>
<div class="col-md-4 ">
<img src="images/service3.jpg" >

	<h3><strong>SUPPORT</strong></h3>

<p>
This Trekking website has established a flight support division to complement the GSSA and air chartering business.
</p>
<p>
Best in class trek guides and support staff to ensure you enjoy the journey thoroughly.
</p>
<p>
Higher support staff and small groups for a safer trek. Your itinerary is travel insured.
</p>
<p>
Average group size is ONLY 10-15 trekkers. We deliver more personalised attention and care.
</p>
</div>
</div>
</div>
</div>
<?php
include('footer.php');
?>