<?php
	require("dbcontroller.php");
	$db_handle = new DBController();

	if(!empty($_POST["rollno"])) {
		$query = ("SELECT count(*) FROM student WHERE Roll_Number='" . $_POST["rollno"] . "'");
		$result = $db_handle->runQuery($query);
		$row = $result[0];
		$user_count = $row['count(*)'];
	
		if($user_count>0) {
			echo "<span class='status-not-available'> Already Registered.<img src='images/not_available.png' align='absmiddle'></span>";
			echo '<script>document.getElementById("submit").disabled = true;</script>';
		}
		else{
			echo '<script>document.getElementById("submit").disabled = false;</script>';
		}
	}
?>