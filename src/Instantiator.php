<?php
/**
* @package 	Crane.Router.Instantiator
* @author 	Peter Taiwo <taiwop3@gmail.com>
*/

namespace Crane\Router;

Class Instantiator
{

	/**
	* Returns instance of class.
	*
	* @access 	public
	* @static
	* @return 	Object
	*/
	public static function getInstance()
	{
		$self = get_called_class();
		return new $self();
	}

}