<?php include 'header.php' ?>
	
<?php include 'slider.php' ?>

<!-- Карточка товара   --> 
 
<div class="card">
<!-- Фото товара  -->  
	<img src="images/Dacota WT c Fobos Lux BL.png" class="card-img-top" alt="">

	<div class="text-center">
<!-- Название категории товара -->
      	<h4><?php if($_GET['id']==$card['id'])
        echo $card['cname'];?>
        </h4>	
<!-- Название товара --> 
		<div class="name-text">
			<h4><?php if($_GET['id']==$card['id'])
            echo $card['name'];?>
			</h4>
		</div>
<!-- Цена --> 			        
		<h4 class="black-text">	<del><?php if($_GET['id']==$card['id']) echo $card['priсe'];?> руб.</del></h4>
<!-- Цена со скидкой-->			        
		<h4 class="red-text"><?php if($_GET['id']==$card['id']) echo $card['priсe_discount'];?> руб.
		</h4>
	</div>
<!-- Кнопка Купить-->				
	<div class="btn-cards">
		<a href="">КУПИТЬ
		</a>
	</div>
</div>



<?php include 'footer.php' ?>	