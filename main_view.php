﻿<?php include 'header.php' ?>
	
     
<?php include 'slider.php' ?>


<div class="content container">

<!--=================== Фильтры	================= -->
	<div class="filtr">
	<?php include 'filter.php' ?>	
	</div>

<!--================= Карточки товаров =========-->
	<div class="section">
		<?php  
		// var_dump($results);
		// if(isset($results['products']) && $results['products']['priсe'] !== NULL)
		foreach ($results['products'] as $item)
		{
			include 'product_cell.php';
		}
		
            echo "<p> <h2>В данной категории пока нет товаров...</h2></p>";
		?>
		
	</div>

</div>

	 
	 
<?php include 'footer.php' ?>	
		  
	


