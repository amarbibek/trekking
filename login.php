<?php
session_start();
error_reporting(0);
include('header.php');
include('logo.php');
include('connect.php');
//$_SESSION['login'];
?>
<div class="min-height">
<?php
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	// echo $email;
	// echo $password;
	// exit();
	$query="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' AND `active`='1'";
	$result=mysqli_query($con,$query) or die("query ddnt work!");
	if (mysqli_num_rows($result)==1){
		while($row=mysqli_fetch_array($result)){
			echo $type=$row['type'];
			if($type==1){
				$_SESSION['admin']="admin";
				header('location:index.php');
			}
		}
		$_SESSION['login']=$email;
		header('Location:index.php');

		
	}
} 
?>
<div class="container">
<div class="jumbotron">
	<form action="" method="post">
		<div class="row">
		 	<div class="form-group">
	       		<label for="email" class="col-sm-3 control-label">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="email"  class="form-control" id="email">
	       		</div>
	       </div> 
	    </div>
	    <br>
    	<div class="row">
       		<div class="form-group">
       			<label for="password" class="col-sm-3 control-label">Password &nbsp;&nbsp;&nbsp;: </label>
       			<div class="col-sm-5">
  	   				<input type="password" name="password"  class="form-control" id="password"><br>
       			</div>
       		</div> 
       </div>
		<div class="row">
		    <div class="form-group">
		       	<div class="col-sm-3 col-sm-offset-4">
		  	   		<button type="submit" class="btn btn-primary form-control " name="submit">Submit</button>
		       	</div>
		    </div> 
		</div>
	</form>
</div>
</div>


</div> <!-- closing of min-height -->
<?php
include('footer.php');
?>