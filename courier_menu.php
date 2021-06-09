<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - курьер</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/admin-panel.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link rel="stylesheet" type="text/css" href="css/courier_menu.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/profile-sidebar.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		   $('.courier-status:contains("Занят")').css('color', 'red');
		   $('.courier-status:contains("Свободен")').css('color', '#228B22'); 
		});
	</script>
</head>
<body>
	<header>
		<div class="header-nav">
			<a href="index.php" class="home-link">
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
				<a href="post_add.php" class="link-ad">ПОДАТЬ ОБЪЯВЛЕНИЕ</a>
			</div>
			<div class="theme-switch-wrapper">
			    <input type="checkbox" id="theme-switch" style="border: unset !important;" name="theme" />
			    <label for="theme-switch"></label>
			    <p>Сменить тему</p>
			</div>
			<script type="text/javascript" src="js/theme-switch.js"></script>
			<div class="header-nav-icons-wrapper">
				<a href="profile.php" class="header-nav-icon-link">
					<!-- Скрыть если пользователь НЕ вошёл в аккаунт -->
					<i class="header-nav-icon far fa-user"></i>
					<p>Профиль</p>
				</a>
				<a href="favorite.php" class="header-nav-icon-link">
					<i class="header-nav-icon far fa-heart"></i>
					<p>Избранное</p>
				</a>
				<a href="shopping_basket.php" class="header-nav-icon-link">
					<i class="header-nav-icon fas fa-shopping-basket"></i>
					<p>Корзина</p>
					<p class="shopping-bag-item-count">1</p> <!-- Отображать если в корзине есть товары -->
				</a>
			</div>
		</div>
	</header>
	<main>
		<div class="profile">
			<div class="profile-settings">
				<div class="profile-sidebar">
					<a href="#my-order" class="profile-sidebar-link">Мой заказ</a>
					<a href="#couriers-list" class="profile-sidebar-link">Список курьеров</a>
					<a href="#orders-list" class="profile-sidebar-link">Список заказов</a>	
				</div>
				<div class="profile-container">
					<div class="profile-content" id="my-order">
						<h1>Номер заказа</h1>
						<div class="my-order-id">
							#1818
						</div>
						<h1>Данные заказчика</h1>
						<div class="my-order-orderer-info">
							<div class="my-order-orderer-name">
								Имя: GloppyBoopin
							</div>
							<div class="my-order-orderer-phone">
								Телефон: +77053134788
								<br>
								Оплата: Банковский перевод
							</div>
						</div>
						<h1>Продукты</h1>
						<div class="my-order-items">
							<div class="my-order-item my-order-item-header">
								<div class="my-order-item-image">
									Изображение
								</div>
								<div class="my-order-item-name">
									Название
								</div>
								<div class="my-order-item-quantity">
									Количество
								</div>
							</div>

							<div class="my-order-item">
								<div class="my-order-item-image">
									<img src="images/dog-bed.jpg" class="item-image">
								</div>
								<div class="my-order-item-name">
									Лежанка для собак и кошек Ferplast Dandy
								</div>
								<div class="my-order-item-quantity">
									1
								</div>
							</div>

							<div class="my-order-item">
								<div class="my-order-item-image">
									<img src="images/perfect-fit.png" class="item-image">
								</div>
								<div class="my-order-item-name">
									Perfect Fit, 650 гр.
								</div>
								<div class="my-order-item-quantity">
									2
								</div>
							</div>

							<div class="my-order-item">
								<div class="my-order-item-image">
									<img src="images/cat-house.jpg" class="item-image">
								</div>
								<div class="my-order-item-name">
									Дом-когтеточка "Энди" для кошек
								</div>
								<div class="my-order-item-quantity">
									1
								</div>
							</div>
						</div>
						<b style="font-weight: 900; font-size: 36px;">К оплате: 160 000</b>
						<h1>Адрес</h1>
						<div class="my-order-adress">
							ул. Жарокова дом 151 кв. 322
						</div>
					</div>
					<div class="profile-content" id="couriers-list">
						<div class="couriers-list-header">
							<div class="courier-name">
								Имя
							</div>
							<div class="courier-phone">
								Телефон
							</div>
							<div class="courier-orderid">
								Номер заказа
							</div>
							<div class="courier-status">
								Статус
							</div>
						</div>
						<div class="couriers-list-item">
							<div class="courier-name">
								Антон Баландин
							</div>
							<div class="courier-phone">
								+77053134788
							</div>
							<div class="courier-orderid">
								#1808
							</div>
							<div class="courier-status">
								Занят
							</div>
						</div>
						<div class="couriers-list-item">
							<div class="courier-name">
								Мерей Макзом
							</div>
							<div class="courier-phone">
								+77072313114
							</div>
							<div class="courier-orderid">
								-
							</div>
							<div class="courier-status">
								Свободен
							</div>
						</div>
					</div>
					<div class="profile-content" id="orders-list">
						<div class="orders-list-header">
							<div class="order-id">
								Номер заказа
							</div>
							<div class="order-orderer-info">
								Данные заказчика
							</div>
							<div class="order-items">
								Продукты
							</div>
							<div class="order-delivery-type">
								Доставка
							</div>
						</div>
						<div class="orders-list-item">
							<div class="order-id">
								#1818
							</div>
							<div class="order-orderer-info">
								GloppyBoopin
								<br>
								+77053134788
								<br>
								ул. Жарокова дом 151 кв. 322
							</div>
							<div class="order-items">
								Лежанка для собак KEKL (x1)
								<br>
								Миска для корма Pepe (x2)
								<br>
								Дом игровая площадка для котов Detre (x1)
							</div>
							<div class="order-delivery-type">
								<form>
									<input type="hidden" name="">
									<button class="take-order-button">Взять</button>
								</form>
							</div>
						</div>
					</div>
				</div>
	</main>
<footer>
		<div class="footer-info">
			<h1 class="footer-h1">О нас</h1>
			<p><b>TakeMeHome</b> - революция в мире торговых площадок и сайтов о домашних животных. Наш сайт совмещает в себе торговую площадку, где вы можете продать/купить/взять даром домашнее животное, интернет магазин содержащий широкий ассортимент продуктов для братьев меньших и бюро находок, где вы можете разместить объявление о пропавшем или найденном домашнем животном.</p>
			<p>Купить товар в магазине можно двумя способами - самовывоз или заказать доставку. Чтобы взять доставку, вам необходимо выбрать соответствующий вариант при оформлении заказа. Доставка на товар любого количества стоит 500 тенге. <br><b>Самовывоз по адресу ул. Гагарина д. 311а</b></p>
		</div>
		<div class="footer-working-hours">
			<h1 class="footer-h1">Время работы</h1>
			<div class="working-hours">
				<img src="images/clock.png" class="working-hours-img">
				<div class="working-hours-list">
					<p>Пн-пт - 09:00 - 18:00</p>
					<p>Сб - 10:00 - 16:00</p>
					<p>Вс - выходной</p>
				</div>
			</div>
		</div>
		<div class="footer-contacts">
			<h1 class="footer-h1">Наши контакты</h1>

			<h4>+7(800)555-35-35</h4>
			<p>Служба доставки</p>
			<h4>+7(777)221-66-66</h4>
			<p>Администрация</p>
			<h4>Физический адрес</h4>
			<p>ул. Гагарина д. 311а</p>
		</div>
	</footer>
</body>
</html>