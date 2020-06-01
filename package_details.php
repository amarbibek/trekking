<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<div class="min-height"> 
	<div class="container-fluid">  
		<?php 
		if(isset($_GET['id'])&&isset($_GET['price'])){
			$id=$_GET['id'];
			$price=$_GET['price'];


	// echo'<form action="user_details.php" method="POST">';
	// echo'<input type="hidden" name="price" value="'; echo $price; echo'"/>';
	// echo'<input type="hidden" name="id" value="'; echo $id; echo'"/>';

	// echo'<input type="submit" name="user_details" value="Continue"';

			$query="SELECT * FROM `packages` where `id`='$id'";
			$result=mysqli_query($con,$query);
			if($result){
				if(mysqli_num_rows($result)>=1){
					while($row=mysqli_fetch_array($result)){
						echo'<div class="row">';
						echo '<div class="col-md-8 ">';
						$id=$row['id'];
						$package_name=$row['package_name'];
						$_SESSION['package_name']=$package_name;
						$_SESSION['package_id']=$id;
						$image=$row['image'];
						$start=$row['date_start'];
						$ends=$row['date_end'];
						$location=$row['location'];
						$pick_n_drop_location=$row['pick_n_drop_location'];
						$pick_up_time=$row['pick_up_time'];
						$trekking_agency=$row['trekking_agency'];
						$inclusive=$row['inclusives'];
						$price=$row['price'];

						?>
						<img src=" <?php echo $image; ?> " height="350px" width="100%"/>
						<?php
						echo '<table class="table ">';
						echo'<tr class="borderless">';
						echo'<td>';
						echo"Starts On :";
						echo'</td>';
						echo'<td>';
						echo $start;
						echo'</td>';
						echo'</tr>';
						echo'<tr>';
						echo'<td>';
						echo"Ends On :";
						echo'</td>';
						echo'<td>';
						echo $ends;
						echo'</td>';
						echo'</tr>';
						echo'<tr>';
						echo'<td>';
						echo"Location :";
						echo'</td>';
						echo'<td>';
						echo $location;
						echo'</td>';
						echo'</tr>';
						echo'<tr>';
						echo'<td>';
						echo"Agency :";
						echo'</td>';
						echo'<td>';
						echo $trekking_agency;
						echo'</td>';
						echo'</tr>';
						echo'<tr>';
						echo'<td>';
						echo"Price :";
						echo'</td>';
						echo'<td>';
						echo $price;
						echo'</td>';
						echo'</tr>';

						echo'</table>';
						echo'</div>';

						echo'<div class="container">';


						echo'</div>';

			// echo'<div class="container">';
			// echo'<a class="btn btn-info" href="package_details.php?id='; echo $id; echo '&price='; echo $price; echo'">Book Now</a>';

			// echo'</div>';

						echo'</div>';



					}
					echo "<br/>";

				}

			}
		}
		?>

		<!-- <hr style="border:2px solid black;"> -->
	</div>

	<div class="container-fluid">


		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#details">Details</a></li>
			<li><a data-toggle="tab" href="#faqs">FAQs</a></li>

		</ul>

		<div class="tab-content">
			<div id="details" class="tab-pane fade in active">
				<h3>Description</h3>
				<?php 
				echo '<table class="table ">';
				echo'<tr class="borderless">';
				echo'<td>';
				echo"Pick up and drop :";
				echo'</td>';
				echo'<td>';
				echo $pick_n_drop_location;
				echo'</td>';
				echo'</tr>';
				echo'<tr>';
				echo'<td>';
				echo"Pick Up Time :";
				echo'</td>';
				echo'<td>';
				echo $pick_up_time;
				echo'</td>';
				echo'</tr>';
				echo'<tr>';
				echo'<td>';
				echo"Inclusive :";
				echo'</td>';
				echo'<td>';
				echo $inclusive;
				echo'</td>';
				echo'</tr>';


				echo'</table>';


				?>
			</div>
			<div id="faqs" class="tab-pane fade">
				<h3>Have any query? Drop your Question here...</h3>
				<div class="container-fluid">
					<div class="row"> 
						<div class="col-xs-10">

							<form action="./send mail/index.php" method="POST">
								<div class="form-group">
									<div class="row">
										<label for="name" class="col-md-3 col-md-offset-1 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name &nbsp;&nbsp;&nbsp;&nbsp;: </label>
										<div class="col-sm-8">

											<input type="text" name="s_name"  class="form-control" required placeholder="Your name here...">
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<label for="email" class="col-md-3 col-md-offset-1 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
										<div class="col-sm-8"> 

											<input type="email" name="s_email"  class="form-control" required placeholder="Your email here...">
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<label for="comment" class="col-md-3 col-md-offset-1 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query &nbsp;&nbsp;&nbsp;: </label>
										<div class="col-sm-8">

											<textarea  name="s_comment"  class="form-control" required col="20" rows="5" placeholder="Your queiries here..."></textarea>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">

										<div class="col-sm-4 col-sm-offset-5">

											<button type="submit" class="btn btn-primary form-control " name="send_email">Submit</button>

										</div>
									</div>
								</div>



							</form>


						</div>
					</div>
				</div>

			</div>
		</div>
		<hr style="border:1px solid black;">
		<div class="container col-md-8 col-xs-offset-4">
			<a class="btn btn-lg btn-success" href="user_details.php?id= <?php echo $id; ?>&price= <?php echo $price; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Book Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
			<br><br>
		</div>



	</div>
	<?php
	include('footer.php');
	?>

