<?php 


function _connect_db() {
	$servername = _config_get("database.hostname");
	$username = _config_get("database.username");
	$password = _config_get("database.password");
	$dbname = _config_get("database.dbname");

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function _db_get($table_name) {

	$conn = _connect_db();	
	
	
	$sql = "SELECT * FROM " . $table_name;
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

	if (mysqli_num_rows($result) > 0) {
		return mysqli_fetch_all($result, MYSQLI_ASSOC);    
    	
	} else {
    	return null;
	}

	
}

function _db_get_select($table_name, $fields) {

	$conn = _connect_db();

	$i_fields = implode(", ", $fields);
	$sql = "SELECT " . $i_fields . " FROM " . $table_name;

	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

	if (mysqli_num_rows($result) > 0) {
		return mysqli_fetch_all($result, MYSQLI_ASSOC);    
    	
	} else {
    	return null;
	}
}

function _db_insert($table_name, $values) {
	$conn = _connect_db();

	$keys = array_keys($values);
	$i_keys = implode(", ", $keys);
	$values = array_values($values);

	$s_value = "";
	foreach ($values as $value) {
		if(gettype($value) == 'string') {
			$s_value .= "'" . $value . "', ";
		} else {
			$s_value .= $value . ", ";
		}
	}
	$r_value = rtrim($s_value, ", ");

	$sql = "INSERT INTO " . $table_name . " (" . $i_keys . ") " 
				. "VALUES (" . $r_value . ")";


	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

	return $result;
}
 
 ?>