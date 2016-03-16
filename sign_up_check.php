<?php
	require('dbcontroller.php');
	$db_handle = new DBController();

	$name = $_POST['name'];
	$username = $_POST['username'];
	$roll_num = $_POST['rollno'];
	$pwd = $_POST['pwd'];
	
	if(empty($_POST["dob"])){
		if(empty($_POST["sex"])){
			$query = 'INSERT INTO student values('.$roll_num.',"'.$name.'","'.$username.'","'.$pwd.'",NULL,NULL)';
			
			$db_handle->insertQuery($query);
		}
		else{
			$sex = $_POST['sex'];
			
			$query = 'INSERT INTO student values('.$roll_num.',"'.$name.'","'.$username.'","'.$pwd.'",NULL,"'.$sex.'")';
			
			$db_handle->insertQuery($query);
		}
	}
	else{
		if(empty($_POST["sex"])){
			$dob = $_POST['dob'];
			echo $dob;
			$query = 'INSERT INTO student values('.$roll_num.',"'.$name.'","'.$username.'","'.$pwd.'","'.$dob.'",NULL)';
			
			$db_handle->insertQuery($query);
		}
		else{
			$sex = $_POST['sex'];
			$dob = $_POST['dob'];
			
			$query = 'INSERT INTO student values('.$roll_num.',"'.$name.'","'.$username.'","'.$pwd.'","'.$dob.'","'.$sex.'")';
			
			$db_handle->insertQuery($query);
		}
	}
	
	header('LOCATION:registered.php');
?>