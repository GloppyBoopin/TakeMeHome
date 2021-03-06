<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - объявление</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/read_add.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

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
		<div class="header-nav-login-reg">
			<a href="login_reg.php" class="header-nav-login-reg-link">Вход | Регистрация</a>
		</div>
	</div>
</header>
<main>
	<div class="add-wrapper">
		<div class="add-content">
			<div class="add-item">
				<div class="add-images-slider">
					<!-- Добавляешь столько div'ov сколько картинок -->
					<div><img src="images/dog.png"></div>
					<div><img src="images/dog-2.jpg"></div>
					<div><img src="images/dog-3.jpg"></div>
					<div><img src="images/dog-4.jpg"></div>
				</div>
				<div class="add-item-date">Опубликовано 26.11.2020 14:23</div>
				<div class="add-item-name">Золотой ретривер, 12 мес., мальчик</div>
				<div class="add-item-category">Собаки</div>
				<div class="add-item-description">
					<h1>Описание</h1>
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima assumenda officia, numquam vel magnam neque voluptate nobis dignissimos non molestiae quos, dolor debitis mollitia repellendus odio unde veritatis maiores ex!
				</div>
				<form method="" action="">
					<button class="add-item-favorite">В избранное <i class="far fa-heart"></i></button> <!-- добавить в избранное -->
				</form>
				<div class="add-item-price-container">
					<p>80 000т</p>
				</div>
			</div>
			<div class="add-comments">
				<h1>Комментарии</h1>
				<form method="" action=""> 
					<!-- Не отображать если пользователь не вошёл в аккаунт -->
					<textarea class="add-comment-textarea" placeholder="Напишите комментарий..."></textarea>
					<button class="add-comment-post-button">Отправить комментарий</button>
				</form>
				<hr>
				<div class="add-comment">
					<div class="add-comment-name"><i class="fas fa-user"></i> Обама</div>
					<div class="add-comment-content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea enim repudiandae rem blanditiis assumenda quisquam tempore hic repellat, inventore rerum magni ex. Iusto at natus illum aspernatur iure ratione voluptates?</div>
					<div class="add-comment-date">26.11.2020 14:23</div>
				</div>
			</div>
		</div>
		<div class="add-author-info">
			<h1 style="margin-top: 0;">Автор</h1>
			<div class="add-author-name"><i class="fas fa-user"></i> Байден</div>
			<div class="add-author-status">Частное лицо</div>
			<div class="add-author-telephone">+7 (705) 313 47 88</div>
			<div class="add-author-address">ул. Жарокова д. 322 кв. 153</div>
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