<?php
	require('dbcontroller.php');
	$db_handle = new DBController();

	$name = $_POST['name'];
	$username = $_POST['username'];
	$roll_num = $_POST['rollno'];
	$pass = $_POST['pwd'];
	$branch = $_POST['branch'];
	$discipline=$_POST['discipline'];
	$year=$_POST['year'];
	$options = array('cost' => 11);
	$pwd = password_hash($pass, PASSWORD_BCRYPT, $options);
	
	if(empty($_POST["dob"])){
		if(empty($_POST["sex"])){
			$query = 'INSERT INTO student values('.$name.',"'.$roll_num.'","'.$username.'",NULL,NULL,"'.$branch.'","'.$discipline.'","'.$year.'","'.$pwd.'")';
			
			$result=$db_handle->insertQuery($query);
		}
		else{
			$sex = $_POST['sex'];
			
			$query = 'INSERT INTO student values('.$name.',"'.$roll_num.'","'.$username.'",NULL,"'.$sex.'","'.$branch.'","'.$discipline.'","'.$year.'","'.$pwd.'")';
			
			$result=$db_handle->insertQuery($query);
		}
	}
	else{
		if(empty($_POST["sex"])){
			$dob = $_POST['dob'];
			//echo $dob;
			
			$query = 'INSERT INTO student values('.$name.',"'.$roll_num.'","'.$username.'","'.$sex.'",NULL,"'.$branch.'","'.$discipline.'","'.$year.'","'.$pwd.'")';
			
			$result=$db_handle->insertQuery($query);
		}
		else{
			$sex = $_POST['sex'];
			$dob = $_POST['dob'];
			$query = 'INSERT INTO student values("'.$name.'",'.$roll_num.',"'.$username.'","'.$dob.'","'.$sex.'","'.$branch.'","'.$discipline.'","'.$year.'","'.$pwd.'")';
			//echo "yes";
			$result=$db_handle->insertQuery($query);
		}
	}
	
	header('LOCATION:registered.php');
?>