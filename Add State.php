	<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet">
	<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add state| Admin Prac</title>

    <!-- Bootstrap -->
	<link href="bootstrap/css/mystyle.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet">

    
  </head>
  <body>
  <?php include "include/nav.php"; ?>
  <div class="con">
     <div class="row">
	     <?php include "include/left-nav.php"; ?>
		 <div class="col-md-9">
		  <h1><i class="fa fa-tachometer" aria-hidden="true"> Deshboard </i><small> Description</small></h1>
		     <ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="Add State.php">Add State</a></li>
				</ol>
				<div class="row">
				<div class="col-md-12">
				<h2>Add Category Here !!</h2>
				<form class="group-control" action="" method="POST">
				     
					 <label for="fname">Add state</label>
					 <input type="text" name="state_name" class="form-control"><br>
					 
					 
					 <input type="submit" name="submit" class="btn btn-primary" value="submit">
				</form>	 
				</div></div>
		 </div>
	 </div>
  </div>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
  
  if(isset($_POST['submit']))
  {
	  $state_name = $_POST['state_name'];
	  
	  
	/*  $query = "INSERT INTO adduser (firstname,fathername,emailid,education,state,address,lastname,mothername,mobile,pass,city,pincode) VALUES ($firstname','$fathername','$emailid','$education','$state','$address','$lastname','$mothername','$mobile','$pass','$city','$pincode')"; */
	   $query="INSERT INTO `state`(`state_name`,`status`) VALUES ('$state_name','1')";
	  $run = mysqli_query($con,$query);
	  
	  if($run)
	  {
		  echo " <script>alert('state submit successfully')</script>";
	  }
  }
  
?>