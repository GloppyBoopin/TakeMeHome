<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - объявления</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/addesk.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
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
			</div>
			<div class="theme-switch-wrapper">
			    <input type="checkbox" id="theme-switch" name="theme" />
			    <label for="theme-switch"></label>
			    <p>Сменить тему</p>
			</div>
			<script type="text/javascript" src="js/theme-switch.js"></script>
		</div>
		<a href="" class="link-ad-addesk">ПОДАТЬ ОБЪЯВЛЕНИЕ</a>
	</header>
<main>
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
	</div>
	<div class="addesk-items">
		<a href="" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/dog.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Догич, 16 лет, пьяный</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor id distinctio voluptates laborum natus tempora ratione. Recusandae sit animi facilis ipsa architecto non praesentium autem provident tempora, ducimus quis.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления и цена, если нет цены то "Даром" --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
							<p class="addesk-item-price">ДАРОМ</p>
						</div> 
						<form method="" action="">
							<button class="addesk-item-favorite right">В избранное</button> <!-- добавить в избранное -->
						</form>
					</div>
				</div>
			</div>
		</a>
		<a href="" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/dog.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Догич, 16 лет, пьяный</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor id distinctio voluptates laborum natus tempora ratione. Recusandae sit animi facilis ipsa architecto non praesentium autem provident tempora, ducimus quis.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления и цена, если нет цены то "Даром" --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
							<p class="addesk-item-price">ДАРОМ</p>
						</div> 
						<form method="" action="">
							<button class="addesk-item-favorite right">В избранное</button> <!-- добавить в избранное -->
						</form>
					</div>
				</div>
			</div>
		</a>
		<a href="" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/dog.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Догич, 16 лет, пьяный</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor id distinctio voluptates laborum natus tempora ratione. Recusandae sit animi facilis ipsa architecto non praesentium autem provident tempora, ducimus quis.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления и цена, если нет цены то "Даром" --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
							<p class="addesk-item-price">ДАРОМ</p>
						</div> 
						<form method="" action="">
							<button class="addesk-item-favorite right">В избранное</button> <!-- добавить в избранное -->
						</form>
					</div>
				</div>
			</div>
		</a>
		<a href="" class="addesk-item-link">
			<div class="addesk-item">
				<div class="addesk-item-image-wrapper left" style="">
					<img src="images/dog.png" alt="Фотография" class="addesk-item-image"> <!-- Если нет фотографий можно поставить филлер -->
				</div>
				<div class="addesk-item-info right">
					<p class="addesk-item-head">Догич, 16 лет, пьяный</p> <!-- Порода, пол, возраст (если есть) -->
					<p class="addesk-item-category">Собаки</p> <!-- Категория и подкатегория, если есть (Собаки, лабрадор) -->
					<p class="addesk-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor id distinctio voluptates laborum natus tempora ratione. Recusandae sit animi facilis ipsa architecto non praesentium autem provident tempora, ducimus quis.</p> <!-- Описание -->
					<p class="addesk-item-phone">Тел: +7 (800) 555-35-35</p> <!-- Номер телефона (если есть) -->
					<div class="addesk-item-bottom">
						<div class="addesk-item-date-price left">
						<!-- Дата добавления и цена, если нет цены то "Даром" --> 
							<p class="addesk-item-date">26.11.2020 14:23</p> 
							<p class="addesk-item-price">ДАРОМ</p>
						</div> 
						<form method="" action="">
							<button class="addesk-item-favorite right">В избранное</button> <!-- добавить в избранное -->
						</form>
					</div>
				</div>
			</div>
		</a>
	</div>
</main>
<footer></footer>
</body>
</html>