<?php 
error_reporting(0);
 ?>
<div class="container-fluid">
<div id="logo">
	

<div class="row">
	<div class="col-md-1"><img src="images/trek_logo.png" height="120" width="200"></div>
	<div class="col-md-6 " ><p class="company-name" style="color:#435b82;"> TREK NEPAL</p></div>
	<div id="login_register">
	<?php
	if ($_SESSION['login']){
 echo '<a href="logout.php">LOGOUT</a>';
 echo '	<a href="change_password.php">CHANGE PASSWORD</a>';
	}else{
	
	echo '<a href="login.php">LOGIN</a>';
	echo' | ';
	echo '<a href="register.php">REGISTER</a>';
}
	?>	
	</div>
</div>
</div>
</div>
<?php include ('menubar.php'); ?>