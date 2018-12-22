<!-- Карточка товара   --> 
 	<div class="card-1">
 		<a href="?model=card&id=<?php echo $item['id']; ?>">

<?php
	if(!empty($item['priсe']))
{
	    echo "<div class=\"card\">
		        <img src=\"images/Dacota WT c Fobos Lux BL.png\" class=\"card-img-top\" alt=\"\">
				<div class=\"text-center\">
	             	
					<div class=\"name-text\"><h4>{$item['name']}</h4></div>
					<h4 class=\"black-text\"><del>{$item['priсe']} руб.</del></h4>
					<h4 class=\"red-text\"> {$item['priсe_discount']} руб.</h4>
				</div>
				
				<div class=\"btn-cards\">
					<p>КУПИТЬ</p>
				</div>
			</div>";
	}
	
	
 ?>	        
					
				

	    </a>
	</div>

