<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - корзина</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shopping_basket.css">
	<link rel="stylesheet" type="text/css" href="css/post_add.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		   $('#courier-status:contains("Забирает заказ")').css('color', 'red');
		   $('#courier-status:contains("В пути")').css('color', '#228B22'); 
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
					<img src="images/kitekat.jpg" class="shop-item-image">
				</div>
				<!-- Название -->
				<div class="shop-item-name-container">
					<p class="shop-item-name">Kitekat, 350 гр.</p>
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
					<img src="images/dog-bed.jpg" class="shop-item-image">
				</div>
				<!-- Название -->
				<div class="shop-item-name-container">
					<p class="shop-item-name">Лежак для собак и кошек Ferplast Dandy</p>
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
			<div class="shop-items-total-cost">
				<p>Итого</p>
				<p>160 000 т</p>
			</div>

			<hr>
			<h1 class="main-h1">Оформление заказа</h1>
			<p class="main-p required">Обязательные поля помечены</p>
			<form class="shop-items-order-form">
				<div class="form-wrapper">
					<div class="input-wrapper">
						<input class="form-input-text" id="name" type="text" name="">
						<label class="form-input-label required" for="name">Имя</label>
					</div>
					<div class="input-wrapper">
						<div class="form-input-select">
							<select id="select">
								<option>Выберите вариант...</option>
								<option>Самовывоз</option>
								<option>Доставка</option>
							</select>
						</div>
						<label class="form-input-label required" for="select">Вид заказа</label>
					</div>
					<div class="input-wrapper">
						<div class="form-input-select">
							<select id="select">
								<option>Выберите вариант...</option>
								<option>Наличными</option>
								<option>По карте</option>
								<option>Банковский перевод</option>
							</select>
						</div>
						<label class="form-input-label required" for="select">Способ оплаты</label>
					</div>
					<div class="input-wrapper" style="margin-bottom: 40px;">
						<div class="form-input-select">
							<select id="select" onchange="showDiv(this)">
								<option>Выберите вариант...</option>
								<option>ул. Жарокова д.322 кв.151</option>
								<option>ул. Гагарина д.311а кв.192</option>
								<option value="show">Другой</option>
							</select>

							<script type="text/javascript">
								function showDiv(element){
									document.getElementById('hidden').style.display = element.value == 'show' ? 'block' : 'none';
								}
							</script>
						</div>
						<label class="form-input-label required" for="select">
							Адрес доставки
							<p>Адресы введённые при регистрации</p>
						</label>
					</div>
					<div class="input-wrapper" style="display: none;" id="hidden">
						<input class="form-input-text" id="address" type="text" name="">
						<label class="form-input-label required" for="address">Адрес доставки</label>
					</div>
					<div class="input-wrapper">
						<input class="form-input-text" id="reg-tel" type="tel" name="" pattern="[+]{1}[0-9]{11}" placeholder="+78005553535">
						<label class="form-input-label required" for="reg-tel">
							Номер телефона
							<p>С вами свяжутся для подтверждения заказа</p>
						</label>
					</div>
					<div class="input-wrapper">
						<button class="shopping-basket-order">Оформить заказ</button>
					</div>

				</div>
			</form>
			
			<div class="courier-info-wrapper">
				<h1 class="main-h1">Ваш курьер</h1>
				<div class="form-wrapper">
					<div class="input-wrapper">
						<div class="courier-label-value" id="courier-name">Ильяс Жуанышев</div>
						<div class="form-input-label" for="courier-name">Имя</div>
					</div>
					<div class="input-wrapper">
						<div class="courier-label-value" id="courier-phone">+7(705)313-47-88</div>
						<div class="form-input-label" for="courier-phone">Телефон</div>
					</div>
					<div class="input-wrapper">
						<div class="courier-label-value" id="courier-status">В пути</div>
						<div class="form-input-label" for="courier-status">Статус</div>
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