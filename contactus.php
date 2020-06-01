<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>

<style type="text/css">
	.right-aln{
		position: relative;
		//left: 700px;
		//top: 200px;
	}
</style>
<?php 
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['comment'];
	$query="INSERT INTO `feedback` (`name`,`email`,`content`) VALUES ('$name','$email','$message')";
	// echo $query;
	// exit();
	$result=mysqli_query($con,$query);
	if($result){
		echo '<div class="alert alert-success" role="alert"><h4>Thank you for your feedback!!!</h4></div>';
	}

}

 ?>
<div class="container-fluid">
<div class="row"> 
	<div class="col-md-6"> 
		<form action="" method="POST">
			<div class="form-group">
			<div class="row">
	       		<label for="name" class="col-md-3 col-md-offset-1 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name &nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-6"> 
	       			<input type="text" name="name"  class="form-control" required placeholder="Your name here...">
	       		</div>
	       	</div>
	       	</div> 
	       	<div class="form-group">
			<div class="row">
	       		<label for="email" class="col-md-3 col-md-offset-1 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-6">  
	       			<input type="email" name="email"  class="form-control" required placeholder="Your email here...">
	       		</div>
	       	</div>
	       	</div> 
	       	<div class="form-group">
			<div class="row">
	       		<label for="email" class="col-md-3 col-md-offset-1 control-label">Comment &nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-6"> 
	       			<textarea  name="comment"  class="form-control" required col="20" rows="7" placeholder="Your reviews / queiries here..."></textarea>
	       		</div>
	       	</div>
	       	</div> 
	       	<div class="form-group">
			<div class="row"> 
	       		<div class="col-sm-4 col-sm-offset-5"> 
	       			<button type="submit" class="btn btn-primary form-control " name="submit">Submit</button> 
	       		</div>
	       	</div>
	       	</div> 
		</form>  
	</div>
	<div class="col-md-6">
		<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.2312417704443!2d77.48509699999998!3d13.084525999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae236e37165bc5%3A0x775c53e4d8c418b9!2sACHARYA+INSTITUTES!5e0!3m2!1sen!2sin!4v1438023384037" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
		</iframe>
	</div>
</div>
</div>
<br>
<?php
include('footer.php');
?>