<?php 

$config = array(
	'title'=> 'Резюме',
	'candidate' => 'Кандидат',
	'position' => 'PHP-программист',
	'photo' => '',
	'db' => array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'name' => 'my_blog'
	),
	'contacts' => array(
		'mobile' => '+7 909 3472206',
		'mail' => 'rustem.gumerov.92@mail.ru',
		'age' => '27 лет (02.03.1992)',
		'motherland' => 'Россия',
		'residents' => 'г. Уфа',
		'status' => 'женат, детей нет',
		'pay' => 'от 35000 рублей'
	)
);

require "db.php";
?>