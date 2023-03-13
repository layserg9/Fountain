<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
	<link rel="shortcut icon" href="img/favicon.ico.png">
	<link
		href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700,800&display=swap&subset=cyrillic-ext"
		rel="stylesheet" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	</head>

<body>

	<div class="wrapper">
		<header class="header">
			<div class="header__container _container">
				<a href="#" class="header__logo">Fountain</a>
				<div class="main-header__menu">
					<div class="header__icon">
						<span></span>
					</div>
					<nav class="header__menu menu">
						<ul class="menu__list">
							<li class="menu__item">
								<a data-goto=".page__services" href="#" class="menu__link">Фонтаны</a>
							</li>
							<li class="menu__item">
								<a data-goto=".page_whoweare" href="#" class="menu__link">Галерея</a>
							</li>
							<li class="menu__item">
								<a href="/articles/" class="menu__link">Статьи</a>
							</li>
							<li class="menu__item">
								<a data-goto=".page__getintouch" href="#" class="menu__link">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>