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
	* @param 	$contexts Array [Array containing the dispatcher context and route context]
	* @category File
	* @access 	public
	* @return 	Object Crane\Router\Route
	*/
	public function createRoute(String $requestMethod, String $url, $resource, Array $contexts);

	/**
	* Returns the route's request method.
	*
	* @access 	public
	* @return 	void
	*/
	public function getRequestMethod();

	/**
	* Returns the route's url.
	*
	* @access 	public
	* @return 	void
	*/
	public function getUrl();

	/**
	* Returns the route's resource.
	*
	* @access 	public
	* @return 	void
	*/
	public function getResource();

}