<?php include "connection.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News data </title>
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
			  <th scope="col">title</th>
			   <th scope="col">image</th>
			   <th scope="col">category</th>
			   <th scope="col">state</th>
			   <th scope="col">writer</th>
			   <th scope="col">dat</th>
			   <th scope="col">status</th>
			   
			  <th scope="col">description</th>
			  <th scope="col">summary</th>
        <th scope="col">Delete</th>
			  <th scope="col">Edit</th>
			</tr>
		  </thead>
		  <tbody>
<?php $i=1; 
 $que="select * from newsuplod"; 
$ru=mysqli_query($con,$que); while($row=mysqli_fetch_array($ru)){ 
	$title=$row['title']; 
	$image_name=$row['image'];

    $state_name=$row['state_name'];
    $cate_name=$row['cate_name'];
    $writer_name=$row['writer_name'];
    $dat=$row['dat'];
    $status=$row['status'];
	  $description=$row['description'];   
	  $summary=$row['summary'];   ?>		  
			<tr>
			  <th scope="row"><?php echo $i++; ?></th>
			  <td><?php echo $title; ?></td>
			  <td class="upl"><img src="image/<?php echo $image_name; ?> " class="img-thumbnail" alt="Responsive image"></td>
			 <!-- <td><?php echo $image_name; ?></td>-->
			 <td><?php echo $cate_name; ?></td>
			 <td><?php echo $state_name; ?></td>
			 <td><?php echo $writer_name; ?></td>
			 <td><?php echo $dat ?></td>
			 <td><?php echo $status ?></td>
        <td><?php echo $description; ?></td>
        <td><?php echo $summary; ?></td>
        
			  
			  
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
