<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>

<?php
if(isset($_POST['submit'])){
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

 $query="INSERT INTO `packages` (`package_name`,`image`,`date_start`,`date_end`,`location`,`pick_n_drop_location`,`pick_up_time`,`trekking_agency`,`inclusives`,`price`) VALUES('$package_name','$file','$date_start','$date_end','$location','$pick_n_drop_location','$pick_up_time','$trekking_agency','$inclusives','$price')";
 // echo $query;
 // exit();
 $result=mysqli_query($con,$query) or die("ddnt wrk");
 if($result){
 	echo "package added successfully!!!";
 }
}

?>
<div>
  <div class="container">
  <div class="jumbotron">
    	<form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label"> Package Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="package_name"  class="form-control" id="name">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="pick" class="col-sm-3 control-label"> Image &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="file" name="pick"  class="form-control" id="pick">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="date_start" class="col-sm-3 control-label"> Starting Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="date" name="date_start"  class="form-control" id="date_start">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="date_end" class="col-sm-3 control-label"> Ending Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="date" name="date_end"  class="form-control" id="date_end">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="location" class="col-sm-3 control-label"> Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="location"  class="form-control" id="location">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="pick_n_drop_location" class="col-sm-3 control-label"> Pickup And Drop Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="pick_n_drop_location"  class="form-control" id="pick_n_drop_location">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="pick_up_time" class="col-sm-3 control-label"> Pickup Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="time" name="pick_up_time"  class="form-control" id="pick_up_time">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="trekking_agency" class="col-sm-3 control-label"> Trekking Agency &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="trekking_agency"  class="form-control" id="trekking_agency">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="inclusives" class="col-sm-3 control-label"> Inclusives &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="text" name="inclusives"  class="form-control" id="inclusives">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label"> Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <div class="col-sm-5">
                  <input type="number" name="price"  class="form-control" id="price">
                </div>
             </div> 
          </div><br>
          <div class="row">
            <div class="form-group">
                
                <div class="col-sm-5 col-md-offset-3">
                  <button type="submit" class="btn btn-success form-control " name="submit">Add Package</button>
                </div>
             </div> 
          </div>




<!--       		<label>Name : </label>
      		<input type="text" name="package_name"><br>
      		<label>Image : </label>
      		<input type="file" name="pick"><br>
      		<label>Starting Date : </label>
      		<input type="date" name="date_start"><br>
      		<label>Ending Date : </label>
      		<input type="date" name="date_end"><br>
      		<label>location : </label>
      		<input type="text" name="location"><br>
      		<label>Trekking Agency : </label>
      		<input type="text" name="trekking_agency"><br>
      		<label>Price : </label>
      		<input type="number" name="price"><br>
      		<input type="submit" name="submit" value="Add Package"> -->
    	</form>
    </div>
  </div>
</div>



<?php
include('footer.php');
?>