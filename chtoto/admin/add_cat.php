<?php 
require "../includes/config.php";
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>

<?php 

	function getForm() {
		echo $content = '<form method="POST">
	
				<input type="text" name="title">
				<input type="submit">

		</form>';
	}
	getForm();

	function addCat ($connection) {

		if (isset($_GET['add_cat'])) {
			$title = $_POST['title'];
			$query="INSERT INTO `categories` (title) VALUES ('$title')";	
			mysqli_query($connection, $query) or die(mysqli_error($connection));

			return true;
		}

	}

	addCat ($connection);

 ?>
 
</body>
</html>