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
			        <div class="name-text">
			        <h4><?php echo $item['name']; ?></h4>
			        </div>

				<?php
					if(!empty($item['priсe']))
				{
					    echo "<h4 class=\"black-text\"><del>{$item['priсe']} руб.</del></h4>
							  <h4 class=\"red-text\"> {$item['priсe_discount']} руб.</h4>";
					}
					else
					{
						echo "<h4 class=\"final\"> {$item['priсe_discount']} руб.</h4>";
					}
				?>	      

    			</div>
<!-- Кнопка Купить-->				
				<div class="btn-cards">
					<p>КУПИТЬ</p>
			    </div>
			 </div>
	    </a>
	</div>


	