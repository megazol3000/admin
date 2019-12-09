<?php 
require "../includes/config.php";
require "functions.php";
session_start();
?>

<?php if(!empty($_SESSION['auth'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	
	<div class="adm-pan">
			<div class="adm-btn">
				<a href="../index.php">на главную</a>
			</div>

				<?php $categories = mysqli_query($connection, "SELECT * FROM `categories`") ?>
				<?php while ($cat = mysqli_fetch_assoc($categories)) {?>

			<div class="adm-category">
				<div class="adm-cat">
					
					<h2><?php echo $cat['title']; ?></h2>
					<a href="?delete=<?php echo $cat['title']; ?> ">удалить</a>
					<a href="edit.php?id=<?php echo $cat['title']; ?>">изменить</a>
					<a href="add.php?add=<?php echo $cat['id']; ?>">добавить запись</a>
				</div>

					<?php $article = mysqli_query($connection, "SELECT * FROM `articles`") ?>
					<?php while ($art =  mysqli_fetch_assoc($article) ) { ?>
					<?php if ( $cat['id'] == $art['articles_categories_id'] ) { ?>
				<div class="adm-articles">
					<a href="?delete=<?php echo $art['title']; ?> ">удалить</a>
					<a href="edit.php?id=<?php echo $art['title']; ?>">изменить</a>
					<p><?php echo $art['title']; ?></p>
					
				</div>
					<?php }  ?>
					<?php } ?>

					
			</div>
			<?php } ?>
			<a href="add_cat.php?add_cat=<?php echo $cat['title']; ?>">Добавить категорию</a>
	</div>
	
</body>
</html>

<?php } else { 
  header('Location: /admin/login.php');
}