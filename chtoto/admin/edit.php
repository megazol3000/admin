<?php 
require "../includes/config.php";
require "functions.php";
include "../includes/header.php";
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

	function getForm($connection) {
		include "../includes/header.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM `articles` WHERE title ='$id'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$article = mysqli_fetch_assoc($result);
		
		if ($article) {

				$title = $article['title'];
				$text = $article['text'];

				echo $content = '<div class="edit-form-wrap"><form class="check-form" method="POST">
								<input class="check-password" type="text" value=" '. $title .' "  name="title">
								<textarea class="text-area" name="text"> '. $text .' </textarea>
								<input class="check-btn" type="submit">
								<a href="index.php"> в админку </a>
								</form></div>';

						} else {echo $content = "данной страницы не существует";}
	}

	

	function editPage ($connection) {

		if (isset($_GET['id']) and isset($_POST['text']) and isset($_POST['title'])) {
			$text = $_POST['text'];
			$id = $_GET['id'];
			$query="UPDATE `articles` SET  title='$id', text='$text' WHERE title='$id'";	
			mysqli_query($connection, $query) or die(mysqli_error($connection));
			return true;
		}

	}

	editPage ($connection);
	getForm($connection);
 ?>
</body>
</html>