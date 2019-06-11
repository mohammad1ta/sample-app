<?php

/**
* Template Engine
* @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
* @since 2019-04-05 09:24:49
*/
class Template extends MainController {

	/**
	 * Initial template path
	 * @param $name string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public static function init() {

		self::$smarty->setTemplateDir( 'app/view' );
		self::$smarty->setCompileDir( 'app/view/_compile' );

		self::_assignGlobalVars();

	}

	/**
	 * Set content of current page
	 * @param $content string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public static function setContent( $content ) {

		self::$smarty->assign( 'content', $content );

		$result = self::$smarty->fetch( "content.tpl" );

		self::$smarty->clearAllAssign();

		return $result;

	}

	/**
	 * Set main template parameters
	 * @param $content string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public static function setTemplate( $content ) {

		$content = self::setContent( $content );

		self::_assignGlobalVars();

		self::$smarty->assign( 'title', self::$title );
		self::$smarty->assign( 'class_name', self::$class_name );
		self::$smarty->assign( 'controller', self::$class_name );

		self::$smarty->assign( 'main_content', $content );

		// if was admin and not login, dont render main.tpl
		if ( self::$class_name == "admin" && !is_array( self::$user_data ) )
			self::$smarty->display( "main_clear.tpl" );
		else
			self::$smarty->display( "main.tpl" );

	}

	/**
	 * Template global vars
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	private static function _assignGlobalVars() {

		self::$smarty->assign( 'URL', URL );
		self::$smarty->assign( 'IMG_PATH', IMG_PATH );
		self::$smarty->assign( 'CSS_PATH', CSS_PATH );
		self::$smarty->assign( 'JS_PATH', JS_PATH );

	}

}

?>
