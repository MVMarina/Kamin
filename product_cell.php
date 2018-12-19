<!-- Карточка товара   --> 
 	<div class="card-1">
	    <a href="?model=card&id=<?php echo $item['id']; ?>">

		    <div class="card">
<!-- Фото товара  -->  
		        <img src="images/Dacota WT c Fobos Lux BL.png" class="card-img-top" alt="">

				<div class="text-center">
<!-- Название категории товара -->
      			  <!-- <h4><?php echo $item['cname']; ?></h4> -->	

<!-- Название товара --> 
			        <!-- <a href="?model=product&id=<?php echo $item['id']; ?>"  -->
			        <div class="name-text">
			        <h4><?php echo $item['name']; ?></h4>
			        <!-- </a> -->
			        </div>

<!-- Цена --> 			        
			        <h4 class="black-text">	<del><?php echo $item['price']; ?> руб.</del></h4>

<!-- Цена со скидкой-->			        
					<h4 class="red-text"><?php echo $item['priсe_discount']; ?> руб.</h4>
				</div>

<!-- Кнопка Купить-->				
				<div class="btn-cards">
					<p>КУПИТЬ</p>
			    </div>
			 </div>

	    </a>
	</div>