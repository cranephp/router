<?php
/**
* @package 	Crane.Router.Builder
* @author 	Peter Taiwo <taiwop3@gmail.com>
*/

namespace Crane\Router;

use Crane\Router\Route;
use Crane\Router\Instantiator;

class Builder extends Instantiator
{

	/**
	* @var 		$route
	* @access 	protected
	*/
	protected 	$route;

	/**
	* Builder constructor.
	*
	* @param 	$route Crane\Router\Route
	* @access 	public
	* @return 	void
	*/
	public function __construct(Route $route)
	{
		$this->route = $route;
	}

	/**
	* Builds each route provided and stores them in the
	* routes storage.
	*
	* @param 	$route Crane\Router\Route
	* @access 	public
	* @return 	void
	*/
	public function build()
	{
		
	}

}