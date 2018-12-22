<!-- Карточка товара   --> 
 	<div>
	    <a href="?model=card&id=<?php echo $item['id']; ?>">

		    <div class="card">
<!-- Фото товара  -->  
		        <img src="images/Dacota WT c Fobos Lux BL.png" class="card-img-top" alt="">

				<div class="text-center">
<!-- Название категории товара -->
      			  <h4><?php echo $item['cname']; ?></h4>	

<!-- Название товара --> 
			        <!-- <a href="?model=product&id=<?php echo $item['id']; ?>"  -->
			        <div class="name-text">
			        <h4><?php echo $item['name']; ?></h4>
			        <!-- </a> -->
			        </div>


<?php
	if($item['priсe']!==NULL)
	{
		echo "<h4 class=\"black-text\"><del>{$item['priсe']} руб.</del></h4>";
		echo "<h4 class=\"red-text\"> {$item['priсe_discount']} руб.</h4>";
	}
	// else
	// {
	// 	echo "<h4 class=\"red-text\"> {$item['priсe_discount']} руб.</h4>";
	// }
	
 ?>	        
					
				</div>

<!-- Кнопка Купить-->				
				<div class="btn-cards">
					<a href="">КУПИТЬ
					</a>
			    </div>
			 </div>

	    </a>
	</div>

