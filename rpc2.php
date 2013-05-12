<?php
include 'dbcreds.php';
	$db = new mysqli($hostname, $username, $password, $dbname);
	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: Could not connect to the database.';
	} else {
		// Is there a posted query string?
		if(isset($_POST['queryString'])) {
			$queryString = $db->real_escape_string($_POST['queryString']);
			if(strlen($queryString) >0) {
				$query = $db->query("SELECT value FROM countries WHERE value LIKE '$queryString%' LIMIT 5");
				if($query) {
					while ($result = $query ->fetch_object()) {
	         			echo '<li onClick="fillb(\''.$result->value.'\');">'.$result->value.'</li>';
	         		}
				} else {
					echo 'ERROR: There was a problem with the query.';
				}
			} else {}
		} else {
			echo 'There should be no direct access to this script!';
		}
	}
?>