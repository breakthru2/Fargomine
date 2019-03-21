<?php 

require_once 'libraries/functions.inc.php';
$user_id = $_SESSION['user_id'];

// echo format_post_date(return_expected_date($user_id)).'<br>';
// echo format_post_date(return_investment_date($user_id)).'<br>';

echo return_expected_date($user_id).'<br>';
echo return_investment_date($user_id).'<br>';

?>