<?php include "connection.php";

      $d=$_GET['d'];
	  $query = "delete from adduser where id='$d'"; 
	  $run = mysqli_query($con,$query);
	  if($run){
		  header('location:deta.php');
	  }

 ?>