<?php

class TaskModel extends MainController {

	/**
	 * Get list of the tasks
	 * @param $sort string
	 * @param $offset int
	 * @param $per_page int
	 * @param $order string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function getTaskList( $sort, $offset, $per_page, $order ) {

		return self::$db->super_query( "
			SELECT
				*
			FROM
				`tasks`
			ORDER BY
				`{$sort}` {$order}
			LIMIT
				{$offset}, {$per_page}
		", true );

	}

	/**
	 * Get count of tasks
	 * @param $type string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function getCountAllTask( $type ) {

		if ( $type ) {

			$where = " WHERE `status` = '{$type}' ";

		}

		$result = self::$db->super_query( "
			SELECT
				COUNT(*) AS `count`
			FROM
				`tasks`
			{$where}
		" );

		return $result[ 'count' ];

	}

	/**
	 * Get task data
	 * @param $id int
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function getTaskData( $id = 0 ) {

		return self::$db->super_query( "
			SELECT
				*
			FROM
				`tasks`
			WHERE
				`id` = '{$id}'
		" );

	}

	/**
	 * Create new task
	 * @param $username string
	 * @param $email string
	 * @param $description string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function addNewTask( $username, $email, $description ) {

		$query = self::$db->query( "
			INSERT INTO
				`tasks`
				( `username`, `email`, `description`, `date` )
			VALUES
				( '{$username}', '{$email}', '{$description}', NOW() )
		" );

		return self::$db->insert_id();

	}

	/**
	 * Edit task
	 * @param $id int
	 * @param $email string
	 * @param $description string
	 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
	 */
	public function editTask( $id, $status, $description ) {

		self::$db->super_query( "
			UPDATE
				`tasks`
			SET
				`status` = '{$status}',
				`description` = '{$description}'
			WHERE
				`id` = '{$id}'
		" );

	}

}
