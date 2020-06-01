<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<div class="min-height">
<div class="container-fluid">
	<!-- <div class="container-fluid">
		<h2><strong>OUR PACKAGES</strong></h2>
	</div> -->
<div class="row">


<?php
$query="SELECT * FROM `packages`";
$result=mysqli_query($con,$query);
if($result){
	if(mysqli_num_rows($result)>=1){
		while($row=mysqli_fetch_array($result)){
			//$package_id=$row['id'];
			// echo'<div class="jumborton">';
			echo '<div class="col-md-3 pad-xs-1 img-thumbnail">';
		
			$image=$row['image'];
			$id=$row['id'];
			$price=$row['price'];
			
			?>
			<img src=" <?php echo $image; ?> " height="180px" width="350px"/>
			<?php
			echo'<div class="details" onmousehover="show_hide();" >';
			echo"<strong>";
			echo $row['package_name'];
			echo"</strong>";
			echo '<br/>';
			echo "Starts on : ".$row['date_start'];
			echo '<br/>';
			echo "Ends on : ".$row['date_end'];
			echo '<br/>';
			echo "Location : ".$row['location'];
			echo '<br/>';
			echo "Agency : ".$row['trekking_agency'];
			echo '<br/>';
			echo "Price : ".$row['price'];
			echo '<br/>';
			echo'<div class="book_now_area"  >';
			echo'<div class="button">';
			echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			echo'<a class="btn btn-primary" href="edit_package.php?id='; echo $id; echo'">Edit Package</a>';
			echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			?>
			<a class="btn btn-danger" onclick="return confirm('Are you sure you wish to delete this Record?');"  href="delete_package.php?id=<?php echo $id; ?>  ">Delete Package</a>
			<?php
			echo'</div>';
			echo'</div>';
			echo'</div>';
			echo'</div>';
			// echo'</div>';

			
		}
		echo "<br/>";

	}

}

?>

</div>
</div>
<?php
include('footer.php');
?>

