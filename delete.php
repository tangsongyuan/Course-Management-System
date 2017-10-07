<?php include './partials/header.php';?>


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


<?php include './partials/footer.php';?>