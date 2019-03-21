<?php
    require_once 'libraries/db_config.php';
    global $link;
if (isset($_REQUEST['txID'])) {
    $txID = $_REQUEST['txID'];
    $sql = "SELECT escrow.*, users.firstname FROM escrow INNER JOIN users ON escrow.user_id = users.user_id WHERE esID = $txID";
    
    $query = mysqli_query($link, $sql);
	if (mysqli_num_rows($query) > 0) {
			$data = mysqli_fetch_array($query);                        
        }  
        echo json_encode($data);                
}

        
?>  