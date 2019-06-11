<?php

/**
 * Home class
 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
 * @since 2019-04-05 11:41:37
 */
class home extends MainController {

	/**
	 * Dashboard page to show stats of task
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function index() {

		self::setTitle( 'Dashboard' );

		// Load task model
		$task_model = Loader::Model( 'task' );

		// Get task stats
		$all = $task_model->getCountAllTask();
		$todo = $task_model->getCountAllTask( 'todo' );
		$doing = $task_model->getCountAllTask( 'doing' );
		$done = $task_model->getCountAllTask( 'done' );

		// Template variables
		self::$smarty->assign( 'all', $all );
		self::$smarty->assign( 'doing', $doing );
		self::$smarty->assign( 'todo', $todo );
		self::$smarty->assign( 'done', $done );

		return self::$smarty->fetch( "home/home.tpl" );

	}

}

?>
