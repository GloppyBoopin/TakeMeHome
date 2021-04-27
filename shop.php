<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - магазин</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shop.css">

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
		<a href="" class="link-ad-addesk">ПОДАТЬ ОБЪЯВЛЕНИЕ</a>
	</header>
<main>
	<p class="search-clarifier">Поиск по товарам <i class="fas fa-level-down-alt"></i></p>
	<div class="search-wrapper">
		<!-- Поиск по товарам -->
		<form>  
			<input class="search" type="text" name="">
			<button class="search-button"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<p class="new-shop-items-p">НОВЫЕ ТОВАРЫ</p>
	<div class="new-shop-items">
		<div class="new-shop-items-container">
			<a href="" class="new-shop-item">
				<div class="new-shop-item-image-wrapper">
					<img src="images/fishes-cut.png" class="new-shop-item-image">
				</div>
				<div class="new-shop-item-hidden">
					<!-- Если что-то будент не так отображаться поиграй с маржинами -->
					<p class="new-shop-item-name">Название</p>
					<!-- В описании максимум 2 строчки -->
					<p class="new-shop-item-description">Описание (вес, цена и т.д.)</p>
				</div>
			</a>
			<a href="" class="new-shop-item">
				<div class="new-shop-item-image-wrapper">
					<img src="images/fishes-cut.png" class="new-shop-item-image">
				</div>
				<div class="new-shop-item-hidden">
					<p class="new-shop-item-name">Название</p>
					<p class="new-shop-item-description">Описание (вес, цена и т.д.)</p>
				</div>
			</a>
			<a href="" class="new-shop-item">
				<div class="new-shop-item-image-wrapper">
					<img src="images/cat.png" class="new-shop-item-image">
				</div>
				<div class="new-shop-item-hidden">
					<p class="new-shop-item-name">Название</p>
					<p class="new-shop-item-description">Описание (вес, цена и т.д.)</p>
				</div>
			</a>
			<a href="" class="new-shop-item">
				<div class="new-shop-item-image-wrapper">
					<img src="images/dog.png" class="new-shop-item-image">
				</div>
				<div class="new-shop-item-hidden">
					<p class="new-shop-item-name">Название</p>
					<p class="new-shop-item-description">Описание (вес, цена и т.д.)</p>
				</div>
			</a>
		</div>
	</div>
	<div class="list-grid-switches">
		<button class="active list-grid-switch" id="grid"><i class="fas fa-th-large"></i> Блоками</button>
		<button class="list-grid-switch" id="list"><i class="fas fa-th-list"></i> Списком</button>
	</div>
	<div class="shop-items">
		<div class="shop-items-filter"></div>
		<div class="shop-items-container">
			<!-- shop-item в цикл -->
			<div class="shop-item">
				<!-- Ссылка на страницу товара -->
				<a href="">
					<span class="link-span"></span>
				</a>
				<!-- Тоже ссылка на страницу товара -->
				<a class="shop-item-read-link" href="">
					ПОДРОБНЕЕ
				</a>
				<div class="shop-item-image-container">
					<!-- Сюда картинку и название -->
					<img src="images/hamsters-cut.png" class="shop-item-image">
					<p class="shop-item-image-name">Miska</p>
					<div class="rating">
						<!-- Добавлять класс checked span'у, который отмечен по счёту снизу вверх -->
						<span><label><i class="fas fa-star"></i></label></span>
						<span class="checked"><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
					</div>
				</div>
				<div class="shop-item-form-price-container">
					<!-- Цена и добавление в корзину с количеством -->
					<p class="shop-item-price left">80 000 т</p>
					<form class="shop-item-form right">
						<button type="submit" class="shop-item-cart-button">Добавить в <i class="fa fa-shopping-basket"></i></button>
						<div class="input-number-wrapper">
							<button type="button" onclick="this.parentNode.querySelector('.input-number').stepDown()" class="plus-minus-button minus-button">-</button>
							<input class="input-number" type="number" min="1" value="1" max="10" name="">
							<button type="button" onclick="this.parentNode.querySelector('.input-number').stepUp()" class="plus-minus-button plus-button">+</button>
						</div>
					</form>
				</div>
			</div>

			<div class="shop-item">
				<!-- Ссылка на страницу товара -->
				<a href="">
					<span class="link-span"></span>
				</a>
				<!-- Тоже ссылка на страницу товара -->
				<a class="shop-item-read-link" href="">
					ПОДРОБНЕЕ
				</a>
				<div class="shop-item-image-container">
					<!-- Сюда картинку и название -->
					<img src="images/cat.png" class="shop-item-image">
					<p class="shop-item-image-name">Lezhanka</p>
					<div class="rating">
						<!-- Добавлять класс checked span'у, который отмечен по счёту снизу вверх -->
						<span><label><i class="fas fa-star"></i></label></span>
						<span class="checked"><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
					</div>
				</div>
				<div class="shop-item-form-price-container">
					<!-- Цена и добавление в корзину с количеством -->
					<p class="shop-item-price left">80 000 т</p>
					<form class="shop-item-form right">
						<button type="submit" class="shop-item-cart-button">Добавить в <i class="fa fa-shopping-basket"></i></button>
						<div class="input-number-wrapper">
							<button type="button" onclick="this.parentNode.querySelector('.input-number').stepDown()" class="plus-minus-button minus-button">-</button>
							<input class="input-number" type="number" min="1" value="1" max="10" name="">
							<button type="button" onclick="this.parentNode.querySelector('.input-number').stepUp()" class="plus-minus-button plus-button">+</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
<footer></footer>
</body>
</html>