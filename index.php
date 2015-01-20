<?php
/**
 * File: index.php
 * Date: 20.01.2015
 * Time: 21:07
 */
require_once('lib/Macaw.php');
use \NoahBuscher\Macaw\Macaw;
Macaw::get('/', function() {
	require_once('pages/main.php');
});
Macaw::get('/(:any)', function($slug) {
	require_once('pages/'.$slug.'.php');
});
Macaw::dispatch();