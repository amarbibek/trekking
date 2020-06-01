<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>

<div class="min-height">
<?php
$id=$_GET['id'];
if(isset($_POST['update'])){
 $package_name=$_POST['package_name'];
 $date_start=$_POST['date_start'];
 $date_end=$_POST['date_end'];
 $location=$_POST['location'];
 $pick_n_drop_location=$_POST['pick_n_drop_location'];
 $pick_up_time=$_POST['pick_up_time'];
 $trekking_agency=$_POST['trekking_agency'];
 $inclusives=$_POST['inclusives'];
 $price=$_POST['price'];
 $file=$_FILES['pick']['name'];
$tem_storage=$_FILES['pick']['tmp_name'];
$storage="pics/";
move_uploaded_file($tem_storage,$storage.$file);
$file=$storage.$file;
if($file==$storage){
	$file=$image;
}
 $query="UPDATE `packages` SET `package_name`='$package_name',`image`='$file',`date_start`='$date_start',`date_end`='$date_end',`location`='$location',`pick_n_drop_location`='$pick_n_drop_location',`pick_up_time`='$pick_up_time',`trekking_agency`='$trekking_agency',`inclusives`='$inclusives',`price`='$price' WHERE `id`='$id'";

 $result=mysqli_query($con,$query) or die("ddnt wrk");
 if($result){
 	echo '<div class="alert alert-success" role="alert"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package updated successfully!!!</h4></div>';
 }else{
 	echo "Oops!!! package could not update!";
 }
}

?>
<?php
$id=$_GET['id'];
$query="SELECT * FROM `packages` WHERE `id`='$id'";
$result=mysqli_query($con,$query);
if($result){
	if(mysqli_num_rows($result)>=1){
		while($row=mysqli_fetch_array($result)){
			echo '<div class="package">';
			
			$image=$row['image'];
			$id=$row['id'];
			$package_name=$row['package_name'];
			$date_start=$row['date_start'];
			$date_end=$row['date_end'];
			$location=$row['location'];
			$pick_n_drop_location=$row['pick_n_drop_location'];
 			$pick_up_time=$row['pick_up_time'];
			$trekking_agency=$row['trekking_agency'];
			$inclusives=$row['inclusives'];
			$price=$row['price'];
			?>
			  <div class="container">
  				<div class="jumbotron">
					<div class="image">
						<img src=" <?php echo $image; ?> " height="180px" width="350px"/>
					</div>
					<br>
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="row">
          					<div class="form-group">
                				<label for="name" class="col-sm-3 control-label"> Package Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                				<div class="col-sm-5">
                  					<input type="text" name="package_name"  class="form-control" id="name" value="<?php echo $package_name;?>">
                				</div>
             				</div> 
          				</div><br>
          				<div class="row">
            <div class="form-group">
                <label for="pick" class="col-sm-3 control-label"> Image &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="file" name="pick"  class="form-control" id="pick" value="<?php echo $image;?>" >
                </div>
             </div> 
          </div><br>
          				<div class="row">
            <div class="form-group">
                <label for="date_start" class="col-sm-3 control-label"> Starting Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="date" name="date_start"  class="form-control" id="date_start" value="<?php echo $date_start; ?>">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="date_end" class="col-sm-3 control-label"> Ending Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="date" name="date_end"  class="form-control" id="date_end" value="<?php echo $date_end; ?>">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="location" class="col-sm-3 control-label"> Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="location"  class="form-control" id="location" value="<?php echo $location; ?>">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="pick_n_drop_location" class="col-sm-3 control-label"> Pickup And Drop Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="pick_n_drop_location"  class="form-control" id="pick_n_drop_location" value="<?php echo $pick_n_drop_location; ?>">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="pick_up_time" class="col-sm-3 control-label"> Pickup Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="time" name="pick_up_time"  class="form-control" id="pick_up_time" value="<?php echo $pick_up_time; ?>">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="trekking_agency" class="col-sm-3 control-label"> Trekking Agency &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="trekking_agency"  class="form-control" id="trekking_agency" value="<?php echo $trekking_agency; ?>">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="inclusives" class="col-sm-3 control-label"> Inclusives &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="inclusives"  class="form-control" id="inclusives" value="<?php echo $inclusives; ?>">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label"> Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="number" name="price"  class="form-control" id="price" value="<?php echo $price; ?>">
                </div>
             </div> 
          </div><br>
           <div class="row">
            <div class="form-group">
                
                <div class="col-sm-5 col-md-offset-3">
                  <button type="submit" class="btn btn-success form-control " name="update">Update Package</button>
                </div>
             </div> 
          </div>
		</form>
	</div>
</div>

		<?php

		}
	}
}

?>




</div>
<?php
include('footer.php');
?>

