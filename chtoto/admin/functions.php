<?php 
require "../includes/config.php";


function deleteArt($connection) {

		if(isset($_GET['delete'])) {
			$id = $_GET['delete'];
			$query="DELETE FROM `articles` WHERE title = '$id' ";	
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		}

}
function deleteCat($connection) {

		if(isset($_GET['delete'])) {
			$id = $_GET['delete'];
			$query="DELETE FROM `categories` WHERE title = '$id' ";	
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		}

}
deleteArt($connection);
deleteCat($connection);