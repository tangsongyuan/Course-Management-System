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
	    $std_id = $_POST["std_id"];
	    $department = $_POST["department"];
	    $number = $_POST["number"];
	    $course = $_POST["course"];
	    
        if ($record == '') {
            die ("Invalid Record and Record should be numerical.");
        }
        // if ($record < 10000 || $record > 20000) {
        //     die ("Invalid Record and Record varies from 10000 to 20000");
        // }
        $query = "INSERT INTO courses (record, std_id, department, number, course) VALUES ($record, $std_id, '{$department}', $number, '{$course}')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            echo "New Record created successfully.";
        } else {
            echo "Error: " . $query. mysql_error();
        }
	?>
	
	<table>
	    <thead>
	        <tr>
	            <td>Record</td>
	            <td>Student ID</td>
	            <td>Department</td>
	            <td>Number</td>
	            <td>Course</td>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	            <td><?php echo $record ?></td>
	            <td><?php echo $std_id ?></td>
	            <td><?php echo $department ?></td>
	            <td><?php echo $number ?></td>
	            <td><?php echo $course ?></td>
	        </tr>
	    </tbody>
	</table>
	
</body>
</html>