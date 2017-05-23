<?php
	error_reporting(E_ALL & ~E_NOTICE);
	//Live Site details php 7
	if($_SERVER['HTTP_HOST'] =='localhost'){
		define(DBHOST, 'localhost');
		define(DBUSER, 'root');
		define(DBPASSWORD, '');
		define(DBNAME, 'cybercrimesdetective');
		//Local URL
		define(BASE_URL, "http://localhost/cid/");
		define(OFFICER_URL, "http://localhost/cid/officer.php");
		define(SITE_NAME, "http://localhost/cid/");
		//define(FROM_MAIL, "inststudent@yopmail.com");
	}	
	else if($_SERVER['HTTP_HOST'] =='amerytech.net')	{
		
		define(DBHOST, 'localhost');
		define(DBUSER, 'admin');
		define(DBPASSWORD, 'admin123');
		define(DBNAME, 'cybercrimesdetective');
		// Live URL
		// 		define(BASE_URL, "http://localhost/cybercrimesdetective/");
	}
	
	
	$conn = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	
	
	
	
	
	
	
	
	
	
	
?>