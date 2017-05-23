<?php 	
	ob_start();
	session_start();
	include_once('include/config.php'); 
	// include_once('include/checklogin.php');
	if ($_POST['action'] == 'signup') {
		parse_str($_POST['singupData'], $singupData);
		$name 				= $singupData['name'];
		$email 				= $singupData['email'];
		$designation 		= $singupData['designation'];
		$place_of_posting 	= $singupData['place_of_posting'];
		$phone 				= $singupData['phone'];
		
		
		$ChecMailQuery = $conn->query("SELECT * FROM tbl_users where user_email ='" . $email . "'");
		$emailCount = mysqli_num_rows($ChecMailQuery);
		if ($emailCount >= 1) {
			$response['message'] = "Email Already Exist!";
			$response['success'] = false;
		}
		$ChecPhoneQuery = $conn->query("SELECT * FROM tbl_users where user_phone ='" . $phone . "'");
		$phoneCount = mysqli_num_rows($ChecPhoneQuery);
		if ($phoneCount >= 1) {
			$response['message'] = "Phone Number Already Exist!";
			$response['success'] = false;
		}
		$ChecMailAct = $conn->query("SELECT * FROM tbl_users where user_email='" . $email . "' and user_status =0 ");
			$mailCount = mysqli_num_rows($ChecMailAct);
			if ($mailCount >= 1) {
			$response['message'] = "Your Account Is Not Activated.! Please Try Again";
			$response['success'] = false;
		}
		if (($emailCount == 0) && ($phoneCount ==0)) {
			$insertQuery = $conn->query("INSERT INTO tbl_users (user_name,user_phone,user_email,user_image,user_designation,user_place_of_posting,user_status)  VALUES ('" . $name . "','" . $phone . "','" . $email . "','no_user_image.png','" . $designation . "','" . $place_of_posting . "',1)");
			
			if($insertQuery){
				$response['message'] = "You are successfully Registered at Cybercrimedetective.com";
				$response['success'] = true;
				}else{
				$response['message'] = "OOPS! Something Went Wrong Please Try After Sometime!";
				$response['success'] = false;			
			}
			
		}
		
		/*$ChecMailAct = $conn->query("SELECT * FROM tbl_users where user_email='" . $email . "' and user_status =0 ");
			$mailCount = mysqli_num_rows($ChecMailAct);
			if ($mailCount >= 1) {
			$response['message'] = "Your Account Is Not Activated.! Please Try Again";
			$response['success'] = false;
		}*/
		/*if ($emailCount == 0) {
			$activate_code = rand(0, 100000);
			$insertQuery = $conn->query("INSERT INTO tbl_users (user_name,user_phone,user_email,user_image,user_designation,user_place_of_posting,activate_link,user_status)  VALUES ('" . $name . "','" . $phone . "','" . $email . "','no_user_image.png','" . $designation . "','" . $place_of_posting . "','" . $activate_code . "',0)");
			
			if ($insertQuery) {
			$subject = 'Signup | Verification';
			$message = '<html>
			<head>
			<title>Thank You for signing up!</title>
			</head>
			<body align="center">
			<h3>Thank You for signing up!<h3>
			<p>Your account has been created Succesfully to activate your link please click on activation link.<p>
			<table align="center">
			<tr><td>Email  </td><td>' . $email . '</td></tr>	
			<tr><td>Phone Number  </td><td>' . $phone . '</td></tr>	
			</table>
			<a href="' . SITE_ADMIN_URL . 'controller.php?activate_link=' . $activate_code . '"><input type="button" value="Activation Link"></a>
			</body>
			</html>';
			
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From:' . FROM_MAIL . "\r\n";
			$sendmail = mail($email, $subject, $message, $headers);
			$response['message'] = "Thank You! Check Your Email To Activate Your Account";
			$response['success'] = true;
			} else {
			$response['message'] = "OOPS! Something Went Wrong Please Try After Sometime!";
			$response['success'] = false;
			}
		}*/
		echo json_encode($response);
		exit;
	}
	if ($_POST['action'] == 'login') {
		parse_str($_POST['loginData'], $loginData);
		$phone = $loginData['phone'];
		
		$LoginQuery = $conn->query("SELECT * FROM tbl_users where user_phone='" . $phone . "'");
		$checkparticipentCount = mysqli_num_rows($LoginQuery);
		if ($checkparticipentCount == 1) {
			$user = $LoginQuery->fetch_assoc();
			
			
			if ($user['user_status'] != 1) {
				$response['message'] = "Your Account is Not Activated";
				$response['success'] = false;
			}
			
			if ($user['user_status'] == 1) {
				$_SESSION['id_user']				=	$user['id_user'];
				$_SESSION['user_name']				=	$user['user_name'];
				$_SESSION['user_phone']				=	$user['user_phone'];
				$_SESSION['user_email']				=	$user['user_email'];
				$_SESSION['user_image']				=	$user['user_image'];
				$_SESSION['user_designation']		=	$user['user_designation'];
				$_SESSION['user_place_of_posting']	=	$user['user_place_of_posting'];
				
				$response['message'] = "Welcome" . $_SESSION['user_name'];
				$response['id'] = $user['id_user'];
				$response['success'] = true;
			}
			} else {
			$response['message'] = "Invalid Credentials. Try again.";
			$response['success'] = false;
		}
		echo json_encode($response);
		exit;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>