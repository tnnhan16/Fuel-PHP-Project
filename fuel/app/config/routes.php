<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

return array(
	/**
	 * -------------------------------------------------------------------------
	 *  Default route
	 * -------------------------------------------------------------------------
	 *
	 */

	// '_root_' => 'home/index',

	/**
	 * -------------------------------------------------------------------------
	 *  Page not found
	 * -------------------------------------------------------------------------
	 *
	 */

	'_404_' => 'welcome/404',

	/**
	 * -------------------------------------------------------------------------
	 *  Example for Presenter
	 * -------------------------------------------------------------------------
	 *
	 *  A route for showing page using Presenter
	 *
	 */

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'admin' => array('home/index', 'name' => 'admin.home'),
	'login' => array('login/login', 'name' => 'admin.login'),
	'logout' => array('login/logout', 'name' => 'admin.logout'),
	'admin/book' => array('book/index/page$1', 'name' => 'admin.book'),
	'admin/book/add' => array('book/add', 'name' => 'admin.book.add'),
	'admin/book/edit/(:num)' => array('book/edit/$1', 'name' => 'admin.book.edit'),
	'admin/book/delete/(:num)' => array('book/delete/$1', 'name' => 'admin.book.delete'),
	'register' => array('users/register', 'name' => 'admin.users.register'),
	'admin/user' => array('users/index/page$1', 'name' => 'admin.user'),
	'admin/user/add' => array('users/add', 'name' => 'admin.user.add'),
	'admin/user/edit/(:num)' => array('users/edit/$1', 'name' => 'admin.user.edit'),
	'admin/user/delete/(:num)' => array('users/delete/$1', 'name' => 'admin.user.delete'),
	'admin/export' => array('export/index/page$1', 'name' => 'admin.export'),
	'admin/upload' => array('uploadfile/index/page$1', 'name' => 'admin.upload'),
	'admin/upload/edit/(:num)' => array('uploadfile/edit/$1', 'name' => 'admin.upload.edit'),
	'admin/upload/delete/(:num)' => array('uploadfile/delete/$1', 'name' => 'admin.upload.delete'),
);
