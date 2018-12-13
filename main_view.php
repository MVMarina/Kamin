<?php include 'header.php';?>





<?php include 'slider.php';?>

<?php include 'filter.php';?>


<div class="section">
<!--  ======================== Карточка товара =================--> 
    
<?php include 'product_column.php';?>


<div class="col-lg-3">

<!--Карточка-->
          <a href=""></a>
              <div class="card">

<?php 

if($results['products'])
            foreach ($results['products'] as $item) {
              include 'product_column.php'; }
      
 ?>
<!--Фото - Название - Цена -->                 
            
      </div>  
   
  </div>



<!--  ======================== Карточка товара ================--> 

</div>

<?php include 'footer.php';?>