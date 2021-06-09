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
	<h1 class="main-h1">Подать объявление</h1>
	<p class="main-p required">Обязательные поля помечены</p>
	<form>
		<div class="form-wrapper">
			<div class="input-wrapper">
				<input class="form-input-text" id="pet-name" type="text" name="">
				<label class="form-input-label" for="pet-name">Имя питомца</label>
			</div>
			<div class="input-wrapper">
				<textarea class="form-textarea" id="pet-description" placeholder="Введите текст..." required></textarea>
				<label class="form-input-label required" for="pet-description">
					Описание
					<p>Опишите своего питомца, его харакетр и особенности</p>
				</label>
			</div>
			<div class="input-wrapper">
				<div class="form-input-select">
					<select id="pet-category-select" onchange="showDiv(this)">
						<option>Выберите вариант...</option>
						<option value="1">Кошки</option>
						<option>Cобаки</option>
						<option>Птицы</option>
						<option>Грызуны</option>
						<option>Рыбы</option>
					</select>
				</div>
				<label class="form-input-label required" for="pet-category-select">Категория</label>
			</div>

			<script type="text/javascript">
				function showDiv(element){
					if (document.getElementById('pet-category-select').value == '1'){
						document.getElementById('hidden-1').style.display = 'block';
						document.getElementById('hidden-2').style.display = 'block';
						document.getElementById('hidden-3').style.display = 'block';
						document.getElementById('hidden-4').style.display = 'block';
					}
					else {
						document.getElementById('hidden-1').style.display = 'none';
						document.getElementById('hidden-2').style.display = 'none';
						document.getElementById('hidden-3').style.display = 'none';
						document.getElementById('hidden-4').style.display = 'none';
					}
				}
			</script>

			<div class="input-wrapper hidden" style="display: none;" id="hidden-1">
				<div class="form-input-select">
					<select id="cat-select">
						<option>Выберите вариант...</option>
						<option>Мейн-кун</option>
						<option>Скоттиш страйт</option>
						<option>Скоттиш фолд</option>
						<option>Русская голубая</option>
						<option>Анатолийская кошка</option>
						<option>...</option>
					</select>
				</div>
				<label class="form-input-label required" for="cat-select">Порода</label>
			</div>
			<div class="input-wrapper hidden" style="display: none;" id="hidden-2">
				<div class="form-input-select">
					<select id="cat-select">
						<option>Выберите вариант...</option>
						<option>Мальчик</option>
						<option>Девочка</option>
					</select>
				</div>
				<label class="form-input-label required" for="cat-select">Пол</label>
			</div>
			<div class="input-wrapper hidden" style="margin-top: 10px; display: none;" id="hidden-3">
				<input type="checkbox" name="" id="cat-checkbox">
				<label class="form-input-label required" for="cat-checkbox">Прививки</label>
			</div>
			<div class="input-wrapper hidden" style="margin-top: 10px; display: none;" id="hidden-4">
				<input type="checkbox" name="" id="cat-checkbox">
				<label class="form-input-label required" for="cat-checkbox">Стерилизация</label>
			</div>

			<div class="input-wrapper">
				<input class="form-input-text" id="pet-price" type="number" name="" value="0" required>
				<label class="form-input-label required" for="pet-price">
					Цена
					<p>Оставьте нулевой для попадения в категорию "Бесплатно"</p>
				</label>
			</div>
			<div class="input-wrapper" style="margin-top: 60px;">
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
		</div>

		<hr>

		<h1 class="main-h1">Ваши контактные данные</h1>
		<p class="main-p required">Обязательные поля помечены</p>
		<div class="form-wrapper">
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-username" type="text" name="">
				<label class="form-input-label required" for="reg-username">
					Псевдоним/Имя
				</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-tel" type="tel" name="" pattern="[+]{1}[0-9]{11}">
				<label class="form-input-label required" for="reg-tel">Номер телефона</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-address" type="text" name="">
				<label class="form-input-label required" for="reg-address">Адрес</label>
			</div>
			<div class="input-wrapper">
				<input class="form-input-text" id="reg-address2" type="text" name="">
				<label class="form-input-label" for="reg-address2">Доп. адрес</label>
			</div>

			<div class="input-wrapper">
				<button class="form-button">Подать объявление</button>
			</div>
		</div>
	</form>
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