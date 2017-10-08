<?php include './partials/header.php';?>


	<br>


	<?php 
		$id1 = $_POST["id1"];
		if ("" == trim($id1)) {
			# input is empty, leave blank
		} else if (preg_match("/[\D]/", $id1)) {
			die ("Invalid ID! ID should be numerical.");
		} else {
	?>
	
	<h3>Personal Information of Student ID: <?php echo $id1 ?></h3>	
	
    <table class="table table-striped">
		<thead>
			<th></th>
            <td>ID</td>
			<td>Name</td>
			<td>Gender</td>
			<td>Age</td>
			<td>Email</td>
	  	</thead>
	  	<tbody>
		
		<?php
			$query = "SELECT * FROM students WHERE id = $id1";
		    $result = mysqli_query($connection, $query)  or die(mysql_error());
		    
		    $num_rows = $result->num_rows;
		    // echo $num_rows;
		    
		    if ($num_rows > 0) {
		    while ($row = mysqli_fetch_assoc($result)) {
		?>
		        <tr>
		        	<th></th>
					<td><?php echo $row["id"]?></td>
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["gender"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["email"]?></td>
				</tr>
		<?php
		    }
		    } else {
		?>
		    	<tr>
			    	<th></th>
			    	<td><?php echo "0 result found." ?></td>
			    	<td></td>
			    	<td></td>
			    	<td></td>
			    	<td></td>
		    	</tr>
		<?php
		    }
		?>

		</tbody>
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
	
	<h3>Course Information of Student ID: <?php echo $id2 ?></h3>
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th></th>
				<td>department</td>
				<td>number</td>
				<td>course</td>
			</tr>
		</thead>
		
		<?php
			$query = "SELECT * FROM courses WHERE std_id = $id2";
		    $result = mysqli_query($connection, $query);
		    
		    $num_rows = $result->num_rows;
		    // echo $num_rows;
		    
		    if ($num_rows > 0) {
		    while ($row = mysqli_fetch_assoc($result)) {
		?>
		        <tr>
		        	<th></th>
					<td><?php echo $row["department"]?></td>
					<td><?php echo $row["number"]?></td>
					<td><?php echo $row["course"]?></td>
				</tr>
		<?php
		    } 
		    } else {
		?>
		    	<tr>
			    	<th></th>
			    	<td><?php echo "0 result found." ?></td>
			    	<td></td>
			    	<td></td>
			    	<td></td>
			    	<td></td>
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
	
	<h3>Students registered for <?php echo $department ?>  <?php echo $number?></h3>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th></th>
					<td>Record No.</td>
					<td>Student ID</td>
					<td>Department</td>
					<td>Number</td>
					<td>Course</td>
				</tr>
			</thead>
	<?php
	
		$num_rows = $result->num_rows;
	    // echo $num_rows;
	    
	    if ($num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
	?>
		<tr>
			<th></th>
			<td><?php echo $row["record"]?></td>
			<td><?php echo $row["std_id"]?></td>
			<td><?php echo $row["department"]?></td>
			<td><?php echo $row["number"]?></td>
			<td><?php echo $row["course"]?></td>
		</tr>
	
	<?php
		}
		} else {
	?>
	    	<tr>
		    	<th></th>
		    	<td><?php echo "0 result found." ?></td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
	    	</tr>
	<?php
		}
		}
	?>
		</table>
		
		
	<?php 
		$id3 = $_POST["id3"];
		if ("" == trim($id3)) {
			# input is empty, leave blank
		} else if (preg_match("/[\D]/", $id3)) {
			die ("Invalid ID! ID should be numerical.");
		} else {
	?>
	
	<h3>Course Information of Course ID: <?php echo $id3 ?></h3>	
	
    <table class="table table-striped">
		<thead>
			<th></th>
            <td>Course ID</td>
			<td>Department</td>
			<td>Number</td>
			<td>Course</td>
			<td>Credit</td>
			<td>Prerequisite Course</td>
	  	</thead>
	  	<tbody>
	  		
	  	<?php
			$query = "SELECT * FROM information WHERE info_id = $id3";
		    $result = mysqli_query($connection, $query)  or die(mysql_error());
		    
		    $num_rows = $result->num_rows;
		    // echo $num_rows;
		    
		    if ($num_rows > 0) {
		    while ($row = mysqli_fetch_assoc($result)) {
		?>
		        <tr>
		        	<th></th>
					<td><?php echo $row["info_id"]?></td>
					<td><?php echo $row["department"]?></td>
					<td><?php echo $row["number"]?></td>
					<td><?php echo $row["course"]?></td>
					<td><?php echo $row["credit"]?></td>
					<td><?php echo $row["preCourse"]?></td>
				</tr>
		<?php
		    }
		    } else {
		?>
		    	<tr>
			    	<th></th>
			    	<td><?php echo "0 result found." ?></td>
			    	<td></td>
			    	<td></td>
			    	<td></td>
			    	<td></td>
		    	</tr>
		<?php
		    }
		?>

		</tbody>
	</table>
	
	<?php
		}
	?>
		

<a href="index.php">Go Back</a>

<?php include './partials/footer.php';?>