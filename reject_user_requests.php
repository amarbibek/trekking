<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<?php 

$id= $_GET['id'];
$query="UPDATE `booked` SET `status`='not approved' WHERE `id`='$id'";
$result=mysqli_query($con,$query);
if($result){
header('location:requests.php');
}

 ?>