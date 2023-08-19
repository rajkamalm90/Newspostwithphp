<?php include "connection.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User All data </title>
	<link href="bootstrap/css/mystyle.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="bootstrap/css/mystyle.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
  <?php include "include/nav.php"; ?><br><br><br>
     <!---<nav class="navbar navbar-expand-lg bg-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">Student</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="data.php">student data</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">contact us</a>
				</li>
			  </ul>
			  <form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			  </form>
			</div>
		  </div>
		</nav>-->
    <div class="container">
	  <div class="form-stat">
	    <table class="table table-hover">
		  <thead>
			<tr>
				 <th scope="col">id</th>

			  <th scope="col">firstname</th>
			  <th scope="col">lastname</th>
			   <th scope="col">fathername</th>
			  <th scope="col">mothername</th>
			  <th scope="col">emailid</th>
        <th scope="col">mobile</th>

        <th scope="col">eduction</th>
        <th scope="col">pass</th>
        <th scope="col">city</th>

        <th scope="col">pincode</th>
        
        <th scope="col">Delete</th>
			  <th scope="col">Edit</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php $i=1; $que="select * from adduser"; $ru=mysqli_query($con,$que); while($row=mysqli_fetch_array($ru)){ $firstname=$row['firstname']; $lastname=$row['lastname'];   $fathername=$row['fathername']; $mothername=$row['mothername']; $emailid=$row['emailid']; $mobile=$row['mobile']; $education=$row['education']; $pass=$row['pass']; $city=$row['city'];  $pincode=$row['pincode']; ?>		  
			<tr>
			  <th scope="row"><?php echo $i++; ?></th>
			  <td><?php echo $firstname; ?></td>
        <td><?php echo $lastname; ?></td>
        <td><?php echo $fathername; ?></td>
         <td><?php echo $mothername; ?></td>
        <td><?php echo $emailid; ?></td>
         <td><?php echo $mobile; ?></td>
         <td><?php echo $education; ?></td>
         <td><?php echo $pass; ?></td>
         <td><?php echo $city; ?></td>
         <td><?php echo $pincode; ?></td>
          
			  
			  
			  <td><a href="delete.php?d=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
			  <td><a href="edit.php?edit=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a></td>
			</tr>
			
<?php } ?>			
			