<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Configure;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\InflectedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(InflectedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Regex pattern for language parameter
    $langPattern = join(
        '|',
        array_keys(Configure::read('UI.languages'))
    );

    $routes->connect(
        '/:lang',
        ['controller' => 'Pages', 'action' => 'index']
    )
    ->setPatterns(['lang' => $langPattern])
    ->setPersist(['lang']);

    $routes->connect(
        '/',
        ['controller' => 'Pages', 'action' => 'index']
    );

    $routes->connect(
        '/:lang/:action',
        ['controller' => 'Pages']
    )
    ->setPatterns(['lang' => $langPattern])
    ->setPersist(['lang']);

    $routes->connect(
        '/:action',
        ['controller' => 'Pages']
    );

    $routes->connect('/:lang/:controller/:action/*')
    ->setPatterns(['lang' => $langPattern])
    ->setPersist(['lang']);

    $routes->connect('/:controller/:action/*');
});
