<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );
$router->get('list-examples', 'ExamplesController@index');
$router->get('add-example', 'ExamplesController@add');
$router->post('add-example', 'ExamplesController@save');

// Run it!
$router->run();