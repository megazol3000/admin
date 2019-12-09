
<?php 
require "includes/config.php"; 
include "includes/header.php"; 
?>

		<main>

			<div class="headline">
				<h1><?php echo $config['candidate'] ?></h1>
				<div class="panel">
					<p>Желаемая должность: <?php echo $config['position']; ?></p>
					<a href="admin">админ&nbsp;-&nbsp;панель</a>
				</div>
			</div>

			<div class="contacts">
				<div class="contacts-data">

					<div class="contact-data_item">
						<p>Мобильный телефон</p> <a href="tel:<?php echo $config['contacts']['mobile'] ?>"><?php echo $config['contacts']['mobile'] ?></a>
					</div>

					<div class="contact-data_item">
						<p>Электронная почта&nbsp;&nbsp;</p> <a href="mailto:<?php echo $config['contacts']['mail'] ?>"><?php echo $config['contacts']['mail'] ?></a>
					</div>

					<div class="contact-data_item">
						<p>Возраст</p> <p><?php echo $config['contacts']['age'] ?></p>
					</div>

					<div class="contact-data_item">
						<p>Гражданство</p> <p><?php echo $config['contacts']['motherland'] ?></p>
					</div>

					<div class="contact-data_item">
						<p>Проживание</p> <p><?php echo $config['contacts']['residents'] ?></p>
					</div>

					<div class="contact-data_item">
						<p>Семейное положение</p> <p><?php echo $config['contacts']['status'] ?></p>
					</div>

					<div class="contact-data_item">
						<p>Зарплатные ожидания</p> <p><?php echo $config['contacts']['pay'] ?></p>
					</div>

				</div>

				<?php $photo = mysqli_query($connection, "SELECT * FROM `photo`") ?>
				<?php while ($phot = mysqli_fetch_assoc($photo)) {?>

					<div class="contacts-photo" style="background-image: url(photos/<?php echo $phot['img'] ?>);background-repeat: no-repeat;background-size: cover;background-position: top center;">
					</div>

				<?php } ?>


			</div>
				<?php $categories = mysqli_query($connection, "SELECT * FROM `categories`") ?>
				<?php while ($cat = mysqli_fetch_assoc($categories)) {?>
						
					<div class="posts">
						<h2><?php echo $cat['title']; ?></h2>
						<div class="posts-info">

							<?php $article = mysqli_query($connection, "SELECT * FROM `articles`") ?>
							<?php while ($art =  mysqli_fetch_assoc($article) ) { ?>

								<p><?php if ($cat['id'] == $art['articles_categories_id']) { echo $art['text']; } ?></p>

							<?php } ?>
								
							<?php if ($cat['id'] == 2) { ?>

								<div class="charges">
									<ul>

										<?php $workold = mysqli_query($connection, "SELECT * FROM `works`") ?>
										<?php while ($work = mysqli_fetch_assoc($workold)) { ?>

											<li><?php echo $work['works']; ?></li>

										<?php } ?>

									</ul>
								</div>

							<?php } ?>

						</div>
					</div>	

				<?php } ?>
		</main>
<footer></footer>
</body>
</html>