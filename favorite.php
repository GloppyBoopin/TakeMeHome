<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - избранное</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/favorite.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/list-grid-switch.js"></script>
</head>
<body>
<header>
	<div class="header-nav">
		<a href="" class="home-link">
			<img src="images/logo-1.png" class="logo" alt="logo">
			<span class="name"><b>TakeMeHome</b></span>
		</a>
		<div class="header-phone-numbers">
			+7(800)555-35-35
			<br>
			+7(777)221-66-66
		</div>
		<div class="header-nav-form-link-ad">
			<!-- search form -->
			<form>  
				<input class="search" type="text" name="">
				<button class="search-button"><i class="fa fa-search"></i></button>
			</form>
			<a href="" class="link-ad">ПОДАТЬ ОБЪЯВЛЕНИЕ</a>
		</div>
		<div class="theme-switch-wrapper">
		    <input type="checkbox" id="theme-switch" name="theme" />
		    <label for="theme-switch"></label>
		    <p>Сменить тему</p>
		</div>
		<script type="text/javascript" src="js/theme-switch.js"></script>
		<div class="header-nav-icons-wrapper">
			<a href="" class="header-nav-icon-link">
				<i class="header-nav-icon far fa-user"></i>
				<p>Профиль</p>
			</a>
			<a href="" class="header-nav-icon-link">
				<i class="header-nav-icon far fa-heart"></i>
				<p>Избранное</p>
			</a>
			<a href="" class="header-nav-icon-link">
				<i class="header-nav-icon fas fa-shopping-basket"></i>
				<p>Корзина</p>
				<p class="shopping-bag-item-count">1</p> <!-- Отображать если в корзине есть товары -->
			</a>
		</div>
		<div class="header-nav-login-reg">
			<a href="" class="header-nav-login-reg-link">Вход | Регистрация</a>
		</div>	
	</div>
</header>
<main>
	<h1>Избранные объявления</h1>
	<div class="list-grid-switches">
		<button class="active list-grid-switch" id="grid"><i class="fas fa-th-large"></i> Блоками</button>
		<button class="list-grid-switch" id="list"><i class="fas fa-th-list"></i> Списком</button>
	</div>
	<div class="addesk-items">
		<a href="" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/dog.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Догич, 16 лет, пьяный</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor id distinctio voluptates laborum natus tempora ratione. Recusandae sit animi facilis ipsa architecto non praesentium autem provident tempora, ducimus quis.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления и цена, если нет цены то "Даром" --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
							<p class="addesk-item-price">300 000 т</p>
						</div>
					</div>
				</div>
			</div>
		</a>
		<a href="" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/fishes-cut.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Догич, 16 лет, пьяный</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor id distinctio voluptates laborum natus tempora ratione. Recusandae sit animi facilis ipsa architecto non praesentium autem provident tempora, ducimus quis.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления и цена, если нет цены то "Даром" --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
							<p class="addesk-item-price">ДАРОМ</p>
						</div>
					</div>
				</div>
			</div>
		</a>
		<a href="" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/cat.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Догич, 16 лет, пьяный</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor id distinctio voluptates laborum natus tempora ratione. Recusandae sit animi facilis ipsa architecto non praesentium autem provident tempora, ducimus quis.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления и цена, если нет цены то "Даром" --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
							<p class="addesk-item-price">ДАРОМ</p>
						</div>
					</div>
				</div>
			</div>
		</a>
		<a href="" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/hamsters-cut.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Догич, 16 лет, пьяный</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor id distinctio voluptates laborum natus tempora ratione. Recusandae sit animi facilis ipsa architecto non praesentium autem provident tempora, ducimus quis.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления и цена, если нет цены то "Даром" --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
							<p class="addesk-item-price">ДАРОМ</p>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
</main>
<footer></footer>
</body>
</html>