<?php

/**
* Init parameters
* @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
* @since 2019-04-05 08:10:44
*/
class MainController {

	public static $id;
	public static $db;
	public static $user;
	public static $user_data;
	public static $params;
	public static $title;
	public static $class_name;
	public static $method_name;
	public static $smarty;
	public static $js_list = [];
	public static $css_list = [];
	public static $css_array;

	public $controller_path = 'app/controller/';
	public $modules_path = 'app/modules/';

	public function __construct() {

		self::$id = isset( $_REQUEST[ 'id' ] ) ? self::$db->safesql( intval( $_REQUEST[ 'id' ] ) ) : 0;

	}

	public function run() {

		self::$db = new db;
		self::$smarty = new Smarty();
		self::$user = new User;

		// Load template engine
		$template_class = new Template;
		$template_class->init();

		echo $template_class->setTemplate( self::_router() );

	}

	/**
	 * Set page title
	 * @param $title string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public static function setTitle( $title ) {

		self::$title = $title;

	}

	/**
	 * Get post of input
	 * @param $name string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public static function post( $name ) {

		return isset( $_POST[ $name ] ) ? self::$db->safesql( $_POST[ $name ] ) : null;

	}

	/**
	 * Get param of url by number
	 * @param $number int
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public static function param( $number ) {

		return isset( self::$params[ $number ] ) ? self::$params[ $number ] : false;

	}

	/**
	 * Redirect to page
	 * @param $url string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public static function redirect( $url ) {

		header( "Location: " . $url );
		exit;

	}

	/**
	 * Set 404 error
	 * @param $number int
	 * @param $custom_message string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function setError( $number, $custom_message ) {

		header( "HTTP/1.1 " . $number . " Not Found" );

		self::$smarty->assign( "message", $custom_message );
		self::$smarty->display( "errors/404.tpl" );

		exit;

	}

	/**
	 * Handling router page
	 * @param $name string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	private function _router() {

		$url_parameter = substr( $_SERVER[ 'REQUEST_URI' ], 1 );

		$url_array = explode( "/", $url_parameter );

		$class_name = explode( "-", $url_array[ 0 ] );
		$method_name = isset( $url_array[ 1 ] ) ? explode( "-", $url_array[ 1 ] ) : '';

		self::$class_name = ( $class_name[ 0 ] ? $class_name[ 0 ] : "home" );
		self::$method_name = $method_name = ( isset( $url_array[ 1 ] ) &&  $url_array[ 1 ] ? $method_name[ 0 ] : "index" );

		// Check user login
		self::$user->checkLogin();

		$file_path = $this->controller_path . self::$class_name . ".php";

		array_pop( $url_array );
		unset( $url_array[ 0 ], $url_array[ 1 ] );

		$url_list = array_values( $url_array );

		self::$params = $url_list;

		// Check file exist
		if ( !file_exists( $file_path ) )
			self::setError( 404, "File '<b>" . self::$class_name . "</b>' not exist." );
		else
			require_once( $file_path );

		// Check class exist
		if ( !class_exists( self::$class_name ) )
			self::setError( 404, "Class '<b>" . self::$class_name . "</b>' not exist." );
		else
			$load_class = new self::$class_name;

		// Check method exist
		if ( !method_exists( $load_class, $method_name ) )
			self::setError( 404, "Method '<b>" . self::$method_name . "</b>' not exist." );
		else
			$result = $load_class->$method_name();

		return $result;

	}

}

?>
