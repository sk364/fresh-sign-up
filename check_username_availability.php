<?php
require("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["username"])) {
  $query = ("SELECT count(*) FROM student WHERE USERNAME='" . $_POST["username"] . "'");
  $result = $db_handle->runQuery($query);
  $row = $result[0];
  $user_count = $row['count(*)'];
  if($user_count>0) {
      echo "<span class='status-not-available'> Not Available.<img src='images/not_available.png' align='absmiddle'></span>";
	  echo '<script>document.getElementById("submit").disabled = true;</script>';
  }else{
      echo "<span class='status-available'> Available.<img src='images/available.png' align='absmiddle'></span>";
	  echo '<script>document.getElementById("submit").disabled = false;</script>';
  }
}
?>