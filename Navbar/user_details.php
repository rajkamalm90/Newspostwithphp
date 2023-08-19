<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Prac | Add Users</title>

    <!-- Bootstrap -->
	<link href="bootstrap/css/mystyle.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include "nav.php"; ?>
  <div class="con">
     <div class="row">
	     <div class="col-md-3 side">
		    <div class="list-group">
			  <a href="#" class="list-group-item active">
				<i class="fa fa-tachometer" aria-hidden="true"> Deshboard</i>
			  </a>
			  <a href="#" class="list-group-item">
			            <span class="badge">114</span>
					   All Users</a>
			  <a href="#" class="list-group-item"> <span class="badge">20</span>Contact Persons</a>
			  <a href="#" class="list-group-item"> <span class="badge">14</span>Number Of Company</a>
			  <a href="#" class="list-group-item"> <span class="badge">124</span>Visitors</a>
			  <a href="#" class="list-group-item"> <span class="badge">Active</span>Logout</a>
            </div>
		 </div>
		 <div class="col-md-9">
		  <h1><i class="fa fa-tachometer" aria-hidden="true"> Deshboard </i><small> Description</small></h1>
		     <ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="">Add-Users</a></li>
				</ol>
				<div class="row">
				 <h2>All Users Details</h2>
				
				<table class="table table-striped table-hover ">
                <thead>
				 
				 <tr>
				    <th>Sno</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Father Name</th>
					<th>Mother Name</th>
					<th>Mobile No</th>
					<th>Email id</th>
					<th>Password</th>
					<th>Education</th>
					<th>Address</th>
					<th>State</th>
					<th>City</th>
					<th>Pin code</th>
					<th>Status</th>
				</tr>
				</thead>
				<tbody>
				<?php
				  $i=1;
					 $query = "SELECT * FROM users_registration order by id desc";
					 $run = mysqli_query($con,$query);
					 while($row=mysqli_fetch_array($run))
					 {
	
				 ?>
				 <tr>
				    <td><?php echo $i++; ?></td>
					<td><?php echo $row['firstname']; ?> </td>
					<td><?php echo $row['lastname']; ?> </td>
					<td><?php echo $row['fathername']; ?> </td>
					<td><?php echo $row['mothername']; ?> </td>
					<td><?php echo $row['mobile']; ?> </td>
					<td><?php echo $row['email']; ?> </td>
					<td><?php echo $row['password']; ?> </td>
					<td><?php echo $row['education']; ?> </td>
					<td><?php echo $row['address']; ?> </td>
					<td><?php echo $row['state']; ?> </td>
					<td><?php echo $row['city']; ?> </td>
					<td><?php echo $row['pincode']; ?> </td>
					<td><?php echo $row['status']; ?> </td>
					
				 </tr>
 <?php } ?>
				</tbody> 
				 </table>
				</div>
		 </div>
	 </div>
  </div>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
