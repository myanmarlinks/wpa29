<?php 


function _db_get($table_name) {
	
	$servername = _config_get("database.hostname");
	$username = _config_get("database.username");
	$password = _config_get("database.password");
	$dbname = _config_get("database.dbname");

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM " . $table_name;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    
    	while($row = mysqli_fetch_assoc($result)) {
        	echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["address"]. "<br>";
    	}
	} else {
    	echo "0 results";
	}

	mysqli_close($conn);
	
}

function _db_get_select($table_name, $fields) {

}
 
 ?>