<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="shortcut icon" href="iconfinder_Female_132766.png" type="image/png">
</head>
	<title>Бычков Леонид - официальный сайт</title>

	<style>


	.top {
		display: block;
		position: fixed;
		left: 0;
		top: 0;
		z-index: 5;
		background-color: #ff823a;
		opacity: 0.75;
		text-decoration: none;
		padding: 10px  7px;
		color: white;
		border-radius: 0px 10px 10px 0px;
		transition: all 0.2s;
		font-size: 15px;
	}

	.top:hover {
		padding: 10px 30px;
		background-color: #ff5d00;
		transition: all 0.2s;
		opacity: 1;
	}

	@media all and (max-width: 1215px) {
		.top {
			padding: 10px 20px;
		}
	}

	@media all and (max-width: 1215px) {
		.top:hover {
			padding: 20px 30px;
		}
	}
	</style>
</head>

<body>

	<div class="header">

		<div class="block">
			<a class="top" href="#top">Вверх</a>
			<ul class="left_nav"> <!--левое навигационное меню-->
				<li><a class="nav" href="#tools">Услуги</a></li>
				<li><a class="nav" href="portfolio.php">Портфолио</a></li>
			</ul>

			<ul class="info"> <!--правое навигационное меню-->
				<a id="tel_number" href="tel:+79057661646">+7 (905) 766-16-46</a>
				<a id="callback" href="callback.php">Свяжитесь со мной</a>
			</ul>
		</div>

		<div class="intro"> <!--блок с информацией обо мне-->
			<h1>Антон Овчинников</h1>
			<h3>Frontend-разработчик и веб-верстальщик и <br>самый классный препод в ОСП3 <br>за последнюю 1000 лет</h3>
			<a href="portfolio.php"class="look_more" style="margin: 0 0;">Узнать больше</a>
		</div>

	</div>

	<div class="what_can_i_do" id="tools"> <!-- Блок с информацией о том, что я могу сделать -->
		<h1>Что я делаю</h1>

		<ul class="tools">

			<li>
				<img src="img/icons/lending.png" class ="tools">
				<p>Верстка лендинг-страниц и сайтов любой сложности</p>
			</li>

			<li>
				<img src="img/icons/adaptive.png" class ="tools">
				<p>Адаптивная верстка под все браузеры и устройства</p>
			</li>

			<li>
				<img src="img/icons/front.png" class ="tools">
				<p>Frontend-разработка и программирование</p>
			</li>

			<li>
				<img src="img/icons/fix.png" class ="tools">
				<p>Исправление и доработка существующей верстки</p>
			</li>

		</ul>

		<a href="callback.php" class="look_more">Узнать стоимоcть</a>
	</div>

	<div class="examples"> <!-- Блок, где показаны примеры моих работ -->
		<h1>Примеры моих работ</h1>

		<ul class="pictures" id="examples">

			<li>
				<img class ="pictures" src="img/portfolio/Portfolio_1.png">
				<a href="#top">Сайт психолога Веры Антоновой</a>
			</li>

			<li>
				<img class ="pictures" src="img/portfolio/Portfolio_2.png">
				<a href="#top">Сайт магазина детской одежды</a>
			</li>

			<li>
				<img class ="pictures" src="img/portfolio/Portfolio_3.png">
				<a href="#top">Сайт магазина «Рыболов»</a>
			</li>

		</ul>

		<a class="look_more" style="margin-top: 2%;">Все работы</a>
	</div>

<div class="footer"> <!-- Сам футер -->

	<ul class="navigation"> <!-- Левое меню навигации в футере -->
		<li><a class="footer_nav" href="#tools">Услуги</a></li>
		<li><a class="footer_nav" href="portfolio.php">Портфолио</a></li>
	</ul>

	<ul class="feedback"> <!-- Блок обратной связи со мной, посередине футера -->
		<li><a href="tel:+79057661646" class="footer_tel_num"><img src="img/icons/call-answer.png">+7 (905) 766-16-46</a></li>
		<li><a class="footer_email" href="mailto:bychkov.l47@mail.ru"><img src="img/icons/envelope.png">bychkov.l47@mail.ru</a></li>
	</ul>

	<ul class="right"> <!-- Правое меню, в нем лежит еще одна кнопка звонка и ссылки на мои соц. сети -->

		<a id="footer_callback">Заказать звонок</a>

		<ul class="right1"> <!-- Создал список соц. сетей -->
			<li id="vk"><a href="https://vk.com/strelokk45"><img src="img/icons/vk.png" class="footer_pic"></a></li>
			<li id="facebook"><a href=""><img src="img/icons/facebook-logo.png" class="footer_pic"></a></li>
			<li id="twitter"><a href=""><img src="img/icons/twitter-logo-silhouette.png" class="footer_pic"></a></li>
			<li id="instagram"><a href=""><img src="img/icons/instagram-social-network-logo-of-photo-camera.png" class="footer_pic"></a></li>
		</ul>

	</ul>
</div>

<div class="copyright">
	<p>© Леонид Бычков, 2019</p>
</div>

</body>
</html>


