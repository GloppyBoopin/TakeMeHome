<!DOCTYPE html>
<html data-theme="dark">
<head>
	<title>TakeMeHome - главная</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/sliders.js"></script>
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
			<div class="header-nav-login-reg">
				<!-- Скрыть если пользователь вошёл в аккаунт -->
				<a href="login_reg.php" class="header-nav-login-reg-link">Вход | Регистрация</a>
			</div>
		</div>
	</header>
	<main>
		<div class="header-slider">
			<div><img src="images/slider-image-1.jpg"></div>
			<div><img src="images/slider-image-2.jpg"></div>
			<div><img src="images/slider-image-3.jpg"></div>
		</div>
		<div class="site-nav">
			<div class="site-nav-link-container">
				<!-- shop link -->
				<a href="shop.php" class="site-nav-link">
					<img src="images/shopping-bag.png" class="site-nav-image">
					<p class="site-nav-p">МАГАЗИН</p>
				</a>
				<!-- free ads link -->
				<a href="addesk.php" class="site-nav-link">
					<img src="images/home.png" class="site-nav-image">
					<p class="site-nav-p">ДАРОМ</p>
				</a>
				<!-- ads link -->
				<a href="addesk.php" class="site-nav-link">
					<img src="images/pawprint.png" class="site-nav-image">
					<p class="site-nav-p">ПРОДАЖА</p>
				</a>
				<!-- lost and found link -->
				<a href="lost_and_found.php" class="site-nav-link">
					<img src="images/pet-house.png" class="site-nav-image">
					<p class="site-nav-p" style="margin: 5px -25px;">БЮРО НАХОДОК</p>
				</a>
			</div>
		</div>
		<div class="shop-nav">
			<div class="filler-nav">
				<a href="shop.php" class="filler-nav-item">
					<img src="images/price-tag.png" class="filler-nav-img">
					<p class="filler-nav-p">СКИДКИ И АКЦИИ</p>
				</a>
				<a href="shop.php" class="filler-nav-item">
					<img src="images/price-tag.png" class="filler-nav-img">
					<p class="filler-nav-p">НОВЫЕ ТОВАРЫ</p>
				</a>
				<a href="" class="filler-nav-item">
					<img src="images/price-tag.png" class="filler-nav-img">
					<p class="filler-nav-p">ВАКАНСИИ</p>
				</a>
			</div>
			<div class="delivery-categories-wrapper">
				<div class="delivery-promotion">
					<p class="delivery-promotion-p">БЫСТРАЯ</p>
					<p class="delivery-promotion-p">ДОСТАВКА</p>
					<p class="delivery-promotion-p">ПО ВСЕЙ</p>
					<p class="delivery-promotion-p">АЛМАТЕ</p>
					<img src="images/truck.png" alt="" class="delivery-promotion-img">
				</div>
				<div class="categories-nav">
					<div class="categories-nav-item">
						<img src="images/dog-cat-cut.png" alt="" class="categories-nav-img">
						<div class="categories-nav-nav">
							<p>ТОВАРЫ ДЛЯ КОШЕК И СОБАК</p>
							<p>
								<a href="shop.php" class="categories-nav-link">Корм</a> | 
								<a href="shop.php" class="categories-nav-link">Игрушки</a> | 
								<a href="shop.php" class="categories-nav-link">Гигиена</a> | 
								<a href="shop.php" class="categories-nav-link">Уход</a> | 
								<a href="shop.php" class="categories-nav-link">Прочее</a> | 
								<a href="shop.php" class="categories-nav-link">Все товары</a>
							</p>
						</div>
					</div>
					<div class="categories-nav-item">
						<img src="images/fishes-cut.png" alt="" class="categories-nav-img">
						<div class="categories-nav-nav">
							<p>ТОВАРЫ ДЛЯ РЫБ</p>
							<p>
								<a href="shop.php" class="categories-nav-link">Корм</a> | 
								<a href="shop.php" class="categories-nav-link">Аквариумы</a> | 
								<a href="shop.php" class="categories-nav-link">Украшения</a> | 
								<a href="shop.php" class="categories-nav-link">Прочее</a> | 
								<a href="shop.php" class="categories-nav-link">Все товары</a>
							</p>
						</div>
					</div>
					<div class="categories-nav-item">
						<img src="images/hamsters-cut.png" alt="" class="categories-nav-img">
						<div class="categories-nav-nav">
							<p>ТОВАРЫ ДЛЯ ГРЫЗУНОВ</p>
							<p>
								<a href="shop.php" class="categories-nav-link">Корм</a> |&nbsp;
								<a href="shop.php" class="categories-nav-link">Клетки</a> | 
								<a href="shop.php" class="categories-nav-link">Игрушки</a> | 
								<a href="shop.php" class="categories-nav-link">Уход</a> | 
								<a href="shop.php" class="categories-nav-link">Прочее</a> | 
								<a href="shop.php" class="categories-nav-link">Все товары</a>
							</p>
						</div>
					</div>
					<div class="categories-nav-item">
						<img src="images/parrots-cut.png" alt="" class="categories-nav-img">
						<div class="categories-nav-nav">
							<p>ТОВАРЫ ДЛЯ ПТИЦ</p>
							<p>
								<a href="shop.php" class="categories-nav-link">Корм</a> |&nbsp;
								<a href="shop.php" class="categories-nav-link">Клетки</a> | 
								<a href="shop.php" class="categories-nav-link">Игрушки</a> | 
								<a href="shop.php" class="categories-nav-link">Уход</a> | 
								<a href="shop.php" class="categories-nav-link">Прочее</a> | 
								<a href="shop.php" class="categories-nav-link">Все товары</a>
							</p>
						</div>
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
