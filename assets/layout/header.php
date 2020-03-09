<?
	$page = $_SERVER['REQUEST_URI'];

	if($page = 'signup')
		$iPage = 'Регистрация';	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guezzy | <? echo $iPage ?></title>

	<!-- CSS -->
	<link rel="stylesheet" href="/assets/css/style.css">
	
	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="logo">
			<img src="https://yt3.ggpht.com/a/AGF-l7-JbZj98wJ3pQkgJhgmkdt0cLeScTkdVDdGlQ=s900-c-k-c0xffffffff-no-rj-mo" alt="">
		</div>

		<div class="menu">
			<div class="navbar">
				<ul class="nav-menu">
					<li>Главная</li>
					<li>О компании</li>
					<li>Офферы</li>
					<li>Контакты</li>
					<li>5</li>
				</ul>
			</div>
		</div>
	</header>