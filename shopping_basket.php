<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - корзина</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shopping_basket.css">

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
			<!-- Показывать один из этих блоков только если пользователь админ или курьер соответственно -->
			<div class="header-admin-courier-link">
				<a href="admin-panel.php">
					<i class="fas fa-user-shield"></i> Админ
				</a>
			</div>
			<div class="header-admin-courier-link">
				<a href="courier_menu.php">
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
			<a href="post_add.php" class="link-ad">ПОДАТЬ ОБЪЯВЛЕНИЕ</a>
		</div>
		<div class="theme-switch-wrapper">
		    <input type="checkbox" id="theme-switch" name="theme" />
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
		</div>
		<div class="header-nav-login-reg">
			<a href="login_reg.php" class="header-nav-login-reg-link">Вход | Регистрация</a>
		</div>
	</div>
</header>
<main>
	<div class="shop-items">
		<div class="shop-items-container">
			<h1>Корзина</h1>
			<div class="shop-items-headers">
				<div class="shop-item-image-container" style="display: flex; width: 280px; align-items: center; padding-left: 20px;">
					<p class="shop-item-image-description">Картинка</p>
				</div>
				<div class="shop-item-name-container">
					<p class="shop-item-name" style="font-size: 24px;">Название</p>
				</div>
				<div class="shop-item-quantity-container">
					<p class="shop-item-quantity" style="font-size: 24px;">Кол-во</p>
				</div>
				<div class="shop-item-price-container">
					<p class="shop-item-price" style="font-size: 24px;">Цена</p>
				</div>
			</div>
			<div class="shop-item">
				<!-- Ссылка на страницу товара -->
				<a href="read_shop_item.php">
					<span class="link-span"></span>
				</a>
				<div class="shop-item-image-container">
					<!-- Сюда картинку -->
					<img src="images/dog.png" class="shop-item-image">
				</div>
				<!-- Название -->
				<div class="shop-item-name-container">
					<p class="shop-item-name">lorem ipsum</p>
				</div>	
				<div class="shop-item-quantity-container">
					<!-- Количество -->
					<p class="shop-item-quantity">2</p>
				</div>
				<div class="shop-item-price-container">
					<!-- Цена и добавление в корзину с количеством -->
					<p class="shop-item-price">80 000 т</p>
					<form>
						<button class="shop-item-remove"><i class="fas fa-trash-alt"></i></button>
					</form>
				</div>
			</div>
			<div class="shop-item">
				<!-- Ссылка на страницу товара -->
				<a href="read_shop_item.php">
					<span class="link-span"></span>
				</a>
				<div class="shop-item-image-container">
					<!-- Сюда картинку -->
					<img src="images/dog.png" class="shop-item-image">
				</div>
				<!-- Название -->
				<div class="shop-item-name-container">
					<p class="shop-item-name">dolor sit amet</p>
				</div>	
				<div class="shop-item-quantity-container">
					<!-- Количество -->
					<p class="shop-item-quantity">2</p>
				</div>
				<div class="shop-item-price-container">
					<!-- Цена и добавление в корзину с количеством -->
					<p class="shop-item-price">80 000 т</p>
					<form>
						<button class="shop-item-remove"><i class="fas fa-trash-alt"></i></button>
					</form>
				</div>
			</div>
			<form class="shop-items-order-form">
				<button class="shopping-basket-order">Оформить заказ</button>
			</form> 
		</div>
	</div>
</main>
<footer>
	
</footer>
</body>
</html>