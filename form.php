<?php include "connection.php"; 

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>News Upload</title>
<link href="bootstrap/css/mystyle.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet">

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top:1%;
  }
}
</style>
</head>
<body>
  <?php include "include/nav.php"; ?><br><br><br>
     
<h2>Responsive Form</h2>

   <div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
    
      <div class="row">
      <div class="col-25">
        <label for="lname">TITLE</label>
        </div>
      <div class="col-75">
     <input type="text"  name="title" placeholder="TITLE">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">description</label>
      </div>
      <div class="col-75">
        <input type="text" name="description" placeholder="description..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Image upload</label>
      </div>
      <div class="col-75">
        <input type="file" name="image">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Category</label>
      </div>

	  <div class="col-75">
        <select id="country" name="cate_name">
		<option value="category">Select Option</option>



    <?php $qu="select * from category"; $ru=mysqli_query($con,$qu); while($ro=mysqli_fetch_array($ru)){ $firstname=$ro['cate_name']; ?>   
          <option name="cate_name" value="<?php echo ucwords($firstname); ?>"><?php echo ucwords($firstname); ?></option>
        <?php } ?>         
        </select>
      </div>
    </div>



    <div class="row">
      <div class="col-25">
        <label for="writer">writer</label>
      </div>

     <div class="col-75">
        <select id="writer" name="writer_name">
    <option value="writers">Select Option</option>




     <?php $qu="select * from writers"; $ru=mysqli_query($con,$qu); while($ro=mysqli_fetch_array($ru)){ $firstname=$ro['writer_name']; ?>		
          <option name="writer_name" value="<?php echo ucwords($firstname); ?>"><?php echo ucwords($firstname); ?></option>
            <?php } ?>         
        </select>
      </div>
    </div>
	
   <div class="row">
   <div class="col-25">
        <label for="state">state</label>
      </div>

     <div class="col-75">
        <select id="state" name="state_name">
    <option value="state">Select Option</option>




      <?php $qu="select * from state"; $ru=mysqli_query($con,$qu); while($ro=mysqli_fetch_array($ru)){ $firstname=$ro['state_name']; ?>   
          <option name="state_name" value="<?php echo ucwords($firstname); ?>"><?php echo ucwords($firstname); ?></option>
     <?php } ?>         
        </select>
      </div>
	 </div>
    
     <div class="row">
      <div class="col-25">
        <label for="subject">summary</label>
      </div>
      <div class="col-75">
        <textarea  name="summary" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="upload" value="Submit">
    </div>
  </form>
</div>
</body>
</html>



<?php 
 if(isset($_POST['upload'])){
   $title=$_POST['title'];
   $cate_name=$_POST['cate_name'];

   $writer_name=$_POST['writer_name'];
   $state_name=$_POST['state_name'];

   $description=$_POST['description'];
   $summary=$_POST['summary'];
   $image_name = $_FILES['image']['name'];
   $image_tmp = $_FILES['image']['tmp_name'];
   
   move_uploaded_file($image_tmp,"image/$image_name");
   
   
    $query="insert into newsuplod(title,cate_name,writer_name,state_name,description,image_name,summary,status) values('$title','$cate_name','$writer_name','$state_name','$description','$image_name','$summary','1')"; 
   $run=mysqli_query($con,$query);
   if($run){
   
   echo "<script>alert('data submit successfully')</script>";
   
   }
 }
?>