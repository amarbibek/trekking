<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<div class="min-height">
<?php 
if(isset($_GET['id'])&& isset($_GET['price'])){
	$_SESSION['id'] =$_GET['id'];
	$_SESSION['price']=$_GET['price'];


	// echo'<form action="user_details.php" method="POST">';
	// echo'<input type="hidden" name="price" value="'; echo $price; echo'"/>';
	// echo'<input type="hidden" name="id" value="'; echo $id; echo'"/>';
	
	// echo'<input type="submit" name="user_details" value="Continue"';
	}
 ?>
 
<div id="container-fluid">

	<!-- <div class="row"> -->
		
		<form action="" method="post">
			<div class="col-xs-5">
				<label class="control-label pull-right"><strong>Please enter the number of passenger(s):</strong></label>
			</div>
			<div class="col-xs-1">
					<select name="number" class=" form-control"">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
			</div>
			<div class="col-xs-1 pull-left">
					<button type="submit" name="details" class="btn  btn-success" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fill Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			</div>
		</form>

</div>
	
<div class="container">

<div class="row"><br><br><br>
<hr style="border:1px solid black;">
<?php 
if(isset($_POST['details'])){
	$number=$_POST['number'];
	$price=$_SESSION['price'];
	$total_price=$number*$price;
	$_SESSION['num_of_users']=$number;
	$_SESSION['total_price']=$total_price;
	if($number>=1){
		echo'<form action="payment.php" method="post">';
		for($i=1;$i<=$number;$i++){
			//echo'<div class="form-group">';
			// echo '<label class="container col-xs-3>'.$i." : ".'</label>';
			//echo'</div>';
			// echo'<div class="form-group">';
			echo'<label class="col-xs-1 control-label"> Name: </label>';
			// echo'</div>';
			echo'<div class="container col-xs-2">';
			echo'<input class="form-control" type="text" name="name[]" />';
			echo'</div>';
			echo'<label class="col-xs-1 control-label"> Gender: </label>';
			echo'<div class="container col-xs-2">';
			echo'<select name="gender[]" class="form-control ">
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
				</select>';
			echo'</div>';
			echo'<label class="col-xs-1 control-label"> Age: </label>';
			echo'<div class="container col-xs-1">';
			echo'<input type="number" name="age[]" class="form-control"/>';
			echo'</div>';
			echo'<label class="col-xs-1 control-label"> Contact: </label>';
			echo'<div class="container col-xs-3">';
			echo'<input type="number" name="contact[]" class="form-control" />';
			echo'</div>';
			echo'<br/>';
			echo'<br/>';


			
		}echo'<br/>';

			echo'<br/>';
			?>
			<div class="col-md-5 col-xs-offset-5">
					<button type="submit" name="payment" class="btn  btn-success" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Make Payment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			</div><br/><br/><br/>
			<?php
		// echo'<input type="submit" name="payment" value="Payment"/>';

	}

	}
 ?>

</div>
</div>
</div>
<?php include('footer.php');?>