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
		foreach ($products as $item)
		{
				// if(!empty($item['cat_id']) && $item['cat_id'] = 7)
				if(isset($item['cat_id']) && $item['cat_id'] == 7) 
				{
				include 'product_cell.php';
				}
				elseif ($item['cat_id'] !== 7 && $item['cat_id'] < 7 && $item['cat_id'] > 7 ) 
				{
				echo "<p> <h2>В данной категории пока нет товаров...</h2></p>";
				}
		}


// Второй вариант

		foreach ($products as $item)
		{
				// if(!empty($item['cat_id']) && $item['cat_id'] = 7)
				if(isset($item['cat_id']) && $item['cat_id'] == 7) 
				{
				include 'product_cell.php';
				}
				elseif ($item['cat_id'] !== 7 && $item['cat_id'] < 7 && $item['cat_id'] > 7 ) 
				{
				echo "<p> <h2>В данной категории пока нет товаров...</h2></p>";
				}
		}

?>
		</div>
</div>

<?php include 'footer.php' ?>	

