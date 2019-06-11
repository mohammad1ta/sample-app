<?php

class User extends MainController {

	private static $username;

	private static $password;

	public static function checkLogin() {

		if ( ( isset( $_SESSION['id'] ) && $_SESSION['password'] ) || ( isset( $_COOKIE['id'] ) && isset( $_COOKIE[ 'password' ] ) ) ) {

			$id = isset( $_SESSION[ 'id' ] ) ? $_SESSION[ 'id' ] : $_COOKIE[ 'id' ];
			$password = isset( $_SESSION[ 'password' ] ) ? $_SESSION[ 'password' ] : $_COOKIE[ 'password' ];

			$user_data = self::$db->super_query( "SELECT * FROM `users` WHERE `id` = '{$id}' AND `password` = '{$password}' " );

			if ( $user_data[ 'id' ] && $user_data[ 'password' ] ) {

				self::$user_data = $user_data;

				return true;

			} else
				return false;

		} else
			return false;

	}

	public static function doLogin() {

		$ip = $_SERVER[ 'REMOTE_ADDR' ];
		$time = time();

		self::$username = self::post( 'username' );
		self::$password = md5( self::post( 'password' ) );

		if ( self::$username == "" || self::$password == "" )
			return "Please enter username or password";

		$user_data = self::$db->super_query( "SELECT * FROM `users` WHERE `username` = '" . self::$username . "' AND `password` = '" . self::$password . "' " );

		if ( $user_data[ 'id' ] ) {

			self::$user_data = $user_data;

			$_SESSION[ 'id' ] = $user_data[ 'id' ];
			$_SESSION[ 'password' ] = self :: $password;

			setcookie( 'user_id', $member_id[ 'id' ], time() + 3600 * 24 * 10, '/' );
			setcookie( 'password', self::$password, time() + 3600 * 24 * 10, '/' );

			header( 'Location: ' . URL . 'admin/task' );

		} else {

			return "Wrong username or password.";

		}

	}

	public function doLogout() {

		setcookie( 'user_id', "", time() - 3600, '/' );
		setcookie( 'password', "asdasd", time() - 3600, '/' );

		header( 'Location: ' . URL );

	}

}

?>
