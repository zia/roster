<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->extensions(['json']);
    $routes->connect('/', ['controller' => 'Rosters', 'action' => 'index', 'home']);
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/attendences', function($routes){
    $routes->connect('/',['controller' => 'attendences']);
});

Router::scope('/classes', function($routes){
    $routes->connect('/',['controller' => 'clss']);
});

Router::scope('/rooms', function($routes){
    $routes->connect('/',['controller' => 'rooms']);
});

Router::scope('/rosters', function($routes){
    $routes->connect('/',['controller' => 'rosters']);
});

Router::scope('/students', function($routes){
    $routes->connect('/',['controller' => 'students']);
});

Router::scope('/stuffs', function($routes){
    $routes->connect('/',['controller' => 'stuffs']);
});

Router::scope('/subjects', function($routes){
    $routes->connect('/',['controller' => 'subjects']);
});

Router::scope('/teachers', function($routes){
    $routes->connect('/',['controller' => 'teachers']);
});

Router::scope('/notices', function($routes){
    $routes->connect('/',['controller' => 'notices']);
});

Plugin::routes();
