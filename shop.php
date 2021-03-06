<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - магазин</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="css/post_add.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/list-grid-switch.js"></script>
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
				<a href="shopping_basket.php" class="header-nav-icon-link">
					<i class="header-nav-icon fas fa-shopping-basket"></i>
					<p>Корзина</p>
					<p class="shopping-bag-item-count">1</p> <!-- Отображать если в корзине есть товары -->
				</a>
			</div>
			<div class="header-nav-login-reg">
				<a href="login_reg.php" class="header-nav-login-reg-link">Вход | Регистрация</a>
			</div>
		</div>
		<a href="post_add.php" class="link-ad-addesk">ПОДАТЬ ОБЪЯВЛЕНИЕ</a>
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
			<a href="read_shop_item.php" class="new-shop-item">
				<div class="new-shop-item-image-wrapper">
					<img src="images/kitekat.jpg" class="new-shop-item-image">
				</div>
				<div class="new-shop-item-hidden">
					<!-- Если что-то будент не так отображаться поиграй с маржинами -->
					<p class="new-shop-item-name">Kitekat®, 350 гр.</p>
					<!-- В описании максимум 2 строчки -->
					<p class="new-shop-item-description">Сухой корм для котов мясной пир</p>
				</div>
			</a>
			<a href="read_shop_item.php" class="new-shop-item">
				<div class="new-shop-item-image-wrapper">
					<img src="images/perfect-fit.png" class="new-shop-item-image">
				</div>
				<div class="new-shop-item-hidden">
					<p class="new-shop-item-name">Perfect Fit, 650 гр.</p>
					<p class="new-shop-item-description">Корм для стерилизованных кошек с говядиной</p>
				</div>
			</a>
			<a href="read_shop_item.php" class="new-shop-item">
				<div class="new-shop-item-image-wrapper">
					<img src="images/cat-house.jpg" class="new-shop-item-image">
				</div>
				<div class="new-shop-item-hidden">
					<p class="new-shop-item-name">Домик-когтеточка "Энди" для кошек</p>
					<p class="new-shop-item-description">Размеры: 30x50x65 см.</p>
				</div>
			</a>
			<a href="read_shop_item.php" class="new-shop-item">
				<div class="new-shop-item-image-wrapper">
					<img src="images/dog-bed.jpg" class="new-shop-item-image">
				</div>
				<div class="new-shop-item-hidden">
					<p class="new-shop-item-name">Лежак для собак и кошек Ferplast Dandy</p>
					<p class="new-shop-item-description">Размеры: 110x70x23 см.</p>
				</div>
			</a>
		</div>
	</div>
	<div class="list-grid-switches">
		<button class="active list-grid-switch" id="grid"><i class="fas fa-th-large"></i> Блоками</button>
		<button class="list-grid-switch" id="list"><i class="fas fa-th-list"></i> Списком</button>
	</div>
	<div class="shop-items">
		<form>
			<div class="shop-items-filters">
				<h1 style="text-align: center; margin: 0;">Фильтры</h1>
				<div class="shop-items-filter">
					<h4>Цена</h4>
					<div style="display: flex; justify-content: space-between;">
						<input type="number" class="form-input-text form-input-number" name="" placeholder="от">
						<input type="number" class="form-input-text form-input-number" name="" placeholder="до">
					</div>
				</div>
				<div class="shop-items-filter">
					<h4>Для кого</h4>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Кошки
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Собаки
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Птицы
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Грызуны
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Рыбы
					</div>
				</div>
				<div class="shop-items-filter">
					<h4>Категория</h4>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Корм
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Лежанки
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Клетки
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Аквариумы
					</div>
				</div>
				<div class="shop-items-filter">
					<h4>Бренд</h4>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Royal Canin
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Ferplast
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Triol
					</div>
					<div class="shop-items-filter-checkbox-wrapper">
						<input type="checkbox" name="" id="lost-and-found-checkbox">
						Inter-Zoo
					</div>
				</div>
				<div class="shop-items-filter">
					<button class="form-button">Применить</button>
				</div>
			</div>
		</form>
		<div class="shop-items-container">
			<!-- shop-item в цикл -->
			<div class="shop-item">
				<!-- Ссылка на страницу товара -->
				<a href="read_shop_item.php">
					<span class="link-span"></span>
				</a>
				<!-- Тоже ссылка на страницу товара -->
				<a class="shop-item-read-link" href="read_shop_item.php">
					ПОДРОБНЕЕ
				</a>
				<div class="shop-item-image-container">
					<!-- Сюда картинку и название -->
					<img src="images/perfect-fit.png" class="shop-item-image">
					<p class="shop-item-image-name">Perfect Fit, 650 гр.</p>
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
				<a href="read_shop_item.php">
					<span class="link-span"></span>
				</a>
				<!-- Тоже ссылка на страницу товара -->
				<a class="shop-item-read-link" href="read_shop_item.php">
					ПОДРОБНЕЕ
				</a>
				<div class="shop-item-image-container">
					<!-- Сюда картинку и название -->
					<img src="images/dog-bed.jpg" class="shop-item-image">
					<p class="shop-item-image-name">Лежак для собак и кошек Ferplast Dandy</p>
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
				<a href="read_shop_item.php">
					<span class="link-span"></span>
				</a>
				<!-- Тоже ссылка на страницу товара -->
				<a class="shop-item-read-link" href="read_shop_item.php">
					ПОДРОБНЕЕ
				</a>
				<div class="shop-item-image-container">
					<!-- Сюда картинку и название -->
					<img src="images/cat-house.jpg" class="shop-item-image">
					<p class="shop-item-image-name">Домик-когтеточка "Энди" для кошек</p>
					<div class="rating">
						<!-- Добавлять класс checked span'у, который отмечен по счёту снизу вверх -->
						<span><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
						<span class="checked"><label><i class="fas fa-star"></i></label></span>
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
				<a href="read_shop_item.php">
					<span class="link-span"></span>
				</a>
				<!-- Тоже ссылка на страницу товара -->
				<a class="shop-item-read-link" href="read_shop_item.php">
					ПОДРОБНЕЕ
				</a>
				<div class="shop-item-image-container">
					<!-- Сюда картинку и название -->
					<img src="images/bird-cage.jpg" class="shop-item-image">
					<p class="shop-item-image-name">Клетка для попугаев Ferplast Gala</p>
					<div class="rating">
						<!-- Добавлять класс checked span'у, который отмечен по счёту снизу вверх -->
						<span class="checked"><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
						<span><label><i class="fas fa-star"></i></label></span>
					</div>
				</div>
				<div class="shop-item-form-price-container">
					<!-- Цена и добавление в корзину с количеством -->
					<p class="shop-item-price left">7 283 т</p>
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