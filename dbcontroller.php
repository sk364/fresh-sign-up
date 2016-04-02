<?php
class DBController {
	public $host = "localhost";
	public $user = "utsav";
	public $password = "utsav";
	public $database = "students";
	public $conn;
	
	function __construct() {
		$this->connectDB();
		if(!empty($this->conn)) {
			$this->selectDB($this->conn);
		}
	}
	function connectDB() {
		$this->conn = new mysqli($this->host,$this->user,$this->password);
		// Check connection
		if ($this->conn->connect_error) {
    			die("Connection failed: " . $this->conn->connect_error);
		} 
	}
	
	function selectDB($conn) {
		$sql = "use students";
		if ($conn->query($sql) === TRUE) {
    			//echo "Database selected successfully";
		} else {
    			echo "Error selecting database: " . $conn->error;
		}
	}
	
	function runQuery($query) {
		$result = $this->conn->query($query);
		while($row=$result->fetch_assoc()) {
			$resultset[] = $row;
		}		
		if(!empty($resultset)){
			return $resultset;
		}
	}
	
	function insertQuery($query){
		echo "Successfully inserted";
		return $this->conn->query($query);
	}
	
}
?>