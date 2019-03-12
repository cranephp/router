<?php
/**
* @package 	Crane.Router.Route
* @author 	Peter Taiwo <taiwop3@gmail.com>
*/

namespace Crane\Router;

use Crane\Router\Builder;
use Crane\Router\Stores\RoutesStore;
use Crane\Router\Interfaces\RouteContextInterface;

class Route implements RouteContextInterface
{

	/**
	* @var 		$requestMethod
	* @access 	private
	*/
	private 	$requestMethod;

	/**
	* {@inheritDoc}
	*/
	public function createRoute(String $requestMethod, String $url, $resource, Array $contexts)
	{
		$this->requestMethod = $requestMethod;
		$this->url = $url;
		$this->resource = $resource;
		RoutesStore::getInstance()->store($requestMethod, $this);
		return (new Builder($this, $contexts['requestContext']))->build();
	}

	/**
	* {@inheritDoc}
	*/
	public function getRequestMethod()
	{
		return $this->requestMethod;
	}

	/**
	* {@inheritDoc}
	*/
	public function getUrl()
	{
		return $this->url;
	}

	/**
	* {@inheritDoc}
	*/
	public function getResource()
	{
		return $this->resource;
	}

}