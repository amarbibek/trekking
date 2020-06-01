<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<div class="min-height">
<?php
if(isset($_SESSION['login'])){
 $user_id=$_SESSION['login'];

$query="SELECT * FROM `booked`  WHERE `status`='pending'";
$result=mysqli_query($con,$query);
if($result){
			if(mysqli_num_rows($result)>=1){
			echo '<table class="table table-hover">
			<tr>
	<th>Passenger Name</th>
	<th>Gender</th>
	<th>Age</th>
	<th>Price</th>
	<th>Package Name</th>
	<th>Start Date</th>
	<th>End Date</th>
	<th>Location</th>
	<th>Pickup Location</th>
	<th>Pickup Time</th>
	
	<th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actions</th>
</tr>';	
				while($rows=mysqli_fetch_array($result)){
					$id=$rows['id'];
					echo'<tr>';
					echo'<td>';
					echo $tracking_id=$rows['name'];
					echo'</td>';
					echo'<td>';
					echo $rows['gender'];
					echo'</td>';
						echo'<td>';
					echo $rows['age'];
					echo'</td>';
						
						echo'<td>';
					echo $rows['price'];
					echo'</td>';
					$package_id=$rows['package_id'];
					$query1="SELECT * FROM `packages` WHERE `id`='$package_id'";
					$result1=mysqli_query($con,$query1);
					if($result1){
						if(mysqli_num_rows($result1)>=1){
							while ($res=mysqli_fetch_array($result1)) {
									echo'<td>';
					echo $res['package_name'];
					echo'</td>';
						echo'<td>';
					echo $res['date_start'];
					echo'</td>';
						echo'<td>';
					echo $res['date_end'];
					echo'</td>';
						echo'<td>';
					echo $res['location'];
					echo'</td>';
						echo'<td>';
					echo $res['pick_n_drop_location'];
					echo'</td>';
						echo'<td>';
					echo $res['pick_up_time'];
					echo'</td>';
						echo'<td>';
					echo '<a href="accept_user_requests.php?id='.$id;echo'">ACCEPT</a>';
					echo'</td>';
						echo'<td>';
					echo '<a href="reject_user_requests.php?id='.$id;echo'">REJECT</a>';
					echo'</td>';
							}
						}
					}
					echo'</tr>';


				}
			}else{
				echo '<div class="alert alert-danger" role="alert"><h4>You have not yet booked   !!!</h4></div>';
			}
		}else{
			echo '<div class="alert alert-danger" role="alert"><h4>No Requests Found  !!!</h4></div>';
		}
	}else{
			echo '<div class="alert alert-danger" role="alert"><h4>Please login to check your booked packages !!!</h4></div>';
		}
?>
</table>
</div>

<?php
include('footer.php');
?>