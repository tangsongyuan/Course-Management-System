<!DOCTYPE html>
<html>
	<head>
		<title>Course Selection System</title>
		<script src="https://use.fontawesome.com/e3542af9a4.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<?php
		    
		    //Connect to the database
		    $host = "127.0.0.1";
		    $user = "tangsongyuan";                     //Your Cloud 9 username
		    $pass = "";                                  //Remember, there is NO password by default!
		    $db = "c9";                                  //Your database name you want to connect to
		    $port = 3306;                                //The port #. It is always 3306
		    
		    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
		
		?>
		
		<nav class="navbar navbar-default">
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		
		            <a class="navbar-brand" href="/index.php">CourseSelection</a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		          	<li class="active"><a href="/index.php">Home</a></li>
		            <!--<li class="<%= typeof page !== 'undefined' && page === 'places' ? 'active' : '' %>"><a href="/index.php">Home</a></li>-->
		          </ul>
		        </div>
		    </div>
		</nav>
		
		<div class="container">