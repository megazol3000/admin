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
		echo $content = '<div class="edit-form-wrap"><form class="check-form" method="POST">
	
				<input class="check-password" type="text" placeholder=" " name="title">
				<textarea class="text-area" name="text"> </textarea>
				<input class="check-btn" type="submit">
				<a href="index.php"> в админку </a>

		</form></div>';
	}
	

	function addPage ($connection) {

		if (isset($_GET['add'])) {

			$catId = $_GET['add'];
			$title = $_POST['title'];
			$text = $_POST['text'];

			$query="INSERT INTO `articles` (`title`, `text`, `articles_categories_id`) VALUES ('$title', '$text', '$catId')";	
			mysqli_query($connection, $query) or die(mysqli_error($connection));
			return true;
			
		}

		header('Location: /admin/'); die();
	}
	getForm();
	addPage ($connection);
 ?>
</body>
</html>