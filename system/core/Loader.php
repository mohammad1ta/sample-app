<?php

/**
* Load main files of project
* @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
* @since 2019-04-05 07:41:58
*/
class Loader {

	/**
	* Load models by name
	* @param $name string
	* @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	* @since 2019-04-05 07:50:03
	*/
	public static function Model( $name ) {

		$class_name = $name . "Model";

		require_once 'app/model/' . $name . '.php';

		return new $class_name;

	}

}

?>
