<?php
	session_start();
	if (!isset($_SESSION['id_user']) && empty($_SESSION['id_user'])) {
		header("location:".BASE_URL.'login.php');
	}
?>





