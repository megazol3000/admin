<?php 
	$connection = mysqli_connect(
		$config['db']['server'],
		$config['db']['username'],
		$config['db']['password'],
		$config['db']['name']
	);

if ($connection == false) 
{
	echo 'не удалось подключиться к базе <br>';
	echo mysqli_connec_error();
	exit();
}

 ?>