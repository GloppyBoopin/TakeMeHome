<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - подать объявление</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/post_ad.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
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
			</div>
			<div class="theme-switch-wrapper">
			    <input type="checkbox" id="theme-switch" name="theme" />
			    <label for="theme-switch"></label>
			    <p>Сменить тему</p>
			</div>
			<script type="text/javascript" src="js/theme-switch.js"></script>
			<div class="header-nav-icons-wrapper">
				<a href="" class="header-nav-icon-link">
					<i class="header-nav-icon far fa-heart"></i>
					<p>Избранное</p>
				</a>
				<a href="" class="header-nav-icon-link">
					<i class="header-nav-icon far fa-user"></i>
					<p>Профиль</p>
				</a>
				<a href="" class="header-nav-icon-link">
					<i class="header-nav-icon fas fa-shopping-basket"></i>
					<p>Корзина</p>
					<p class="shopping-bag-item-count">1</p> <!-- Отображать если в корзине есть товары -->
				</a>
			</div>
		</div>
	</header>
<main>
	<h1 class="main-h1">Подать объявление</h1>
	<p class="main-p required">Обязательные поля помечены</p>
	<form>
		<div class="form-wrapper">
			<div class="input-wrapper">
				<input class="form-input-text" id="pet-name" type="text" name="">
				<label class="form-input-label required" for="pet-name">Имя питомца</label>
			</div>
			<div class="input-wrapper">
				<textarea class="form-textarea" id="pet-description" placeholder="Введите текст..."></textarea>
				<label class="form-input-label required" for="pet-description">
					Описание
					<p>Опишите своего питомца, его харакетр и особенности</p>
				</label>
			</div>
			<div class="input-wrapper">
				<div class="form-input-select">
					<select id="pet-category-select">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
					</select>
				</div>
				<label class="form-input-label required" for="pet-category-select">Категория</label>
			</div>
			<div class="input-wrapper"></div>
		</div>
	</form>
</main>
<footer></footer>
</body>
</html>