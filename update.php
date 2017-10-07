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
	    $id = $_POST["id"];
	    $name = $_POST["name"];
	    $gender = $_POST["gender"];
	    $age = $_POST["age"];
	    $email = $_POST["email"];
	    
	    $query = "UPDATE students SET  name='{$name}', gender='{$gender}', age='{$age}', email='{$email}' WHERE id=$id";
	    $result = mysqli_query($connection, $query);
	    if ($result) {
	        echo "Update Successfully.";
	    } else {
	        echo "Error in updating:" . $connection->error;
	    }
	?>
	
	Your updated information:
	<?php
	    $query = "SELECT * FROM students WHERE id = $id";
	    $result = mysqli_query($connection, $query);
	    while ($row = mysqli_fetch_assoc($result)) {
	?>
	        <table>
        		<thead>
        			<tr>
        				<td>ID</td>
        				<td>Name</td>
        				<td>Gender</td>
        				<td>Age</td>
        				<td>Email</td>
        			</tr>
        		</thead>
        		<tr>
					<td><?php echo $row["id"]?></td>
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["gender"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["email"]?></td>
				</tr>
			</table>
    <?php
	    }
	?>
	
</body>
</html>