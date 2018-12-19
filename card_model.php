<?php
if(!empty($_GET['id']))
	{
		$id = (int)$_GET['id'];

//Подключение к БД
$mysqli = mysqli_connect("localhost", "root", "", "kamin");
// Пропущена обработка ошибок

mysqli_set_charset($mysqli,'utf8');

// =====ТОВАРЫ=====

// Запрос всех товаров
$SQLproducts = "SELECT
`products`.`id`,
`products`.`cat_id`,
`products`.`name`,
`images`,`description`,
`priсe`,`priсe_discount`,
`manufacturer`,`diagonal`,
`width`,`height`,`depth`,
`fuel`,`material`,`color`,
`power`,`sound effect`,
`air reduction`,`brightness`,
`damping effect`,
`live fire effect_3d`,`box`,`pdy`,
`categories`.`name` AS `cname` 
FROM `products`, `categories`
WHERE `products`.`cat_id` = `categories`.`id`
AND `categories`.`id`= $id";

$res = mysqli_query($mysqli, $SQLproducts);

$card = mysqli_fetch_assoc($res);
}
	
$results = array(
	'title' => 'Главная' , 
	'card'=> $card
	
);
?>



