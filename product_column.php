<!-- Grid row -->
<!--  Карточка товара ===================-->       
  <div class="col-lg-3">

<!-- ====== Карточка товара  -->
    <a href=""></a>
    <div class="card">

<!-- Фото товара  -->                
        <img src="images/Dacota WT c Fobos Lux BL.png" class="card-img-top" alt="">
                
      <div class="text-center">
<!-- Название категории товара -->
        <h4><?php echo $item['cname']; ?></h4>
<!-- Название товара -->            
        <a href="?model=product&id=<?php echo $item['id']; ?>" class="name-text">
        <h4><?php echo $item['name']; ?></h4>
          </a>
<!-- Цена --> 
        <h4 class="black-text"> <del><?php echo $item['price']; ?> руб.</del></h4>
<!-- Цена со скидкой-->
        <h4 class="red-text"><del><?php echo $item['prise_discount']; ?> руб.</h4>
      </div>

<!-- Кнопка Купить-->
      <div class="btn-cards">
        <a href="">КУПИТЬ
        </a>
      </div>

    </div>
  </div>  
   
<!--  ======================== Карточка товара ===================-->

















<!--================ Section: Products ================== v.3-->
      <!-- <section class="text-center mb-4"> -->

<!--Grid row-->
        <!-- <div class="row wow fadeIn">
      <?php 
      if($results['goods'])
            foreach ($results['goods'] as $item) {
              include 'grid_column.php';
      }
      else
//В эхо можно добавить инклуд с версткой страницы ошибок
echo "<p>В данной категории пока нет товаров...</p>";
      ?>
        </div> 