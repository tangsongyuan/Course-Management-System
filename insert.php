<?php include './partials/header.php';?>

	
	<?php
	    $record = $_POST["record"];
	    $std_id = $_POST["std_id"];
	    $department = $_POST["department"];
	    $number = $_POST["number"];
	    $course = $_POST["course"];
	    
        if ($record == '') {
            die ("Invalid Record and Record should be numerical.");
        }
        if ($std_id == '' || $std_id > 500 || $std_id < 0) {
        	die ("Invalid Student ID and Student ID should be in range of 1 through 500.");
        }
        $query = "INSERT INTO courses (record, std_id, department, number, course) VALUES ($record, $std_id, '{$department}', $number, '{$course}')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // echo "New Record created successfully.";
        ?>
            <p>New Record created successfully.</p>
            
            	<table class="table table-striped">
				    <thead>
				        <tr>
				        	<th></th>
				            <td>Record</td>
				            <td>Student ID</td>
				            <td>Department</td>
				            <td>Number</td>
				            <td>Course</td>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				        	<th></th>
				            <td><?php echo $record ?></td>
				            <td><?php echo $std_id ?></td>
				            <td><?php echo $department ?></td>
				            <td><?php echo $number ?></td>
				            <td><?php echo $course ?></td>
				        </tr>
				    </tbody>
				</table>
		<?php
        }
        else {
        ?>
        	<p>Record already exists.</p>
        <?php
        }

	?>
	
	<a href="index.php">Go Back</a>
	
<?php include './partials/footer.php';?>