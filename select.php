<?php include './partials/header.php';?>

	<a href="index.php">Go Back</a>
	
	<h1>Retrieving Data from Database:</h1>


	<?php 
		$id1 = $_POST["id1"];
		if ("" == trim($id1)) {
			# input is empty, leave blank
		} else if (preg_match("/[\D]/", $id1)) {
			die ("Invalid ID! ID should be numerical.");
		} else {
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
		
		<?php
			$query = "SELECT * FROM students WHERE id = $id1";
		    $result = mysqli_query($connection, $query);
		    while ($row = mysqli_fetch_assoc($result)) {
		?>
		        <tr>
					<td><?php echo $row["id"]?></td>
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["gender"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["email"]?></td>
				</tr>
		<?php
		    }
		?>

	</table>

	<?php
		}
	?>
	
	
	<?php 
	$id2 = $_POST["id2"];
	if ("" == trim($id2)) {
		# input is empty, leave blank
	} else if (preg_match("/[\D]/", $id2)) {
		die ("Invalid ID! ID should be numerical.");
	} else {
	?>
	
	<table>
		<thead>
			<tr>
				<td>department</td>
				<td>number</td>
				<td>course</td>
			</tr>
		</thead>
		
		<?php
			$query = "SELECT * FROM courses WHERE std_id = $id2";
		    $result = mysqli_query($connection, $query);
		    while ($row = mysqli_fetch_assoc($result)) {
		?>
		        <tr>
					<td><?php echo $row["department"]?></td>
					<td><?php echo $row["number"]?></td>
					<td><?php echo $row["course"]?></td>
				</tr>
		<?php
		    }
		?>

	</table>

	<?php
		}
	?>
	
	
	<?php
		$department = $_POST["department"];
		$number = $_POST["number"];
		
		if ("" == trim($number)) {
			// empty input
		} else if (preg_match("/[\D]/",$_POST["number"] )) {
			die ("Invalid Course Number! Number should be numerical.");
		} else {
			$sql = "SELECT * FROM courses WHERE department = '{$department}' AND number = $number";
			// $result = mysql_query($sql);
			$result = mysqli_query($connection, $sql);
	?>
		<table>
			<thead>
				<tr>
					<td>record</td>
					<td>student ID</td>
					<td>department</td>
					<td>number</td>
					<td>course</td>
				</tr>
			</thead>
	<?php
		while ($row = mysqli_fetch_assoc($result)) {
	?>
		<tr>
			<td><?php echo $row["record"]?></td>
			<td><?php echo $row["std_id"]?></td>
			<td><?php echo $row["department"]?></td>
			<td><?php echo $row["number"]?></td>
			<td><?php echo $row["course"]?></td>
		</tr>
	
	<?php
		}
		}
	?>
		</table>

<?php include './partials/footer.php';?>