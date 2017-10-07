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
			<br>
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
	
	
	UPDATE
	<?php
		$temp = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameEr = "Name is required";
			} else {
				$temp = $_POST["name"];
				if (!preg_match('/^[0-9]*$/', $temp)) {
					echo "Only number from 1 to 500";
				}
			}
		} 
	?>
	
	<form method="Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		Your old information:
		ID:
		<input type="text" name="name" value="<?php echo $temp; ?>">
		<input type="Submit" name="Submit">
	</form>
    <?php
        if ($temp == "") {
            // empty input
        } else {
            $query = "SELECT * FROM students WHERE id = $temp";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <table>
            <thead>
                <td>ID</td>
				<td>Name</td>
				<td>Gender</td>
				<td>Age</td>
				<td>Email</td>
            </thead>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["age"] ?></td>
                <td><?php echo $row["email"] ?></td>
            </tr>
        </table>
    <?php
            }
        }
    ?>
    <form method="Post" action="update.php">
    	Please update Information.
    	ID:
    	<input type="text" name="id">
    	Name:
    	<input type="text" name="name">
    	Gender:
    	<input type="text" name="gender">
    	Age:
    	<input type="text" name="age">
    	Email:
    	<input type="text" name="email">
    	<input type="Submit" name="Update">
    </form>
    <hr>
	</body>
</html>