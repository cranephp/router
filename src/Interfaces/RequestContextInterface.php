<?php
/**
* @package 	Crane.Router.Interfaces.RequestContextInterface
* @author 	Peter Taiwo <taiwop3@gmail.com>
*/

namespace Crane\Router\Interfaces;

interface RequestContextInterface
{

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