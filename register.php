<?php
include('header.php');
include('logo.php');
include('connect.php');
?>

<?php
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];

	
	$query="INSERT INTO `users` (`fname`,`lname`,`contact`,`country`,`email`,`password`,`repassword`,`active`,`type`) VALUES ('$fname','$lname','$contact','$country','$email','$password','$repassword','1','0')";
	$result= mysql_query($query) or die("query ddnt work!");
	if ($result){
		echo "Registered Successfully!";
	}
} 
?>

<div class="container">
<div class="jumbotron">
	<form action="" method="post">
		<div class="row">
		 	<div class="form-group">
	       		<label for="fname" class="col-sm-3 control-label">First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="fname"  class="form-control" id="fname">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="lname" class="col-sm-3 control-label">Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="lname"  class="form-control" id="lname">
	       		</div>
	        </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="contact" class="col-sm-3 control-label">Contact &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="contact"  class="form-control" id="contact">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="country" class="col-sm-3 control-label">Country &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="country"  class="form-control" id="country">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="email" class="col-sm-3 control-label">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="email" name="email"  class="form-control" id="email">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="password" class="col-sm-3 control-label">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="password" name="password"  class="form-control" id="password">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="repassword" class="col-sm-3 control-label">Re-type Password &nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="password" name="repassword"  class="form-control" id="repassword">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<div class="col-sm-3 col-sm-offset-4">
	  	   			<button type="submit" class="btn btn-success form-control " name="submit">Submit</button>
	       		</div>
	        </div> 
	    </div>
	    
		<!-- <label>Contact : </label>
		<input type="number" name="contact"><br>
		<label>Country : </label>
		<input type="text" name="country"><br>
		<label>Email : </label>
		<input type="text" name="email"><br>
		<label>Password : </label>
		<input type="Password" name="password"><br>
		<label>Re-Password : </label>
		<input type="Password" name="repassword"><br>
		<input type="submit" name="submit"> -->
	</form>
</div>
</div>
<?php
include('footer.php');
?>