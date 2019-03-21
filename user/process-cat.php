<?php 
require_once 'libraries/functions.inc.php';

if (isset($_POST['category'])) {
	if (preg_match("/^[a-z]+\s*[a-z]+$/i", $_POST['category'])) {
			$tmp = sanitize($_POST['category']);	
			if (!check_duplicate("categories", "category", $tmp)){
				$category = $tmp;
			} else {
				echo '"'. $tmp . '"' . " already added!";
				exit();
			}
		} else {
			echo "Empty field not allowed!";
			exit();
		}
		
		
		$sql = "INSERT INTO categories (category) VALUES ('$category')";
		$query = mysqli_query($link, $sql);
		if ($query) {
			echo "New category added successfully!";
		} else {
			echo "Oops, something went wrong";
		}
	} 
