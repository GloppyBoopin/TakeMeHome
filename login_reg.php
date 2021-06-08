<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - вход/регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/post_add.css">
	<link rel="stylesheet" type="text/css" href="css/login_reg.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
		    <input type="checkbox" id="theme-switch" name="theme" style="border: none;" />
		    <label for="theme-switch"></label>
		    <p>Сменить тему</p>
		</div>
		<script type="text/javascript" src="js/theme-switch.js"></script>
		<div class="header-nav-icons-wrapper">
			<a href="profile.php" class="header-nav-icon-link">
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
	<h1 class="main-h1">Вход</h1>
	<form>
		<div class="form-wrapper">
			<div class="input-wrapper">
				<input class="form-input-text" id="login-email" type="email" name="" placeholder="example@mail.ru">
				<label class="form-input-label" for="login-email">Логин (почта)</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="login-password" type="password" name="">
				<label class="form-input-label" for="login-password">Пароль</label>
			</div>
			<div class="input-wrapper">
				<button class="form-button">Войти</button>
			</div>
		</div>
	</form>
	<hr>
	<hr>
	<h1 class="main-h1">Регистрация</h1>
	<p class="main-p required">Обязательные поля помечены</p>
	<form>
		<div class="form-wrapper">
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-email" type="email" name="" placeholder="example@mail.ru">
				<label class="form-input-label required" for="reg-email">Почта</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-username" type="text" name="">
				<label class="form-input-label required" for="reg-username">
					Псевдоним/Имя
				</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-password" type="password" name="">
				<label class="form-input-label required" for="reg-password">Пароль</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-password-repeat" type="password" name="">
				<label class="form-input-label required" for="reg-password-repeat">Повторите пароль</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-tel" type="tel" name="" pattern="[+]{1}[0-9]{11}" placeholder="+78005553535">
				<label class="form-input-label required" for="reg-tel">Номер телефона</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-address" type="text" name="" placeholder="ул. Жарокова д. 322 кв. 153">
				<label class="form-input-label required" for="reg-address">Адрес</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-address2" type="text" name="" placeholder="ул. Жарокова д. 322 кв. 153">
				<label class="form-input-label" for="reg-address2">Доп. адрес</label>
			</div>
			<div class="input-wrapper">
				<button class="form-button">Зарегистрироваться</button>
			</div>
		</div>
	</form>
</main>
<footer>
		<div class="footer-info">
			<h1 class="footer-h1">О нас</h1>
			<p><b>TakeMeHome</b> - революция в мире торговых площадок и сайтов о домашних животных. Наш сайт совмещает в себе торговую площадку, где вы можете продать/купить/взять даром домашнее животное, интернет магазин содержащий широкий ассортимент продуктов для братьев меньших и бюро находок, где вы можете разместить объявление о пропавшем или найденном домашнем животном.</p>
			<p>Купить товар в магазине можно двумя способами - самовывоз или заказать доставку. Чтобы взять доставку, вам необходимо выбрать соответствующий вариант при оформлении заказа. Доставка на товар любого количества стоит 500 тенге. Самовывоз по адресу ул. Гагарина д. 311а</p>
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