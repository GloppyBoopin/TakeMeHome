<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - бюро находок</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/addesk.css">

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
				<a href="shopint_basket.php" class="header-nav-icon-link">
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


<!-- =====================================БЮРО НАХОДОК========================================== -->

	<p class="search-clarifier">Поиск по бюро находок <i class="fas fa-level-down-alt"></i></p>
	<div class="search-wrapper">
		<!-- Поиск по объявлениям -->
		<form>  
			<input class="search" type="text" name="">
			<button class="search-button"><i class="fa fa-search"></i></button>
		</form>
	</div>

	<div class="addesk">
		<div class="filters-wrapper">
			<div class="pet-category-filters">
				<!-- Нажимая на одну из этих кнопок пользователь отправляется на страницу с соответствующими животными, добавляя туда блок с фильтрами для данной категории животных -->
				<a href="" class="pet-category-link">
					<img src="images/dog-minimal.png" alt="" class="pet-category-image">
					<p>Собаки</p>
					<img src="images/dropdown.png" alt="" class="dropdown-image">
				</a>
				<a href="" class="pet-category-link">
					<img src="images/cat-minimal.png" alt="" class="pet-category-image">
					<p>Кошки</p>
					<img src="images/dropdown.png" alt="" class="dropdown-image">
				</a>
				<a href="" class="pet-category-link">
					<img src="images/hamster-minimal.png" alt="" class="pet-category-image">
					<p>Грызуны</p>
					<img src="images/dropdown.png" alt="" class="dropdown-image">
				</a>
				<a href="" class="pet-category-link">
					<img src="images/bird-minimal.png" alt="" class="pet-category-image">
					<p>Птицы</p>
					<img src="images/dropdown.png" alt="" class="dropdown-image">
				</a>
				<a href="" class="pet-category-link">
					<!-- <img src="" alt="" class="pet-category-image"> -->
					<p>Прочее</p>
					<img src="images/dropdown.png" alt="" class="dropdown-image">
				</a>
			</div>
		</div>
		<div class="list-grid-switches">
			<button class="active list-grid-switch" id="grid"><i class="fas fa-th-large"></i> Блоками</button>
			<button class="list-grid-switch" id="list"><i class="fas fa-th-list"></i> Списком</button>
		</div>
	</div>
	<div class="addesk-items">
		<a href="read_add.php" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/dog.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Золотой ретривер, 7 мес., мальчик</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description" style="-webkit-line-clamp: 6;">Потерялся золотой ретривер в районе Меги на Розыбакиева. Просим нашедших позвонить незамедлительно.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
						</div>
					</div>
				</div>
			</div>
		</a>
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