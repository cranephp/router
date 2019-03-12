<?php
/**
* @package 	Crane.Router.Factory
* @author 	Peter Taiwo <taiwop3@gmail.com>
*/

namespace Crane\Router;

use Crane\Router\Route;
use Crane\Router\Attributes;
use Crane\Router\Stores\RoutesStore;
use Crane\Router\DefaultRequestContext;
use Crane\Router\Interfaces\RouteContextInterface;
use Crane\Router\Interfaces\RouterFactoryInterface;
use Crane\Router\Interfaces\RequestContextInterface;
use Crane\Router\Interfaces\RouteDispatcherInterface;

class Factory implements RouterFactoryInterface
{

	/**
	* Router factory's configuration. 
	*
	* @var 		$config
	* @access 	protected
	*/
	protected 	$config = [];

	/**
	* Router factory constructor.
	*
	* @param 	$routeDispatcherContext Crane\Router\Interfaces\RouteDispatcherInterface
	* @param 	$routeContext Crane\Router\Interfaces\RouteContextInterface
	* @access 	public
	* @return 	void
	*/
	public function __construct(?RouteDispatcherInterface $routeDispatcherContext = null, ?RouteContextInterface $routeContext = null, ?RequestContextInterface $requestContext = null)
	{
		if (is_null($routeDispatcherContext)) {
			$routeContext = new Route();
		}

		if (is_null($routeDispatcherContext)) {
			$routeDispatcherContext = 1;
		}

		if (is_null($requestContext)) {
			$requestContext = new DefaultRequestContext();
		}

		$this->config['routeDispatcherContext'] = $routeDispatcherContext;
		$this->config['routeContext'] = $routeContext;
		$this->config['requestContext'] = $requestContext;
	}

	/**
	* {@inheritDoc}
	*/
	public function get(String $url, $resource)
	{
		return $this->config['routeContext']->createRoute(
			Attributes::ATTR_GET_METHOD,
			$url,
			$resource,
			$this->config
		);
	}

	/**
	* {@inheritDoc}
	*/
	public function post(String $url, $resource)
	{
		return $this->config['routeContext']->createRoute(
			Attributes::ATTR_POST_METHOD,
			$url,
			$resource,
			$this->config
		);
	}

	/**
	* {@inheritDoc}
	*/
	public function put(String $url, $resource)
	{
		return $this->config['routeContext']->createRoute(
			Attributes::ATTR_PUT_METHOD,
			$url,
			$resource,
			$this->config
		);
	}

	/**
	* {@inheritDoc}
	*/
	public function delete(String $url, $resource)
	{
		return $this->config['routeContext']->createRoute(
			Attributes::ATTR_DELETE_METHOD,
			$url,
			$resource,
			$this->config
		);
	}

	/**
	* {@inheritDoc}
	*/
	public function groupBy()
	{

	}

	/**
	* Returns registered routes.
	*
	* @access 	public
	* @return 	Array
	*/
	public function getRegisteredRoutes()
	{
		return RoutesStore::getStoredRoutes();
	}

}