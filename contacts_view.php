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
					<input type="text" name="tel" min="6" max="10" placeholder="Телефон" required><br /><br />
					<input type="email" name="email" placeholder="e-mail" required><br /><br />
					<!-- <input id="submit" type="submit" value="Заказать звонок"><br /><br /> -->
					<input type="submit" value="Отправить">
				</form>


				<!-- <script type="text/jаvascript" src="bootstrap.js"></script><br />
				<script> -->

	
		</div>
	</div>
	
	
<!-- <?php include 'footer.php';?> -->

