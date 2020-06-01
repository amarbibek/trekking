<?php
session_start();
include('header.php');
include('logo.php');
?>
<?php
if($_SESSION['login']){
	echo "Hello,"; echo $_SESSION['login']; 
}
if($_SESSION['admin']){
	echo '<a href="admin.php">Admin</a>';
}


?>
<?php
include('footer.php');
?>