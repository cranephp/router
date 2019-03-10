<?php
/**
* @package 	Crane.Router.Interfaces.RouterFactoryInterface
* @author 	Peter Taiwo <taiwop3@gmail.com>
*/

namespace Crane\Router\Interfaces;

interface RouterFactoryInterface
{

	/**
	* Processes a get request route.
	*
	* @param 	$url String
	* @param 	$resource Mixed
	* @access 	public
	* @return 	void
	*/
	public function get(String $url, $resource);

	/**
	* Processes a post request route.
	*
	* @param 	$url String
	* @param 	$resource Mixed
	* @access 	public
	* @return 	void
	*/
	public function post(String $url, $resource);

	/**
	* Processes a put request route.
	*
	* @param 	$url String
	* @param 	$resource Mixed
	* @access 	public
	* @return 	void
	*/
	public function put(String $url, $resource);

	/**
	* Processes a delete requst route.
	*
	* @param 	$url String
	* @param 	$resource Mixed
	* @access 	public
	* @return 	void
	*/
	public function delete(String $url, $resource);

	/**
	* Group's routes based on the provided criteria.
	*
	* @access 	public
	* @return 	void
	*/
	public function groupBy();

}