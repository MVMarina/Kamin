<?php include 'header.php' ?>
	
     
<?php include 'slider.php' ?>


<div class="content container">

<!--=================== Фильтры	================= -->
	<div class="filtr">
	<?php include 'filter.php' ?>	
	</div>

<!--================= Карточки товаров =========-->
	<div class="section">
		<?php  

		if($results['products'])
			
			foreach ($results['products'] as $item)
				// if(!empty($item['priсe']))
		{
			include 'product_cell_stock.php';
		}
		else
		{
            echo "<p> <h2>В данной категории пока нет товаров...</h2></p>";
		}
		

		?>
		
	</div>

</div>

	 
	 
<?php include 'footer.php' ?>	
		  
			


