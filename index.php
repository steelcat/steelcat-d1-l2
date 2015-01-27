<?php
/**
 * File: index.php
 * Date: 20.01.2015
 * Time: 21:07
 */
require_once('blocks/header-sidebar.php');
require_once('lib/Macaw.php');
use \NoahBuscher\Macaw\Macaw;
Macaw::get('/', function() {
	get_header('/');
	get_sidebar('/');
	require_once('pages/main.php');
	require_once('blocks/footer.php');
});
Macaw::get('/(:any)', function($slug) {
	$path = 'pages/'.$slug.'.php';
	get_header($slug);
	get_sidebar($slug);
	if (file_exists($path)) {
		require_once($path);
	}
	require_once('blocks/footer.php');
});
Macaw::dispatch();