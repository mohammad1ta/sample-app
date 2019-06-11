<?php

/**
 * Task class
 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
 * @since 2019-04-05 11:57:04
 */
class task extends MainController {

	/**
	 * Number of tasks per page
	 * @param $per_page int
	 */
	private $per_page = 3;

	/**
	 * Create new task
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function add() {

		self::setTitle( 'Submit new task' );

		// If form posted
		if ( self::post( 'submit' ) ) {

			$username 		= self::post( 'username' );
			$email 				= self::post( 'email' );
			$description 	= self::post( 'description' );

			if ( !$username ) {
				$errorMsg = "Please enter username !";
			} elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
				$errorMsg = "Please enter valid email address !";
			} else {

				$task_model = Loader::Model( 'task' );

				$task_id = $task_model->addNewTask( $username, $email, $description );

				if ( $task_id ) {
					self::redirect( URL . 'task/lists' );
				}

			}

		}

		self::$smarty->assign( "error", $errorMsg );
		self::$smarty->assign( "username", $username );
		self::$smarty->assign( "email", $email );
		self::$smarty->assign( "description", $description );

		return self::$smarty->fetch( "task/add.tpl" );

	}

	/**
	 * Show list of the tasks
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function lists() {

		self::setTitle( 'Task List' );

		// Handling page sort
		if ( self::param( 2 ) == 'sort' )
			$sort = self::param( 3 );
		else
			$sort = "id";

		if ( self::param( 4 ) == 'order' )
			$order = self::param( 5 );
		else
			$order = "asc";

		// Handling pagination
		if ( self::param( 0 ) == 'page' )
			$current_page = self::param( 1 );
		else
			$current_page = 1;

		// Load task model
		$task_model = Loader::Model( 'task' );

		$count_tasks = $task_model->getCountAllTask();

		// Current page offset to load tasks
		$offset = ( $this->per_page * $current_page ) - $this->per_page;

		if ( $count_tasks > $this->per_page ) {

			$show_pagination = true;

			$page_num = ceil( $count_tasks / $this->per_page );

		}

		// Get list of the task from database
		$task_list = $task_model->getTaskList( $sort, $offset, $this->per_page, $order );

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
		self::$smarty->assign( "sort_type", $sort );
		self::$smarty->assign( "order", $order );
		self::$smarty->assign( "task_list", $task_data );
		self::$smarty->assign( "num_pages", $page_num );
		self::$smarty->assign( "show_pagination", $show_pagination );
		self::$smarty->assign( "current_page", $current_page );

		return self::$smarty->fetch( "task/list.tpl" );

	}

	/**
	 * Show task by ID
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function show() {

		$id = self::param( 0 );

		self::setTitle( 'Show' );

		// Load task model
		$task_model = Loader::Model( 'task' );

		$task_data = $task_model->getTaskData( $id );

		$task_data[ 'description' ] = nl2br( $task_data[ 'description' ] );

		// Assign template variables
		self::$smarty->assign( 'task', $task_data );

		return self::$smarty->fetch( "task/show.tpl" );

	}

}

?>
