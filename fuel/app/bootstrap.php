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

// Bootstrap the framework - THIS LINE NEEDS TO BE FIRST!
/** PHPExcel root directory */

require COREPATH.'bootstrap.php';
// Add framework overload classes here
\Autoloader::add_classes(array(
	// Example: 'View' => APPPATH.'classes/myview.php',
	'Fuel\\Core\\MyBreadcrumb' => COREPATH . 'classes/mybreadcrumb.php',
	'Fuel\\Core\\MyValidation' => COREPATH.'classes/myvalidation.php',
	'Format' => APPPATH . 'classes/format.php',
	'PHPExcel' => APPPATH . 'classes/PHPExcel.php',
	'Tcpdf' => APPPATH . 'classes/Tcpdf.php',
));

// Register the autoloader
\Autoloader::register();

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 */
Fuel::$env = Arr::get($_SERVER, 'FUEL_ENV', Arr::get($_ENV, 'FUEL_ENV', getenv('FUEL_ENV') ?: Fuel::DEVELOPMENT));

// Initialize the framework with the config file.
\Fuel::init('config.php');
