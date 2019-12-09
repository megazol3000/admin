<?php 
require "../includes/config.php";
require "functions.php";
session_start();

if(isset($_POST['password']) and md5($_POST['password']) == '202cb962ac59075b964b07152d234b70') {  
	$_SESSION['auth'] = true;
	header('Location: /admin/'); die();
 } else { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<div class="form-wrap">
		<form class="check-form"  method="POST" >
			<label for="password">Введите пароль</label>
			<input class="check-password" type="password" name="password" autofocus>
			<input class="check-btn" type="submit">
		</form>
	</div>
</body>
</html>

<?php
}