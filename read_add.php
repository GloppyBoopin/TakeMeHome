<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>TakeMeHome - объявление</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/read_add.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
	</div>
</header>
<main>
	<div class="add-wrapper">
		<div class="add-content">
			<div class="add-item">
				<div class="add-images-slider"></div>
				<div class="add-item-date">Опубликовано 26.11.2020 14:23</div>
				<div class="add-item-name">Догич, 16 лет, пьяный</div>
				<div class="add-item-category">Собаки</div>
				<div class="add-item-description">
					<h1>Описание</h1>
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima assumenda officia, numquam vel magnam neque voluptate nobis dignissimos non molestiae quos, dolor debitis mollitia repellendus odio unde veritatis maiores ex!
				</div>
				<form method="" action="">
					<button class="add-item-favorite">В избранное <i class="far fa-heart"></i></button> <!-- добавить в избранное -->
				</form>
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
<footer></footer>
</body>
</html>