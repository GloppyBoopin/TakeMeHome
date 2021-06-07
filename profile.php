<!DOCTYPE html>
<html>
<head>
	<title>TakeMeHome - профиль</title>
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link rel="stylesheet" type="text/css" href="css/favorite.css">
	<link rel="stylesheet" type="text/css" href="css/post_add.css">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/profile-sidebar.js"></script>
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
			    <input type="checkbox" id="theme-switch" style="border: unset !important;" name="theme" />
			    <label for="theme-switch"></label>
			    <p>Сменить тему</p>
			</div>
			<script type="text/javascript" src="js/theme-switch.js"></script>
			<div class="header-nav-icons-wrapper">
				<!-- <a href="" class="header-nav-icon-link">
					Скрыть если пользователь НЕ вошёл в аккаунт
					<i class="header-nav-icon far fa-user"></i>
					<p>Профиль</p>
				</a> -->
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
		</div>
	</header>
	<main>
		<div class="profile">
			<div class="profile-settings">
				<div class="profile-sidebar">
					<a href="#my-adds" class="profile-sidebar-link">Мои объявления</a>
					<a href="#profile-settings" class="profile-sidebar-link">Настройки</a>
					<a href="#become-business" class="profile-sidebar-link">Бизнес</a>
					<a href="#delete-account" class="profile-sidebar-link" style="color: red;">Удалить аккаунт</a>
					<!-- Выход из аккаунта -->
					<a href="" class="profile-sidebar-link">Выйти</a>
				</div>
				<div class="profile-container">
					<div class="profile-content" id="my-adds">
						<div class="addesk-items list">
							<a href="read_add.php" class="addesk-item-link">
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
												<p class="addesk-item-price">300 000 т</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="profile-content" id="profile-settings">
						<div class="profile-settings-section">
							<h1 class="main-h1">Изменить контактные данные</h1>
							<form>
								<!-- Вставить в инпуты данные пользователя, если они есть -->
								<div class="form-wrapper">
									<div class="input-wrapper">
										<input class="form-input-text" id="reg-username" type="text" name="">
										<label class="form-input-label" for="reg-username">
											Псевдоним/Имя
										</label>
									</div>
									<div class="input-wrapper">
										<input class="form-input-text" id="reg-tel" type="tel" name="" pattern="[+]{1}[0-9]{11}">
										<label class="form-input-label" for="reg-tel">Номер телефона</label>
									</div>
									<div class="input-wrapper">
										<input class="form-input-text" id="reg-address" type="text" name="">
										<label class="form-input-label" for="reg-address">Адрес</label>
									</div>
									<div class="input-wrapper">
										<input class="form-input-text" id="reg-address2" type="text" name="">
										<label class="form-input-label" for="reg-address2">Доп. адрес</label>
									</div>
									<div class="input-wrapper">
										<button class="form-button">Сохранить</button>
									</div>
								</div>
							</form>
						</div>
						<hr>
						<div class="profile-settings-section">
							<h1 class="main-h1">Изменить email-адрес (логин)</h1>
							<form>
							<div class="form-wrapper">
								<div class="input-wrapper">
									<input class="form-input-text" id="reg-email" type="email" name="" placeholder="example@mail.ru">
									<label class="form-input-label" for="reg-email">Новый email</label>
								</div>
								<div class="input-wrapper">
									<p class="main-p" style="width: 424px !important;">
										<span style="color: red;">Внимание</span>, при изменении email-адреса, потребуется входить в аккаунт под данным(!) email-адресом, а старый перестанет работать.
									</p>
								</div>
								<div class="input-wrapper">
									<button class="form-button">Сохранить</button>
								</div>
							</div>
						</div>
					</div>
					<div class="profile-content" id="become-business">
						<p class="main-p">Вы представляете питомник? <br> Вы владелец бизнеса? <br> Вы хотите чтобы вместо "Частное лицо" на ваших объявлениях стояла надпись "Бизнес"? <br> Отправьте файл, юридически подтверждающий вашу принадлежность к той или иной организации, и с вами свяжутся по телефону для подтверждения.
						<br>
						<br>
						Дополнительным условием является присутствие вашей компании на Яндекс.Картах / Google Картах / 2gis.
						</p>
						<form>
							<div class="form-input-file-wrapper">
								<label class="form-input-file-label" for="input-file">
									<input type="file" id="input-file" required name="">
									Прикрепить файл
								</label>
								<p id="is-uploaded"></p>
								<button id="upload-file">Отправить</button>
								<script type="text/javascript">
									$('#input-file').change(function() {
										if($(this)[0].files[0].name){
											$('#is-uploaded').text('Файл прикреплён');
											$('#upload-file').show();
										}
										else {
											$('#is-uploaded').text('Файл не прикреплён');
										}
									});
								</script>
							</div>
						</form>
					</div>
					<div class="profile-content" id="delete-account">
						<p class="main-p">
							<span style="color: red;">Внимание</span>, если вы удалите аккаунт, то все данные о нём будут стёрты и утеряны навсегда<span style="color: red;">!</span>
							<br><br>
							Все объявления, комментарии, отзывы, избранные объявления и содержание корзины будут удалены без восстановления.
						</p>
						<form style="margin-top: 40px;">
							<div class="form-wrapper">
								<div class="input-wrapper">
									<input type="checkbox" name="" id="delete-account-checkbox">
									<label style="top: 0" class="form-input-label" for="delete-account-checkbox">Вы уверены, что хотите удалить аккаунт?</label>
								</div>
								<div class="input-wrapper">
									<button class="form-button delete-account-button">Удалить</button>
								</div>
								<script type="text/javascript">
									var $btn = $('.delete-account-button').hide();
									var $chbx = $('#delete-account-checkbox').click(function(){
										$btn.toggle($chbx.is(':checked'));
									});
								</script>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer></footer>
</body>
</html>