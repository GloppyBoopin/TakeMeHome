<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - товар</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/read_add.css">
	<link rel="stylesheet" type="text/css" href="css/read_shop_item.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/shop-item-rating.js"></script>
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
		</div>
		<div class="header-nav-form-link-ad">
			<!-- search form -->
			<form>  
				<input class="search" type="text" name="">
				<button class="search-button"><i class="fa fa-search"></i></button>
			</form>
			<a href="" class="link-ad">ПОДАТЬ ОБЪЯВЛЕНИЕ</a>
		</div>
		<div class="theme-switch-wrapper">
		    <input type="checkbox" id="theme-switch" name="theme" style="border: none;" />
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
</header>
<main>
	<div class="add-wrapper">
		<div class="add-content">
			<div class="add-item">
				<div class="add-images-slider"></div>
				<div class="add-item-date">Добавлено 26.11.2020 14:23</div>
				<div class="add-item-name">Резиновая игрушка Niggers для собак</div>
				<div class="add-item-category">Игрушки</div>
				<div class="add-item-description">
					<h1>Описание</h1>
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima assumenda officia, numquam vel magnam neque voluptate nobis dignissimos non molestiae quos, dolor debitis mollitia repellendus odio unde veritatis maiores ex!
				</div>
				<form class="shop-item-form">
					<div class="input-number-wrapper">
						<button type="button" onclick="this.parentNode.querySelector('.input-number').stepDown()" class="plus-minus-button minus-button">-</button>
						<input class="input-number" type="number" min="1" value="1" max="10" name="">
						<button type="button" onclick="this.parentNode.querySelector('.input-number').stepUp()" class="plus-minus-button plus-button">+</button>
					</div>
					<button type="submit" class="shop-item-cart-button">Добавить в <i class="fa fa-shopping-basket"></i></button>
				</form>
				<div class="add-item-price-container">
					<p>80 000т</p>
				</div>
			</div>
			<div class="add-comments">
				<h1>Отзывы</h1>
				<form method="" action=""> 
					<!-- Не отображать если пользователь не вошёл в аккаунт или добавить атрибут disabled -->
					<textarea class="add-comment-textarea" required placeholder="Напишите отзыв..."></textarea>
					<h1>Дайте оценку</h1>
					<div class="rating">					
						<span><input type="radio" name="rating" id="str5" value="5"><label for="str5"><i class="fas fa-star"></i></label></span>
						<span><input type="radio" name="rating" id="str4" value="4"><label for="str4"><i class="fas fa-star"></i></label></span>
						<span><input type="radio" name="rating" id="str3" value="3"><label for="str3"><i class="fas fa-star"></i></label></span>
						<span><input type="radio" name="rating" id="str2" value="2"><label for="str2"><i class="fas fa-star"></i></label></span>
						<span><input required type="radio" name="rating" id="str1" value="1"><label for="str1"><i class="fas fa-star"></i></label></span>
						<!-- Если не дали рейтинг отправлять обратно -->
						<input type="hidden" name="rating" value="">
					</div>
					<button class="add-comment-post-button">Отправить отзыв</button>
				</form>
				<hr>
				<div class="add-comment">
					<div class="add-comment-name">
						<i class="fas fa-user"></i> Обама
					 	<div class="rating" style="margin-left: 20px;">
					 		<!-- Добавлять класс checked span'у, который отмечен по счёту снизу вверх -->
							<span><label><i class="fas fa-star"></i></label></span>
							<span class="checked"><label><i class="fas fa-star"></i></label></span>
							<span><label><i class="fas fa-star"></i></label></span>
							<span><label><i class="fas fa-star"></i></label></span>
							<span><label><i class="fas fa-star"></i></label></span>
						</div>
					</div>
					<div class="add-comment-content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea enim repudiandae rem blanditiis assumenda quisquam tempore hic repellat, inventore rerum magni ex. Iusto at natus illum aspernatur iure ratione voluptates?</div>
					<div class="add-comment-date">26.11.2020 14:23</div>
				</div>
			</div>
		</div>
		<div class="add-author-info">
			<h1 style="margin-top: 0; font-size: 20px;">Компания-поставщик:</h1>
			<div class="add-author-name"><i class="fas fa-address-card"></i> Байден International </div>
<!-- 			<div class="add-author-status">Частное лицо</div>
 -->			<div class="add-author-telephone">+7 (705) 313 47 88</div>
			<div class="add-author-address">ул. Жарокова д. 322 кв. 153</div>
		</div>
	</div>
</main>
<footer></footer>
</body>
</html>	