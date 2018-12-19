<form method="GET" action="Файл php куда будут приходить данные">
			<div class="category">		
				<p class="filtr-fon">Категории товаров</p>
				<ul>
					<li> <input type="checkbox" id="checkcat5"><label for="checkcat5"><b>Электрокамины</b></label>
						<ul>
							<li><input type="checkbox" id="checkcat6"><label for="checkcat6">Пристенные / Напольные</label></li>
							<li> <input type="checkbox" id="checkcat7"><label for="checkcat7">Угловые</label></li>
							<li> <input type="checkbox" id="checkcat8"><label for="checkcat8">Настенные / Встроенные</label></li>							
						</ul>

					</li>
					<li> <input type="checkbox" id="checkcat9"><label for="checkcat9"><b>Портал для электрокамина</b></label></li>
					<li> <input type="checkbox" id="checkcat10"><label for="checkcat10"><b>Очаг для электрокамина</b></label></li>	
					<li> <input type="checkbox" id="checkcat11"><label for="checkcat11"><b>Аксессуары</b></label>
					
						<ul>
							<li> <input type="checkbox" id="checkcat12"><label for="checkcat12">Каминные экраны</label>
							<li> <input type="checkbox" id="checkcat13"><label for="checkcat13">Каминные дровники</label>	
							<li> <input type="checkbox" id="checkcat14"><label for="checkcat14">Наборы каминного инструмента</label>
							<li> <input type="checkbox" id="checkcat15"><label for="checkcat15">Биотопливо</label>
							<li> <input type="checkbox" id="checkcat16"><label for="checkcat16">Декоративные элементы</label>
							<li> <input type="checkbox" id="checkcat17"><label for="checkcat17">Другие аксуссуары</label>

						</ul>
					</li>
				</ul>
		
			
		</div>

		<div class="price">
			<p class="filtr-fon">Стоимость</p>			
				<div class="block-price">
					<ul>
						<li> <p> от:</p>  </li>
						<li> <input type="text" id="start-price" name="start_price" value="1000"></li><br>
						<li><p> до:</p></li>
						<li> <input type="text" id="end-price" name="end_price" value="200 000"></li>
					</ul>
				</div>
			<div class="trackbar"></div>
		</div>

		<div class="manufacturer">
			<p class="filtr-fon">Производитель</p>
			<ul class="checkbox-manufacturer">
				<li> <input type="checkbox" id="checkbrend1"><label for="checkbrend1">RealFlame</label></li>
				

			</ul>
		</div>

		<div class="size">
			<p class="filtr-fon">Ширина, мм</p>			
				<div class="width">
					<ul>
						<li> <p> от:</p>  </li>
						<li> <input type="text" id="start-width" name="start_width" value="95"></li><br>
						<li><p> до:</p></li>
						<li> <input type="text" id="end-width" name="end_width" value="2000"></li>
					</ul>
				</div>
			<div class="trackbar"></div>

			<p class="filtr-fon">Выста, мм</p>			
				<div class="height">
					<ul>
						<li> <p> от:</p>  </li>
						<li> <input type="text" id="start-height" name="start_height" value="250"></li><br>
						<li><p> до:</p></li>
						<li> <input type="text" id="end-height" name="end_height" value="1600"></li>
					</ul>
				</div>
			<div class="trackbar"></div>

					<p class="filtr-fon">Глубина, мм</p>			
				<div class="depht">
					<ul>
						<li> <p> от:</p>  </li>
						<li> <input type="text" id="start-depht" name="start_depht" value="95"></li><br>
						<li><p> до:</p></li>
						<li> <input type="text" id="end-depht" name="end_depht" value="1000"></li>
					</ul>
				</div>
			<div class="trackbar"></div>
		</div>


		<div class="fuel">
			<p class="filtr-fon">Вид топлива</p>			
				<ul>
					<li> <input type="checkbox" id="fuel1"><label for="fuel1">Электричество</label></li>
					<li> <input type="checkbox" id="fuel2"><label for="fuel2">Биотопливо</label></li>
				</ul>
		</div>

		<div class="material">
			<p class="filtr-fon">Материал</p>			
				<ul>
					<li> <input type="checkbox" id="material1"><label for="material1">Дерево</label></li>
					<li> <input type="checkbox" id="material2"><label for="material2">Камень</label></li>
					<li> <input type="checkbox" id="material3"><label for="material3">Стекло</label></li>

				</ul>
		</div>

		<div class="color">
			<p class="filtr-fon">Цвет</p>			
				<ul>
					<li> <input type="checkbox" id="color1"><label for="color1">Светлый</label></li>
					<li> <input type="checkbox" id="color2"><label for="color2">Темный</label></li>
					<li> <input type="checkbox" id="color3"><label for="color3">Цветной</label></li>

				</ul>
		</div>
		<div class="heating">
			<p class="filtr-fon">Обогрев</p>			
				<ul>
					<li> <input type="checkbox" id="heating"><label for="heating">Есть</label></li>
					<li> <input type="checkbox" id="heating-no"><label for="heating-no">Нет</label></li>
				</ul>
		</div>

		<div class="functions">
			<p class="filtr-fon">Дополнительные функции</p>			
				<ul>
					<li> <input type="checkbox" id="sound_effect"><label for="sound_effect">Звуковой эффект</label></li>
					<li> <input type="checkbox" id="air_reduction"><label for="air_reduction">Увлажнение воздуха</label></li>
					<li> <input type="checkbox" id="brightness"><label for="brightness">Регулировка яркости пламени</label></li>
					<li> <input type="checkbox" id="damping_effect"><label for="damping_effect">Эффект затухания дров</label></li>
					<li> <input type="checkbox" id="3d_effect"><label for="3d_effect">Эффект живого огня / 3d</label></li>
					<li> <input type="checkbox" id="box"><label for="box">Наличие ящиков / полок</label></li>
					<li> <input type="checkbox" id="pdy"><label for="pdy">Пульт дистанционного управления</label></li>
				</ul>
		</div>
	</form>