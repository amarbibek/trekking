<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
is_login();
?>
<?php
	if (isset($_POST['change'])){
		$login_id=$_SESSION['login'];
		$current=$_POST['current'];
		$new=$_POST['new'];
		$new_again=$_POST['new_again'];
		if($new!="" && $new_again!="" && $current!=""){
			
		$sql="SELECT `password` FROM `users` WHERE `email`='$login_id'";
		$result=mysqli_query($con,$sql) OR die("didnt work");
		if ($result){
			if(mysqli_num_rows($result)>=1){
			while ($row=mysqli_fetch_array($result)) {
				if ($current==$row['password']){
					//echo "password is correct!!";
					
					if ($new==$new_again){
						//now we can change password here
						$sql="UPDATE `users` SET `password`='$new' WHERE `email`='$login_id'";
						$result=mysqli_query($con,$sql) OR die("Update query didn't work!");
						if ($result){
							echo'<div class="alert alert-success alert-dismissable fade in">
   						 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    						<strong>Success</strong> Password changed successfully !!!
  					</div>';
							//echo "Password changed successfully!";
							session_unset();
						}
					}else{
						echo'<div class="alert alert-danger alert-dismissable fade in">
   						 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    						<strong>Error!</strong> Password didnot match!!!
  					</div>';
						// echo "Password didn't match!!!";
					}

				}else{
					echo'<div class="alert alert-danger alert-dismissable fade in">
   						 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    						<strong>Error!</strong> Password is incorrect !!!
  					</div>';
					//echo '<div class="alert alert-danger" role="alert"><h4>Password is incorrect !!!</h4></div>';
					//echo "password is incorrect!!";
				}
			
			}
		}
		}
		
		}else{
				echo'<div class="alert alert-danger alert-dismissable fade in">
   						 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    						<strong>Error!</strong>Fields cant be null !!!
  					</div>';
			}
	}

?>
<div class="container">
<div class="jumbotron">

<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
			<label for="current" class="col-sm-3 col-md-offset-1 control-label">Current Password </label>
	       		<div class="col-sm-6 ">
	  	   			<input type="text" name="current"  class="form-control" id="current" placeholder="Enter your current password..." required >
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
	    <div class="form-group">
			<label for="new" class="col-sm-3 col-md-offset-1 control-label">New Password </label>
	       		<div class="col-sm-6 ">
	  	   			<input type="text" name="new"  class="form-control" id="new" placeholder="Enter your new password..." required >
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
	     <div class="form-group">
			<label for="new_again" class="col-sm-3 col-md-offset-1 control-label">Re-Password </label>
	       		<div class="col-sm-6 ">
	  	   			<input type="text" name="new_again"  class="form-control" id="new_again" placeholder="Re-enter your new password..." required >
	       		</div>
	       </div> 
	    </div>
	    <br>
	    
<!-- <label>Current Password&nbsp;&nbsp;:</label><input  type="text" name="current" placeholder="Enter your current password..." required /></br>

<label>New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="new" placeholder="Enter your new password..." required/></br>
<label>Re-password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label><input type="text" name="new_again" placeholder="Re-enter your new password..." required/></br> -->
	<div class="row">
		<div class="form-group">
	        <div class="col-sm-3 col-sm-offset-4">
	  	   		<button type="submit" class="btn btn-primary form-control" name="change">Change Password</button>
	       	</div>
	    </div> 
	</div>
<!-- <input id="button" type="submit" name="change" value="Change Password"/> -->
</form>
</div>
	
</div>