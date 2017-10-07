<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
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
	<a href="index.php">Go Back</a>
	
	<?php
	    $record = $_POST["record"];
	    
	    if ("" == trim($record)) {
	        // leave blank
	    } else {
	        $query = "DELETE FROM courses WHERE record = $record";
	        $result = mysqli_query($connection, $query);
	        
	        if ($result) {
	            echo "Record " . $record . " has been successfully deleted.";
	        } else {
	            echo "Error: " . $query . mysql_error();
	        }
	    }
	?>
	<!--DELETE FROM table_name-->
 <!--   WHERE some_column = some_value-->
	<?php
	    $std_id = $_POST["std_id"];
	    
	    if ("" == trim($std_id)) {
	        // leave blank
	    } else {
	        $query = "DELETE FROM courses WHERE std_id = $std_id";
	        $result = mysqli_query($connection, $query);
	        
	        if ($result) {
	            echo "Student ID " . $std_id . " has been successfully deleted.";
	        } else {
	            echo "Error: " . $query . mysql_error();
	        }
	    }
	?>
</body>
</html>