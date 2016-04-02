<?php
	require("dbcontroller.php");
	$db_handle = new DBController();

	if(!empty($_POST["rollno"])) {
		$query = ("SELECT count(ROLLNO) FROM student WHERE RollNO='" . $_POST["rollno"] . "'");
		$result = $db_handle->runQuery($query);
		$row = $result[0];
		$user_count = $row['count(ROLLNO)'];
	
		if($user_count>0) {
			echo "<span class='status-not-available'> Already Registered.<img src='images/not_available.png' align='absmiddle'></span>";
			echo '<script>document.getElementById("submit").disabled = true;</script>';
		}
		else{
			echo '<script>document.getElementById("submit").disabled = false;</script>';
		}
	}
?>