<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<?php 

echo $id= $_GET['id'];
$query="DELETE FROM `packages` WHERE `id`='$id'";
$result=mysql_query($con,$query) or die("nope");
if($result){
header('location:view_packages.php');
}

 ?>
