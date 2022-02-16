<?php

use \Hcode\Page;
use \Hcode\Model\Product;

$app->get('/', function() {
	
	$products = Product::listAll();

	//Chama o _construct e adiciona o header
	$page = new Page();

	$page->setTpl("index", [
		'products'=>Product::checkList($products)
	]);

});

?>