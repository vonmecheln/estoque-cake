<?php
/**
 * Short description for file.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/users/login', array('controller' => 'users', 'action' => 'login'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
/**
 * Routes for component p28n
 */
	Router::connect('/lang/*', array(
		'controller' => 'p28n',
		'action' => 'change'
	));
	Router::connect('/eng?/*', array(
		'controller' => 'p28n',
		'action' => 'shuntRequest',
		'lang' => 'eng',
	));
	Router::connect('/pt[_-]br/*', array(
		'controller' => 'p28n',
		'action' => 'shuntRequest',
		'lang' => 'pt-br',
	));
/**
 * Routes for plugin Installer
 */
	if (!file_exists(APP.'config'.DS.'settings.yml')) {
		Router::connect('/', array('plugin' => 'install' ,'controller' => 'install'));
	}