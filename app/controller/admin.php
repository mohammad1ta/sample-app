<?php
/**
 * Admin class
 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
 * @since 2019-04-05 13:05:45
 */
class admin extends MainController {

	/**
	 * Show task list for admin
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function task() {

		// Check user login
		if ( !is_array( self::$user_data ) )
			self::redirect( URL . 'admin/login' );

		self::setTitle( 'Admin Panel' );

		// Load task model
		$task_model = Loader::Model( 'task' );

		$task_list = $task_model->getTaskList( 'id', 0, 100 );

		$task_data = [];

		foreach ( $task_list as $row )
			$task_data[] = [
				"id" 						=> $row[ 'id' ],
				"username" 			=> $row[ 'username' ],
				"email" 				=> $row[ 'email' ],
				"status" 				=> $row[ 'status' ],
				"description" 	=> substr( $row[ 'description' ], 0, 30 ),
				"date" 					=> date( "j F Y", strtotime( $row[ 'date' ] ) ),
			];

		// Assign template variables
		self::$smarty->assign( "task_list", $task_data );

		return self::$smarty->fetch( "admin/task_list.tpl" );

	}

	/**
	 * Show task by ID
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function task_show() {

		$id = self::param( 0 );

		self::setTitle( 'Show' );

		// Load task model
		$task_model = Loader::Model( 'task' );

		// If form submitted
		if ( self::post( 'submit' ) ) {

			$status 			= self::post( 'status' );
			$description 	= self::post( 'description' );

			// Update task data
			$task_model->editTask( $id, $status, $description );

			self::redirect( URL . 'admin/task' );

		}

		$task_data = $task_model->getTaskData( $id );

		$task_data[ 'description_edit' ] = $task_data[ 'description' ];
		$task_data[ 'description' ] = nl2br( $task_data[ 'description' ] );

		// Assign template variables
		self::$smarty->assign( 'task', $task_data );

		return self::$smarty->fetch( "admin/task_show.tpl" );

	}

	/**
	 * Admin login page
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function login() {

		$message = $message_result = "";

		// If form submitted
		if ( self::post( 'send' ) ) {

			$message = self::$user->doLogin();

			$message_result = ( $message ? "<span class='error-msg'>" . $message . "</span>" : "" );

		}

		self::$smarty->assign( "message", $message_result );

		return self::$smarty->fetch( "home/login.tpl" );

	}

	/**
	 * Admin Logout
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function logout() {

		self::$user->doLogout();

	}

}

?>
