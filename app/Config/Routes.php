<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;
// use Modules\main\Controllers\mainController;



/**
 * @var RouteCollection $routes
 */

 
// $routes->get('/', 'Home::index');
$routes->get('/',[Home::class,'userList'],['as'=>'home']);
$routes->get('add-user',[Home::class,'addUser'],['as'=>'add-user']);
$routes->post('/test',[Home::class,'storeTestForm'],['as'=>'store_test']);
// $routes->get('login',[mainController::class,'index']);//direct access


/**
 * --------------------------------------------------------------------
 *  Modules Routes Files
 * --------------------------------------------------------------------
 */
if (file_exists(ROOTPATH.'Modules')) {
	$modulesPath = ROOTPATH.'Modules/';
	$modules = scandir($modulesPath);

	foreach ($modules as $module) {
		if ($module === '.' || $module === '..') continue;
		if (is_dir($modulesPath) . '/' . $module) {
			$routesPath = $modulesPath . $module . '/Config/Routes.php';
			if (file_exists($routesPath)) {
				require($routesPath);
			} else {
				continue;
			}
		}
	}
}