<?php
/**
 * Auth Routes configuration
 *
 */
use Cake\Routing\Router;

Router::scope('/sp/admin', ['prefix' => 'sp'], function($routes) {
  //Authentication
  $routes->connect('/login', ['controller' => 'Auth', 'action' => 'login'])->setMethods(['GET', 'POST']);
  $routes->connect('/logout', ['controller' => 'Auth', 'action' => 'logout'])->setMethods(['GET']); 
  $routes->connect('/remind-password', ['controller' => 'Auth', 'action' => 'remindPassword'])->setMethods(['GET']);
  $routes->connect('/update-password/:token', ['controller' => 'Auth', 'action' => 'updatePassword'])->setMethods(['GET'])->setPatterns(['token' => '\w+\='])->setPass(['token']);
});

Router::scope('/pc/admin', ['prefix' => 'pc'], function($routes) {
  //Authentication
  $routes->connect('/login', ['controller' => 'Auth', 'action' => 'login'])->setMethods(['GET', 'POST']);
  $routes->connect('/logout', ['controller' => 'Auth', 'action' => 'logout'])->setMethods(['GET']); 
  $routes->connect('/remind-password', ['controller' => 'Auth', 'action' => 'remindPassword'])->setMethods(['GET']);
  $routes->connect('/update-password', ['controller' => 'Auth', 'action' => 'updatePassword'])->setMethods(['GET']);
  $routes->connect('/update-password/:token', ['controller' => 'Auth', 'action' => 'updatePassword'])->setMethods(['GET'])->setPatterns(['token' => '\w+\='])->setPass(['token']);

});