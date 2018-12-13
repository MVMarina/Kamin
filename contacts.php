<?php include 'header.php';?>


<!-- ================ Страница КОНТАКТЫ с картой ================ -->
	<div class="container-main-contacts">
		<div class="maps">
			<iframe src="https://www.google.com/maps/d/embed?mid=1_kcr-DzFiLRiHEqLzeWcJK9YjW0kAlbf&hl=ru" width="540" height="480"></iframe>
		</div>
		<div class="contacts">
			<div class="text-contacts">	
			<h2>Наши контакты	
			</h2>
			<p>+7 (831) 413-66-89</p>
		    <p>aegida.nn@bk.ru</p>
		 	<p>г.Нижний Новгород, пр.Ленина, д.11</p>
		</div>
		<div id="inline">
			<h2>Онлайн заявка</h2>
				<form id="contact" action="mail.php" method="post" name="contact">
					<input type="text" name="name" placeholder="Имя" required><br /><br />
					<input type="text" name="tel" placeholder="Телефон" required><br /><br />
					<input type="text" name="email" placeholder="e-mail" required><br /><br />
					<input id="submit" type="submit" value="Заказать звонок"><br /><br />
					<input type="submit" value="Отправить">
				</form>


				<!-- <script type="text/jаvascript" src="bootstrap.js"></script><br />
				<script> -->

<?php
	// if(!isset($_GET['fio']) and !isset($_GET['email']))
	
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$tel = $_POST['tel'];
	// 	$name = htmlspecialchars($name);
	// 	$email = htmlspecialchars($email);
	// 	$tel = htmlspecialchars($tel);
	// 	$name = urldecode($name);
	// 	$email = urldecode($email);
	// 	$tel = urldecode($tel);
	// 	$name = trim($name);
	// 	$email = trim($email);
	// 	$tel = trim($tel);
	// 	if (mail("example@mail.ru", "Заявка с сайта", "Имя:".$name. "Телефон:".$tel. "E-mail:".$email ,"From: example2@mail.ru \r\n"))
	// { 
	//      echo "Сообщение успешно отправлено"; 
	// } 
	// 	else
	// { 
	//      echo "При отправке сообщения возникли ошибки";
	// }

?>
		
		</div>
	</div>
	
	
<!-- <?php include 'footer.php';?> -->

