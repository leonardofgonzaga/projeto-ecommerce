<?php

use \Hcode\Page;

$app->get('/', function() {
	
	//Chama o _construct e adiciona o header
	$page = new Page();

	$page->setTpl("index");

});

?>