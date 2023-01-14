<?php
class DBController {
	private $host = "127.0.0.1";
	private $user = "root";
	private $password = "";
	private $database = "iwm_addtocart";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
		// ANCHOR connect to database 

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	// ANCHOR lunch querry

	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	// ANCHOR Nbr of rows get by querry
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>