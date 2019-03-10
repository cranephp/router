<?php
/**
* @package 	Crane.Router.Interfaces.RouteContextInterface
* @author 	Peter Taiwo <taiwop3@gmail.com>
*/

namespace Crane\Router\Interfaces;

interface RouteContextInterface
{

	/**
	* Creates and registers a new route.
	*
	* @param 	$requestMethod String [The request method name to match E.g GET, POST e.t.c]
	* @param 	$url String [Url string to match]
	* @param 	$resource Mixed [The resource to return for the route. This can either be a string or a
	* 			callable function]
	* @category File
	* @access 	public
	* @return 	Object Crane\Router\Route
	*/
	public function createRoute(String $requestMethod, String $url, $resource);

}