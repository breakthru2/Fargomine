<?php 
ob_start();
session_start();
require_once 'db_config.php';
require_once 'mail-function.inc.php';


// Define all helper functions

function sanitize($input){
	global $link;
	$input = htmlentities(strip_tags(trim($input)));
	$input = mysqli_real_escape_string($link, $input);
	return $input;
}

function sanitize_email($email){
	global $link;
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	if ($email) {
		$email = mysqli_real_escape_string($link, $email);
		return $email;
	} return false;
}

function upload_image($file, &$errors){
	$size = $file['size'];
	$type = $file['type'];
	$tmp_location = $file['tmp_name'];

	if ($size > 5120000) {
		$errors[] = "Profile picture is too large.";
		return false;
	}

	$allowed_extensions = array("jpg", 'jpeg', 'png', 'gif');
	$file_ext = explode('/', $type);
	$image_ext = strtolower(end($file_ext));
	if (!in_array($image_ext, $allowed_extensions)) {
		$errors[] = "File type not allowed";
		return false;
	}

	$upload_dir = "uploads/";
	$image_name = hash("sha256", uniqid());
	$image_path = $upload_dir . $image_name . "." . $image_ext;

	if (move_uploaded_file($tmp_location, $image_path)) {
		return $image_path;
	} 

	$errors[] = "Sorry, image upload failed!";
	return false;
}

function check_duplicate($email){
	global $link;
	$sql = "SELECT email FROM users WHERE email = '$email'";
	$query = mysqli_query($link, $sql);
	if ($query) {
		if (mysqli_num_rows($query) > 0) {
			return true;
		} return false;
	} return false;
}

function format_post_date($date){
	$date = date("Y-m-d H:i:s", $date);
	return $date;
}

function verify_password($email, $plain_pw){
	global $link;
	$sql = "SELECT user_id, password, block_chain, admin FROM users WHERE email = '$email'";
	$query = mysqli_query($link, $sql);
	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_array($query);
		$hashed_password = $row['password'];
		$user_id = $row['user_id'];
		$block_chain = $row['block_chain'];
		$role = $row['admin'];
		if (password_verify($plain_pw, $hashed_password)) {
			$_SESSION['user_id'] = $user_id;
			$_SESSION['block_chain'] = $block_chain;
			$_SESSION['role'] = $role;
			return true;
		} return false;
	} return false;
}

// Helper functions end here

function register_user($post, $file){
	global $link;
	$errors = array();
	$err_flag = false;

	//firstname
	if (!empty($post['firstname'])) {
		$firstname = sanitize($post['firstname']);
	} else {
		$errors['firstname'] = "Enter your first name";
		$err_flag = true;
	}

	//surname
	if (!empty($post['surname'])) {
		$surname = sanitize($post['surname']);
	} else {
		$errors['surname'] = "Enter your surname";
		$err_flag = true;
	}

	//country
	if (!empty($post['country'])) {
		$country = sanitize($post['country']);
	} else {
		$err_flag = true;
		$errors['country'] = "Please select your country";
	}

	//state
	if (!empty($post['state'])) {
		$state = sanitize($post['state']);
	} else {
		$err_flag = true;
		$errors['state'] = "Please select your state";
	}
	
	//block chain
	if (!empty($post['block_chain'])) {
		$block_chain = sanitize($post['block_chain']);
	} else {
		$err_flag = true;
		$errors['block_chain'] = "Please select your block chain";
	}

	//email
	if (!empty($post['email'])) {
		$email_tmp = sanitize($post['email']);
		if (!check_duplicate($email_tmp)) {
			$email = $email_tmp;
		} else {
			$err_flag = true;
			$errors['email'] = "This email has already been used!";
		}
	} else {
		$err_flag = true;
		$errors['email'] = "Enter your email";
	}


	// if (!empty($post['role'])) {
	// 	$role = sanitize($post['role']);
	// } else {
	// 	$role = 0;
	// }

	//phone number
	if (!empty($post['phone_number'])) {
		$phone_number = sanitize($post['phone_number']);
	} else {
		$errors['phone_number'] = "Enter a phone number";
		$err_flag = true;
	}

	//gender
	if (!empty($post['gender'])) {
		$gender = sanitize($post['gender']);
	} else {
		$errors['gender'] = "Enter a gender";
		$err_flag = true;
	}

	//dob
	if (isset($post['accept'])) {
		$accept = sanitize($post['accept']);
	} else {
		$errors['accept'] = "Please accept our terms and conditions";
		$err_flag = true;
	}

	$dob = "none";

	//profile_pic
	if (!empty($file)) {
		$image_path = upload_image($file, $errors);
		if (!$image_path) {
			$err_flag = true;
		}
	} else {
		$errors['file'] = "Please select a profile picture";
		$err_flag = true;
	}
	//password
	if (!empty($post['password1'])) {
		$password1 = sanitize($post['password1']);
	} else {
		$errors['password1'] = "Enter your password";
		$err_flag = true;
	}

	if (!empty($post['password2'])) {
		$password2 = sanitize($post['password2']);
	} else {
		$errors['password2'] = "Confirm your password";
		$err_flag = true;
	}

	if (isset($password1) && isset($password2)) {
		if ($password1 == $password2) {
			$password = password_hash($password2, PASSWORD_DEFAULT);
		} else {
			$errors['password'] = "Passwords do not match";
			$err_flag = true;
		}
	}
	$admin_role = 0;


	if ($err_flag === false) {
		$sql = "INSERT INTO users (firstname, surname, email, phone_number, gender, country, state, block_chain, password, dob, profile_pic_path,admin) VALUES ('$firstname', '$surname', '$email', '$phone_number', '$gender', '$country', '$state', '$block_chain', '$password', '$dob', '$image_path','$admin_role')";
		$query = mysqli_query($link, $sql);
		
		//if query is successful
		if ($query) {
			$subject = "Welcome to Fargo Mine";
			$body = get_email_template("email_template.php", $firstname, $email);
			$response = send_mail($email, $firstname, $subject, $body);

			if ($response) {
					return true;
			} else {
				$errors[] = "Ooops!!! Something went wrong. (Email)";
				return $errors;
			}
		} else {
			$errors[] = "Could not insert into database " . mysqli_error($link);
			return $errors;
		}
	} return $errors;

}


function get_email_template($file_path, $name, $email){
	// From URL to get webpage contents. 
	$url = $_SERVER['SERVER_NAME'] . '/user/libraries/' . $file_path; 

	// Initialize a CURL session. 
	$ch = curl_init();  

	// Return Page contents. 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

	//grab URL and pass it to the variable. 
	curl_setopt($ch, CURLOPT_URL, $url); 

	$body = curl_exec($ch); 
  
	$body = str_replace('#firstname#', $name, $body);
		$body = str_replace('#email#', $email, $body);
		return $body;
}

function login_user($post){
	global $link;
	$err_flag = false;
	$errors = [];

	if (!empty($post['email'])) {
		$tmp = sanitize_email($post['email']);
		if ($tmp) {
			$email = $tmp;
		} else {
			$err_flag = true;
			$errors[] = "Please enter a valid email address";
		}
	} else {
		$err_flag = true;
		$errors[] = "Please enter an email address";
	}

	if (!empty($post['password'])) {
		$password = sanitize($post['password']);
	} else {
		$err_flag = true;
		$errors[] = "Please enter your password";
	}

	if ($err_flag === false) {
		if (verify_password($email, $password)) {
					return true;
				} else {
					$errors[] = "Invalid login details";
					return $errors;
				}
	} return $errors;
}


function fetch_user($user_id = null){
	global $link;
	if ($user_id != null) {
		$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
		$query = mysqli_query($link, $sql);
		if (mysqli_num_rows($query) > 0) {
			$row = mysqli_fetch_array($query);
			return $row;
		} return false;
	} return false;
}


function fetch_categories(){
	global $link;
	$sql = "SELECT * FROM categories";
	$query = mysqli_query($link, $sql);
	$categories = [];
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$categories[] = $row;
		} return $categories;
	} return false;
}


function add_post($post, $file){
	global $link;
	$err_flag = false;
	$errors = [];

	if (!empty($post['title'])) {
		$title = sanitize($post['title']);
	} else {
		$errors['title'] = "Enter post title";
		$err_flag = true;
	}

	if (!empty($post['category'])) {
		$category = sanitize($post['category']);
	} else {
		$errors['category'] = "Select post category";
		$err_flag = true;
	}

	if (!empty($post['body'])) {
		$body = sanitize($post['body']);
	} else {
		$errors['body'] = "Enter post body";
		$err_flag = true;
	}

	$date = time();

	$image_path = upload_image($file, $errors);

	if (!$image_path) {
		$err_flag = true;
	}

	if ($err_flag === false) {
		$user_id = $_SESSION['user_id'];

		$sql = "INSERT INTO posts (title, body, post_image_path, cat_id, user_id, post_date) VALUES ('$title', '$body', '$image_path', '$category', '$user_id', '$date')";

		$query = mysqli_query($link, $sql);

		if ($query) {
			return true;
		} else {
			$errors['db'] = "Ooops! Something went wrong";
			return $errors;
		}
	} return $errors;


}


function invest($post){
	global $link;
	$err_flag = false;
	$errors = [];

	if (isset($post['user_id'])) {
		$user_id = $post['user_id'];
	}

	//amount 
	if (!empty($post['amount'])) {
		$amount = sanitize($post['amount']);

		$sql_bal = "SELECT balance_total FROM balance WHERE user_id = '$user_id'";

		$query_bal = mysqli_query($link, $sql_bal);
		if (mysqli_num_rows($query_bal) > 0) {
			$row = mysqli_fetch_array($query_bal);
			$balance = $row['balance_total'];
			//echo $balance;
		}else{
			$balance = 0;
		}
	} else {
		$errors['amount'] = "Enter a valid amount";
		$err_flag = true;
	}

	$txType = "Deposit";
	$time =  time();//date('Y-m-d H:i:s')
	$expect_time = strtotime("+14 day", time());
	$txComplete = "Admin BTC";
	
	//ROI
	if (!empty($post['roi'])) {
		$roi = sanitize($post['roi']);
	} else {
		$errors['roi'] = "Roi missing";
		$err_flag = true;
	}
	if (!empty($post['bitcoin'])) {
		$bitcoin = sanitize($post['bitcoin']);
	} else {
		$errors['bitcoin'] = "Bitcoin missing";
		$err_flag = true;
	}
	if (!empty($post['admin_btc'])) {
		$admin_btc = sanitize($post['admin_btc']);
	} else {
		$errors['admin_btc'] = "Admin BTC Account missing";
		$err_flag = true;
	}
	//$date = time();
	if ($err_flag === false) {

		$sql = "INSERT INTO history (user_id, txType, amount, time, roi, invested, admin_btc,expected_time, txComplete) VALUES ('$user_id', '$txType', '$amount', '$time','$roi', '$bitcoin','$admin_btc', '$expect_time','$txComplete')";
		//Insert into history
		$query = mysqli_query($link, $sql);
		$new_total = $roi + $bitcoin;
		$new_total = convertToUSD($new_total);

		$new_balance = $balance + $new_total;
		
		$sql_check = "SELECT balance_total FROM balance WHERE user_id = '$user_id'";
		$query_check = mysqli_query($link, $sql_check);
		if (mysqli_num_rows($query_check) > 0) {
			$sql = "UPDATE balance SET balance_total = '$new_balance' WHERE user_id = '$user_id'";
				$query = mysqli_query($link, $sql);
						if($query){								
							//return true;
						}else{								
							//return false;
						} 	
		}else{
			$sql = "INSERT INTO balance (user_id, balance_total) VALUES ('$user_id', '$new_balance')";
				$query = mysqli_query($link, $sql);
						if($query){								
							//return true;
						}else{								
							//return false;
						} 	
		}


				

				if ($query) {
					return true;
				} else {
					$errors['db'] = "Ooops! Something went wrong";
					return $errors;
				}

		} return $errors;	
}

function withdraw($post){
	global $link;
	$err_flag = false;
	$errors = [];
	if (isset($post['user_id'])) {
		$user_id = $post['user_id'];
	}

	//amount 
	if (!empty($post['amount'])) {
		$amount = sanitize($post['amount']);
		$amount = intval($amount);
		
		$sql_bal = "SELECT balance_total FROM balance WHERE user_id = '$user_id'";

		$query_bal = mysqli_query($link, $sql_bal);
		if (mysqli_num_rows($query_bal) > 0) {
			$row = mysqli_fetch_array($query_bal);
			$balance = $row['balance_total'];
			//echo $balance;
				if ($amount > $balance) {
					$errors['amount'] = "Withdraw amount lesser than your balance";
					$err_flag = true;
					//echo $balance;
				} 
		}

		
	} else {
		$errors['amount'] = "Enter a valid amount";
		$err_flag = true;
	}

	$txType = "Withdraw";
	$time = time();

	
	//bitcoin
	
	if (!empty($post['bitcoin'])) {
		$bitcoin = sanitize($post['bitcoin']);
	} else {
		$errors['bitcoin'] = "Bitcoin value missing";
		$err_flag = true;
	}

	//admin_btc
	if (!empty($post['admin_btc'])) {
		$admin_btc = sanitize($post['admin_btc']);
	} else {
		$errors['admin_btc'] = "Admin BTC Account missing";
		$err_flag = true;
	}

		if ($err_flag === false) {
		

		$sql = "INSERT INTO history (user_id, txType, amount, time, roi, invested, admin_btc, expected_time, txComplete) VALUES ('$user_id', '$txType', '$amount', '$time','', '','$admin_btc','$time','')";

		$query = mysqli_query($link, $sql);

			$new_balance = $balance - $amount;					
					 $sql_with = "UPDATE balance SET balance_total = '$new_balance' WHERE user_id = '$user_id'";
						$query_with = mysqli_query($link, $sql_with);
							if($query_with){								
								return true;
							}else{								
								//return false;
							} 							

		if ($query) {
			return true;
		} else {
			$errors['db'] = "Ooops! Something went wrong";
			return $errors;
		}
	} return $errors;


}

function balanceInBTC(){  
	$response = fetch_history();
        if ($response) {
            $posts = $response;
            
            $total_roi = 0;
            $total_invest = 0;
            $total_amount = 0;
            $total = 0;
            foreach ($posts as $post) {
                
                $txType = $post['txType'];
                $amount = $post['amount']; 
                $roi = $post['roi'];
                $invest = $post['invested'];
                
                if($txType === "Deposit"){
                    $total_roi += $roi;
                    $total_invest += $invest; 
                    $total_amount += $amount;                                   
                }
                $total = $total_roi + $total_invest;
            }
            return $total;
        }
}

function getBalance(){
	global $link;
	$user_id = $_SESSION['user_id'];

	$sql_bal = "SELECT balance_total FROM balance WHERE user_id = '$user_id'";
	
	$query_bal = mysqli_query($link, $sql_bal);
		if (mysqli_num_rows($query_bal) > 0) {
			$row = mysqli_fetch_array($query_bal);
			$balance = $row['balance_total'];
			return $balance;
		}else{
			return 0;
		}
}

function convertToUSD($amount){
    $url = "https://blockchain.info/stats?format=json";
        $stats = json_decode(file_get_contents($url), true);
        $btcValue = $stats['market_price_usd'];
        $btcCost = $amount;
       // $usdCost = $amount;

        $convertedCost = $btcCost * $btcValue;
        
       return $convertedCost;
}
function fetch_history(){
	global $link;
	$user_id = $_SESSION['user_id'];
	$sql = "SELECT history.* FROM history INNER JOIN users ON history.user_id = users.user_id WHERE users.user_id = '$user_id'";
	$query = mysqli_query($link, $sql);
	$posts = [];
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$posts[] = $row;
		}
		return $posts;
	} return false;
}

function admin_fetch_history(){
	global $link;
	$user_id = $_SESSION['user_id'];
	$sql = "SELECT history.*, users.firstname FROM history INNER JOIN users ON history.user_id = users.user_id";
	$query = mysqli_query($link, $sql);
	$posts = [];
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$posts[] = $row;
		}
		return $posts;
	} return false;
}

function fetch_user_history($txID){
	global $link;
	$sql = "SELECT history.*, users.firstname FROM history INNER JOIN users ON history.user_id = users.user_id WHERE txID = '$txID'";
	$query = mysqli_query($link, $sql);
	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_assoc($query);
		return $row;
	} return false;
}

function fetch_posts(){
	global $link;
	$sql = "SELECT posts.*, users.email, users.fullname, users.profile_pic_path, categories.category FROM posts INNER JOIN users ON posts.user_id = users.user_id INNER JOIN categories ON posts.cat_id = categories.cat_id ORDER BY posts.post_date DESC LIMIT 30";
	$query = mysqli_query($link, $sql);
	$posts = [];
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$posts[] = $row;
		}
		return $posts;
	} return false;
}


function fetch_single_post($id = null){
	global $link;
	if ($id != null) {
		$sql = "SELECT posts.*, categories.category FROM posts INNER JOIN categories ON posts.cat_id = categories.cat_id WHERE posts.post_id = '$id'";
		$query = mysqli_query($link, $sql);

		if (mysqli_num_rows($query) > 0) {
			$post = mysqli_fetch_array($query);
			return $post;
		} return false;
	} return false;
}

function investment_date($user_id){
	global $link;
	//$user_id = $_SESSION['user_id'];

        $sql = "SELECT history.* FROM history INNER JOIN users ON history.user_id = users.user_id WHERE history.txType = 'Deposit' AND users.user_id = '$user_id' ORDER BY time DESC LIMIT 1";
        $query = mysqli_query($link, $sql);
        
        if (mysqli_num_rows($query) > 0) {
            	$row = mysqli_fetch_assoc($query);
                $time = $row['time'];
				$expected_time = $row['expected_time'];
				
				
               
                //$expected_time = strtotime("+14 day", $time);
                // $new_time = strtotime("+14 day", $time);
                
                // echo format_post_date($time)."<br>";
                // echo format_post_date($expected_time)."<br>";
                // echo format_post_date($new_time)."<br>";

                // if ($time < $expected_time) {
                //     return false;
                // }else{
                //    return true;
                // }
				
					 if ($time < $expected_time) {
                   			 return false;
					}else{
							return true;
					}
				
            
        }else{
			return true;
		}
}

function confirm_transaction($post){
	global $link;
	$err_flag = false;
	$errors = [];
	if (!empty($post['status'])) {
		$status = sanitize($post['status']);
	} else {
		$errors['status'] = "status value missing";
		$err_flag = true;
	}
	if (!empty($post['txID'])) {
		$txID = sanitize($post['txID']);
	} else {
		$errors['txID'] = "txID value missing";
		$err_flag = true;
	}


	$sql = "UPDATE history SET status = '$status' WHERE txID = '$txID'";
	$query = mysqli_query($link, $sql);
	if ($query) {
			return true;
		} else {
			$errors['db'] = "Ooops! Something went wrong";
			return $errors;
	} return $errors;
}

function escrow_sell($post){
	global $link;
	$err_flag = false;
	$errors = [];

	if (isset($post['user_id'])) {
		$user_id = $post['user_id'];
	}
	if (isset($post['status'])) {
		$status = $post['status'];
	}
	if (isset($post['block_chain'])) {
		$block_chain = $post['block_chain'];
	}
	if (isset($post['bitcoin'])) {
		$bitcoin = $post['bitcoin'];
	}

	//amount 
	if (!empty($post['amount'])) {
		$amount = sanitize($post['amount']);
	} else {
		$errors['amount'] = "Enter a valid amount";
		$err_flag = true;
	}

	
	$date =  time();//date('Y-m-d H:i:s')
	
	
	
	if ($err_flag === false) {


		
			$sql = "INSERT INTO escrow (user_id, esAmount, esDate, esStatus, esBlockChain, esBitcoin) VALUES ('$user_id', '$amount', '$date', '$status', '$block_chain', '$bitcoin')";
		//Insert into escrow
		$query = mysqli_query($link, $sql);
				if ($query) {
					return true;
				} else {
					$errors['db'] = "Ooops! Something went wrong";
					return $errors;
				}
		


		

		} return $errors;	
}

function fetch_escrow(){
	global $link;
	//$user_id = $_SESSION['user_id'];
	$sql = "SELECT escrow.*, users.firstname FROM escrow INNER JOIN users ON escrow.user_id = users.user_id";
	$query = mysqli_query($link, $sql);
	$posts = [];
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$posts[] = $row;
		}
		return $posts;
	} return false;
}

function fetch_escrow_history($txID){
	global $link;
	//$user_id = $_SESSION['user_id'];
	$sql = "SELECT escrow.*, users.firstname FROM escrow INNER JOIN users ON escrow.user_id = users.user_id WHERE esID = '$txID'";
	$query = mysqli_query($link, $sql);
	$posts = [];
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$posts[] = $row;
		}
		return $posts;
	} return false;
}

function escrow_invest($post){
	global $link;
	$err_flag = false;
	$errors = [];

	if (isset($post['user_id'])) {
		$user_id = $post['user_id'];
	}


	
	//amount 
	if (!empty($post['amount'])) {
		$amount = sanitize($post['amount']);

		$sql_bal = "SELECT balance_total FROM balance WHERE user_id = '$user_id'";

		$query_bal = mysqli_query($link, $sql_bal);
		if (mysqli_num_rows($query_bal) > 0) {
			$row = mysqli_fetch_array($query_bal);
			$balance = $row['balance_total'];
			//echo $balance;
		}else{
			$balance = 0;
		}
	} else {
		$errors['amount'] = "Enter a valid amount";
		$err_flag = true;
	}

	$txType = "Deposit";
	$time =  time();//date('Y-m-d H:i:s')
	$expect_time = strtotime("+14 day", time());
	$txComplete = "Escrow";
	
	//ROI
	if (!empty($post['roi'])) {
		$roi = sanitize($post['roi']);
	} else {
		$errors['roi'] = "Roi missing";
		$err_flag = true;
	}
	if (!empty($post['bitcoin'])) {
		$bitcoin = sanitize($post['bitcoin']);
	} else {
		$errors['bitcoin'] = "Bitcoin missing";
		$err_flag = true;
	}
	if (!empty($post['admin_btc'])) {
		$admin_btc = sanitize($post['admin_btc']);
	} else {
		$errors['admin_btc'] = "BTC Account missing";
		$err_flag = true;
	}
	if (!empty($post['seller_name'])) {
		$seller_name = sanitize($post['seller_name']);
	} else {
		$errors['seller_name'] = "Please select a seller's name";
		$err_flag = true;
	}
	if (!empty($post['esBitcoin'])) {
		$esBitcoin = sanitize($post['esBitcoin']);
	} 
	if (!empty($post['esAmount'])) {
		$esAmount = sanitize($post['esAmount']);
	} 
	if (!empty($post['esConfirm'])) {
		$esConfirm = sanitize($post['esConfirm']);		
	} 
	if ($esConfirm == "Not Confirmed") {
			$errors['esConfirm'] = "Not yet confirmed";
			$err_flag = true;
	}else {
			$err_flag = false;
	}
	

	if ($esAmount >= $amount) {
		$err_flag = false;
	}else{
		$errors['buy'] = "Seller's amount is lower than your's";
		$err_flag = true;
	}
	//$date = time();
	if ($err_flag === false) {

		$sql = "INSERT INTO history (user_id, txType, amount, time, roi, invested, admin_btc,expected_time, txComplete) VALUES ('$user_id', '$txType', '$amount', '$time','$roi', '$bitcoin','$admin_btc', '$expect_time','$txComplete')";
		//Insert into history
		$query = mysqli_query($link, $sql);
		$new_total = $roi + $bitcoin;
		$new_total = convertToUSD($new_total);

		$new_balance = $balance + $new_total;
		
		$sql_check = "SELECT balance_total FROM balance WHERE user_id = '$user_id'";
		$query_check = mysqli_query($link, $sql_check);
		if (mysqli_num_rows($query_check) > 0) {
			$sql = "UPDATE balance SET balance_total = '$new_balance' WHERE user_id = '$user_id'";
				$query = mysqli_query($link, $sql);
						if($query){								
							//return true;
						}else{								
							//return false;
						} 	
		}else{
			$sql = "INSERT INTO balance (user_id, balance_total) VALUES ('$user_id', '$new_balance')";
				$query = mysqli_query($link, $sql);
						if($query){								
							//return true;
						}else{								
							//return false;
						} 	
		}

		$sql_escrow = "SELECT esAmount, esBitcoin FROM escrow WHERE user_id = '$user_id'";
		$query_escrow = mysqli_query($link, $sql_check);

				
		
		if (mysqli_num_rows($query_escrow) > 0) {
			$new_esAmount = (int)($esAmount) - (int)($amount);
			$sql = "UPDATE escrow SET esAmount = '$new_esAmount', esStatus = 'Selling' WHERE user_id = '$user_id'";
				$query = mysqli_query($link, $sql);
						if($query){								
							//return true;
						}else{								
							//return false;
						} 	
		}

				if ($query) {
					return true;
				} else {
					$errors['db'] = "Ooops! Something went wrong";
					return $errors;
				}

		} return $errors;	
}

function escrow_confirm_transaction($post){
	global $link;
	$err_flag = false;
	$errors = [];
	if (!empty($post['esConfirm'])) {
		$esConfirm = sanitize($post['esConfirm']);
	} else {
		$errors['esConfirm'] = "Confirmation value missing";
		$err_flag = true;
	}
	if (!empty($post['txID'])) {
		$txID = sanitize($post['txID']);
	} else {
		$errors['txID'] = "txID value missing";
		$err_flag = true;
	}


	$sql = "UPDATE escrow SET esConfirm = '$esConfirm' WHERE esID = '$txID'";
	$query = mysqli_query($link, $sql);
	if ($query) {
			return true;
		} else {
			$errors['db'] = "Ooops! Something went wrong";
			return $errors;
	} return $errors;
}

function return_expected_date($user_id){
	global $link;	

        $sql = "SELECT history.* FROM history INNER JOIN users ON history.user_id = users.user_id WHERE history.txType = 'Deposit' AND users.user_id = '$user_id' ORDER BY time DESC LIMIT 1";
        $query = mysqli_query($link, $sql);
        
        if (mysqli_num_rows($query) > 0) {
            	$row = mysqli_fetch_assoc($query);
                $time = $row['time'];
				$expected_time = $row['expected_time'];
			return $expected_time;
            
        }		
}

function return_investment_date($user_id){
	global $link;	

        $sql = "SELECT history.* FROM history INNER JOIN users ON history.user_id = users.user_id WHERE history.txType = 'Deposit' AND users.user_id = '$user_id' ORDER BY time DESC LIMIT 1";
        $query = mysqli_query($link, $sql);
        
        if (mysqli_num_rows($query) > 0) {
            	$row = mysqli_fetch_assoc($query);
                $time = $row['time'];
				$expected_time = $row['expected_time'];
			return $time;
            
        }		
}

function contact_admin(){
	global $link;
	$err_flag = false;
	$errors = [];

	if (!empty($post['email'])) {
		$email = sanitize($post['email']);
	} else {
		$errors['email'] = "Confirmation value missing";
		$err_flag = true;
	}
	if (!empty($post['sbuject'])) {
		$sbuject = sanitize($post['sbuject']);
	} else {
		$errors['sbuject'] = "Confirmation value missing";
		$err_flag = true;
	}

	if (!empty($post['issue'])) {
		$issue = sanitize($post['issue']);
	} else {
		$errors['issue'] = "Confirmation value missing";
		$err_flag = true;
	}
	$headers = "From: fargomine.com" . "\r\n" . "CC: somebodyelse@example.com";

	$response = mail('paulbreakthrough@gmail.com', $subject, $body, $headers);

	if ($response) {
		echo "sent";
	}else {
			$errors['db'] = "Not sent";
			return $errors;
	} return $errors;
}
function user_check($user_id){
	global $link;

    $sql = "SELECT status FROM users WHERE user_id = $user_id";
    $query = mysqli_query($link,$sql);
    if (mysqli_num_rows($query) > 0) {
            	$row = mysqli_fetch_assoc($query);
                $status = $row['status'];
                
                if ($status === 'new') {
                    return true;
                }else if($status === 'old'){
                    return false;
                }
            
        }	
}
function fetch_user_status($user_id){
	global $link;
	$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
	$query = mysqli_query($link, $sql);
	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_assoc($query);
		return $row;
	} return false;
}
function fetch_user_check_history(){
	global $link;
	$sql = "SELECT users.*, history.invested, history.time FROM users LEFT JOIN history ON users.user_id = history.user_id";
	$query = mysqli_query($link, $sql);
	$posts = [];
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$posts[] = $row;
		}
		return $posts;
	} return false;
}

function confirm_user($post){
	global $link;
	$err_flag = false;
	$errors = [];
	if (!empty($post['firstname'])) {
		$firstname = sanitize($post['firstname']);
	} else {
		$errors['firstname'] = "firstname value missing";
		$err_flag = true;
	}
	if (!empty($post['user_id'])) {
		$user_id = sanitize($post['user_id']);
	} else {
		$errors['user_id'] = "user_id value missing";
		$err_flag = true;
	}
	if (!empty($post['status'])) {
		$status = sanitize($post['status']);
	} else {
		$errors['status'] = "status value missing";
		$err_flag = true;
	}


	$sql = "UPDATE users SET status = '$status' WHERE user_id = '$user_id'";
	$query = mysqli_query($link, $sql);
	if ($query) {
			return true;
		} else {
			$errors['db'] = "Ooops! Something went wrong";
			return $errors;
	} return $errors;
}
