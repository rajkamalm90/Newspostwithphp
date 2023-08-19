<?php
 session_start();
 if(!isset($_SESSION['email']))
 {
	 header('location:login.php');
 }
 else
 {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Prac</title>

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
		<h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <small>Statics Overview</small></h1><hr>
		<ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
        </ol>
		<div class="row tags-boxes">
			<div class="col-md-6 col-lg-3">
			<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="">
			<div class=""><img src="image/pic.jpg" alt="Girl in a jacket" width="100%" height="60"></div>
			 <!-- <div class="col-xs-3"><i class="fa fa-comment-o fa-5x"></i></div>
			  <div class="col-xs-9">
			  <div class="text-right huge">12</div>
			  <div class="text-right">New Comments</div>
			  </div>-->
			</div>
			</div>
			<a href="">
			<div class="panel-footer">
			<span class="pull-left">Views All Comment</span>
			<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			<div class="clearfix"></div>
			</div>
			</a>
			</div>
			</div>
		
		    <div class="col-md-6 col-lg-3">
			<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="row">
			<div class="col-xs-3"><img src="image/pic.jpg" alt="Girl in a jacket" width="50" height="60"></div>
			<div class="col-xs-9">
			<div class="text-right huge">20</div>
			<div class="text-right">Views</div>
			</div>
			</div>
			</div>
			<a href="">
			<div class="panel-footer">
			<span class="pull-left">All Views</span>
			<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			<div class="clearfix"></div>
			</div>
			</a>
			</div>
			</div>
			
			<div class="col-md-6 col-lg-3">
			<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="row">
			<div class="col-xs-3"><i class="fa fa-user-circle-o fa-5x"></i></div>
			<div class="col-xs-9">
			<div class="text-right huge">6</div>
			<div class="text-right">Users</div>
			</div>
			</div>
			</div>
			<a href="">
			 <div class="panel-footer">
			 <span class="pull-left">All Users</span>
			 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			 <div class="clearfix"></div>
			 </div>
			</a>
			</div>
			</div>
			
			<div class="col-md-6 col-lg-3">
			<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="row">
			<div class="col-xs-3"><i class="fa fa-folder-open-o fa-5x"></i></div>
			<div class="col-xs-9">
			<div class="text-right huge">30</div>
			<div class="text-right">Categories</div>
			</div>
			</div>
			</div>
			<a href="">
			<div class="panel-footer">
			<span class="pull-left">All Categories</span>
			<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			<div class="clearfix"></div>
			</div>
			</a>
			</div>
			</div>
		    
			<div class="col-md-6 col-lg-3">
			<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="row">
			<div class="col-xs-3"><i class="fa fa-folder-open-o fa-5x"></i></div>
			<div class="col-xs-9">
			<div class="text-right huge">23</div>
			<div class="text-right">Add</div>
			</div>
			</div>
			</div>
			<a href="">
			<div class="panel-footer">
			<span class="pull-left">Add details</span>
			<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			<div class="clearfix"></div>
			</div>
			</a>
			</div>
			</div>
			
			<div class="col-md-6 col-lg-3">
			<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="row">
			<div class="col-xs-3"><i class="fa fa-folder-open-o fa-5x"></i></div>
			<div class="col-xs-9">
			<div class="text-right huge">30</div>
			<div class="text-right">Categories</div>
			</div>
			</div>
			</div>
			<a href="">
			<div class="panel-footer">
			<span class="pull-left">All Categories</span>
			<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			<div class="clearfix"></div>
			</div>
			</a>
			</div>
			</div>
			
			<div class="col-md-6 col-lg-3">
			<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="row">
			<div class="col-xs-3"><i class="fa fa-folder-open-o fa-5x"></i></div>
			<div class="col-xs-9">
			<div class="text-right huge">30</div>
			<div class="text-right">Categories</div>
			</div>
			</div>
			</div>
			<a href="">
			<div class="panel-footer">
			<span class="pull-left">All Categories</span>
			<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			<div class="clearfix"></div>
			</div>
			</a>
			</div>
			</div>
			
			<div class="col-md-6 col-lg-3">
			<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="row">
			<div class="col-xs-3"><i class="fa fa-folder-open-o fa-5x"></i></div>
			<div class="col-xs-9">
			<div class="text-right huge">30</div>
			<div class="text-right">Categories</div>
			</div>
			</div>
			</div>
			<a href="">
			<div class="panel-footer">
			<span class="pull-left">All Categories</span>
			<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			<div class="clearfix"></div>
			</div>
			</a>
			</div>
			</div>
			
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
 <?php } ?>
 