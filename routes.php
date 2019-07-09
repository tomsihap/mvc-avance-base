<?php

// Create Router instance
$router = new Router();


$router->get('',                'PagesController@home' );
$router->get('examples',        'ExamplesController@list');
$router->get('examples/add',    'ExamplesController@add');
$router->post('examples/add',   'ExamplesController@save');

// Run it!
$router->run();