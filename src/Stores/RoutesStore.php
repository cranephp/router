<?php
/**
* @package 	Crane.Router.Stores.RoutesStore
* @author 	Peter Taiwo <taiwop3@gmail.com>
*/

namespace Crane\Router\Stores;

use Crane\Router\Route;
use Crane\Router\Attributes;
use Crane\Router\Instantiator;

Class RoutesStore extends Instantiator
{

	/**
	* @var 		$routes
	* @access 	protected
	*/
	protected static $routes = [];

	/**
	* Attachs a new route.
	*
	* @param 	$key String [The request method that the route is attached to].
	* @param 	$route Crane\Router\Route
	* @access 	public
	* @return 	void
	*/
	public function store(String $key, Route $route)
	{
		RoutesStore::$routes[$key][$route->getUrl()] = $route;
	}

	/**
	* Returns stored routes.
	*
	* @access 	public
	* @return 	Array
	*/
	public function getStoredRoutes()
	{
		return RoutesStore::$routes;
	}

}