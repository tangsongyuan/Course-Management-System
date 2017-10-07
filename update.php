<?php include './partials/header.php';?>

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
	
<?php include './partials/footer.php';?>