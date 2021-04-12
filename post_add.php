<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - подать объявление</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/post_add.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	
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
				<!-- Показывать один из этих блоков только если пользователь админ или курьер соответственно -->
				<div class="header-admin-courier-link">
					<a href="">
						<i class="fas fa-user-shield"></i> Админ
					</a>
				</div>
				<div class="header-admin-courier-link">
					<a href="">
						<i class="fas fa-id-badge"></i> Курьер
					</a>
				</div>
			</div>
			<div class="header-nav-form-link-ad">
				<!-- search form -->
				<form>  
					<input class="search" type="text" name="">
					<button class="search-button"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<div class="theme-switch-wrapper">
			    <input type="checkbox" id="theme-switch" name="theme" style="border: none;" />
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
	<h1 class="main-h1">Подать объявление</h1>
	<p class="main-p required">Обязательные поля помечены</p>
	<form>
		<div class="form-wrapper">
			<div class="input-wrapper">
				<input class="form-input-text" id="pet-name" type="text" name="">
				<label class="form-input-label" for="pet-name">Имя питомца</label>
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
			<div class="input-wrapper">
				<input type="checkbox" name="" id="lost-and-found-checkbox">
				<label style="top: 0;" class="form-input-label" for="lost-and-found-checkbox">Объявление в бюро находок</label>
			</div>
			<div class="input-wrapper">
				<div class="input-images-wrapper">
					<label class="form-input-label">
						Фотографии
						<p>Подходят и вертикальные, и горизонтальные</p>
					</label>
					<div style="position: relative;">
						<button type="button" class="clear-input-image">✖</button>
						<label class="form-input-image-label" for="input-image-1" style="border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
							<input type="file" name="" id="input-image-1" onchange="readURL(this);">
							<img src="" alt="" class="input-image-preview">
							<p>Главная фотография</p>
						</label>
					</div>
					<div style="position: relative;">
						<button type="button" class="clear-input-image">✖</button>
						<label class="form-input-image-label" for="input-image-2">
							<input type="file" name="" id="input-image-2" onchange="readURL(this)">
							<img src="" alt="" class="input-image-preview">
						</label>
					</div>
					<div style="position: relative;">
						<button type="button" class="clear-input-image">✖</button>
						<label class="form-input-image-label" for="input-image-3">
							<input type="file" name="" id="input-image-3" onchange="readURL(this)">
							<img src="" alt="" class="input-image-preview">
						</label>
					</div>
					<div style="position: relative;">
						<button type="button" class="clear-input-image">✖</button>
						<label class="form-input-image-label" for="input-image-4" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-right: 2px solid var(--border-yellow);">
							<input type="file" name="" id="input-image-4" onchange="readURL(this)">
							<img src="" alt="" class="input-image-preview">
						</label>
					</div>

					
				<script type="text/javascript" src="js/image-upload.js"></script>	
				</div>
			</div>
			<div class="input-wrapper">
				<button class="form-button">Подать объявление</button>
			</div>
		</div>
	</form>
</main>
<footer></footer>
</body>
</html>