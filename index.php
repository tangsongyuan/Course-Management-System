<!DOCTYPE html>
<html>
	<head>
		<title>Course Selection System</title>
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
		
		    //And now to perform a simple query to make sure it's working
		    
		    // $query = "SELECT * FROM students";
		    // $result = mysqli_query($connection, $query);
		
		    // while ($row = mysqli_fetch_assoc($result)) {
		    //     echo "The ID is: " . $row['id'] . " and the Username is: " . $row['name'];
		    //     echo "<br>";
		    // }
		
		?>
		
		<h1>Howdy!</h1>
		<h2>Welcome to Course Selection System</h2>
		<hr/>
		
		<form Method = "Post" Action = "select.php">
			SELECTION
			To review personal information, please enter ID (1-500):
			<input type="text" name="id1">
			<input type="Submit" value="Submit">
			<br>
			
			To review one student's courses:
			<input type="text" name="id2">
			<input type="Submit" value="Submit">
			<br>
			
			Look for all students in a course:
			<select name="department">
				<option value="CSCE">CSCE</option>
				<option value="ECEN">ECEN</option>
			</select>
			<input type="text" name="number">
			<input type="Submit" value="Submit">
			<br>
		</form>
	<hr>
	
	

	</body>
</html>