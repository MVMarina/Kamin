<?php
//Подключение к БД
$mysqli = mysqli_connect("localhost", "root", "", "kamin");
// Пропущена обработка ошибок

mysqli_set_charset($mysqli,'utf8');

// ====== КАТЕГОРИИ =========
$res = mysqli_query($mysqli, "SELECT * FROM `categories`");

// Формирование результатов
while($row = mysqli_fetch_assoc($res))
	$categories[] = $row;




// =====ТОВАРЫ=====

// Запрос всех товаров
$SQLproducts = "SELECT
`products`.`id`,
`products`.`cat_id`,
`products`.`name`,
`products`.`images`,
`products`.`description`,
`products`.`price`,
`products`.`prise_discount`,
`categories`.`name` AS `cname`
FROM `products`, `categories`
WHERE `products`.`cat_id` = `categories`.`id`";

if(!empty($_GET['catid']))
{
	$catid = (int)$_GET['catid'];
    $SQLproducts.="AND `categories`.`id` = $catid";
}
$res = mysqli_query($mysqli, $SQLproducts);

// вытаскиваем в виде массива результат
while($row = mysqli_fetch_assoc($res))
	$products[] = $row;

$results = array(
	'title' => 'Категории' , 
	'categories'=>$categories,
	'products' =>$products

);
?>