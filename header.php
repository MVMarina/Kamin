<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	<title> <?php echo $results['id']; ?></title>
<!-- 	<link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="../flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/slider.js"></script>
	
</head>
<body>
	
		<!-- верхнее меню -->
		<div class="top-menu">			
				<ul class="top-menu-list container">
					<li><a href="index.php">Главная</a></li>
					<li><a href="index.php?model=guarantee">Гарантия и возврат</a></li>
					<li><a href="index.php?model=anwers">Вопрос/ответ</a></li>
					<li><a href="index.php?model=reviews">Отзывы</a></li>
					<li><a href="index.php?model=contacts">Контакты</a></li>
				</ul>			
		</div>
	
		<!-- информация хэдера -->	
			<div class="header-info container">
				<div class="logo"><a href="index.php">
					<img src="images/logo.png" alt=""></a>
				</div>
				<div class="tel">
					+7 (831) 413-66-89
				</div>
				<div class="block-3-header">

				<div class="btn-header btn-header-1">
					<a href=""> <img class="img-btn-header btn-icons1" src="images/icons1.png" alt=""> СРАВНИТЬ</a>
				</div>
			 	<div class="btn-header">
					<a href="index.php?model=basket"> <img class="img-btn-header" src="images/icons2.png" alt=""> КОРЗИНА</a>
				</div>
			    </div>				
			</div>	
		

		<!-- второе меню -->
		<nav class="main-menu">
			<div class="main-menu-block container">
			<div class="main-menu-b1">
				<ul class="main-menu-list">
					 <li class="menu-list-1"><a href="index.php?model=catalog">КАТАЛОГ</a>
				 		<ul class="submenu">
							<li><a href="">Электрокамин</a>
								<ul class="submenu1">
									<li><a href="index.php?model=floor">Пристенные / Напольные</a></li>
									<li><a href="index.php?model=corner">Угловые</a></li>
									<li><a href="">Настенные / Встроенные</a></li>
								</ul>
							</li>
							<li><a href="">Портал для электрокамина</a></li>
							<li><a href="">Очаг для электрокамина</a></li>
							<li><a href="">Аксессуары</a>
								<ul class="submenu1">
									<li><a href="">Каминные экраны</a></li>
									<li><a href="">Каминные дровники</a></li>
									<li><a href="">Наборы каминного инструмента</a></li>
									<li><a href="">Биотопливо</a></li>
									<li><a href="">Декоративные элементы</a></li>
									<li><a href="">Другие аксуссуары</a></li>
								</ul></li>
						</ul> 
					</li>
					<li class="menu-list-1"><a href="index.php?model=payment">ОПЛАТА</a></li>
					<li class="menu-list-1"><a href="index.php?model=delivery">ДОСТАВКА</a></li>
					<li class="menu-list-2"><a href="index.php?model=stock">АКЦИИ</a></li>
				</ul>
			</div>


			<div class="main-menu-b2">
				<form method="GET"> <!-- Добавить action -->
   					<p><input type="search" name="q" placeholder="Поиск"> 
   					<button type="submit" class="btn">Найти</button></p>

  				</form>
			</div>
			</div>							
		</nav>