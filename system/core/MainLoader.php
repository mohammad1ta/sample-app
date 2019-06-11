<?php

/**
* Load main files of project
* @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
* @since 2019-04-05 07:21:13
*/
class MainLoader {

	private $folders = array(

		"system/helper",
		"system/core/const",
		"system/config",
		"system/core",
		"system"

	);

	public function __construct() {

		// Load template engine
		require_once( 'system/libs/smarty/Smarty.class.php' );

		// Read one by one of files and include in page
		foreach ( $this->folders as $folder )
			foreach ( glob( $folder . '/*.php' ) as $filename )
				require_once $filename;

		$MainController = new MainController();
		$MainController->run();

	}

}

?>
