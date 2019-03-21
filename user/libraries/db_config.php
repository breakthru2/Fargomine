<?php 
define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "fargomine");

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

// if ($link) {
// 	echo "Connection was successful";
// } else {
// 	echo "Connection not successful";
// }