<?php
    require_once 'libraries/functions.inc.php';

    global $link;
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT history.* FROM history INNER JOIN users ON history.user_id = users.user_id WHERE history.txType = 'Deposit' AND users.user_id = '$user_id' ORDER BY time DESC LIMIT 1";
        $query = mysqli_query($link, $sql);
        
        if (mysqli_num_rows($query) > 0) {
            	$row = mysqli_fetch_assoc($query);
                $time = $row['time'];
				//$expected_time = $row['expected_time'];
								               
                $expected_time = strtotime("+14 day", $time);
                //$new_time = strtotime("+14 day", $time);
                
                // echo format_post_date($time)."<br>";
                // echo format_post_date($expected_time)."<br>";
                // echo format_post_date($new_time)."<br>";

                if ($time >= $expected_time) {
                    echo "No Active Investments";
                }else{
                   echo "Active Investments";
                }
        }
?>