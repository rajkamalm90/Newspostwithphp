<?php include "connection.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category All data </title>
	<link href="bootstrap/css/mystyle.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="bootstrap/css/mystyle.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
  <?php include "include/nav.php"; ?><br><br><br>
     
    <div class="container">
	  <div class="form-stat">
	    <table class="table table-hover">
		  <thead>
			<tr>
				 <th scope="col">Category No.</th>

			  <th scope="col">Category Name</th>
			  <th scope="col">Status</th>
			   <th scope="col">Edit</th>
			  <th scope="col">Delete</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php $i=1; $que="select * from category where status=1"; $ru=mysqli_query($con,$que); while($row=mysqli_fetch_array($ru)){ $cate_name=$row['cate_name']; $status=$row['status']; ?>		  
			<tr>
			  <th scope="row"><?php echo $i++; ?></th>
			  <td><?php echo ucwords($cate_name); ?></td>
              <td><?php echo $status; ?></td>
			  <td><a href="delete.php?d=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
			  <td><a href="edit.php?edit=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a></td>
			</tr>
			
<?php } ?>			
			</tbody>
		</table>
	  </div>	
	</div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</html>
<?php
 if(isset($_POST['submit'])){
	 $firstname=$_POST['firstname'];
	 $lastname=$_POST['lastname'];
	 $fathername=$_POST['fathername'];
	 $mothername=$_POST['mothername'];
	  $emailid=$_POST['emailid'];
   $mobile=$_POST['mobile'];
    $education=$_POST['education'];
     $pass=$_POST['pass'];
      $city=$_POST['city'];
       $pincode=$_POST['pincode'];

	 $query="insert into adduser(firstname,lastname,fathername,mothername,emailid,mobile,education,pass,city,pincode) values('$fristname','$lastname','$fathername', '$mothername','$emailid''$mobile''$education''$pass''$city''$pincode')";
	 $run=mysqli_query($con,$query);
	 if($run){
		 echo "<script>alert('data submit successfully');</script>";
	 }
 }
?>