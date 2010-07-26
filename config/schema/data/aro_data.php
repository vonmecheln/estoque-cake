<?php
/* Aro Fixture generated on: 2010-06-14 18:06:54 : 1276551114 */
class AroData {
	public $name = 'Aro';
	public $table = 'aros';

	public $records = array(
		array(
			'id' => 1,
			'parent_id' => NULL,
			'model' => 'Group',
			'foreign_key' => 1,
			'alias' => NULL,
			'lft' => 1,
			'rght' => 4
		),
		array(
			'id' => 2,
			'parent_id' => NULL,
			'model' => 'Group',
			'foreign_key' => 2,
			'alias' => NULL,
			'lft' => 5,
			'rght' => 8
		),
		array(
			'id' => 3,
			'parent_id' => NULL,
			'model' => 'Group',
			'foreign_key' => 3,
			'alias' => NULL,
			'lft' => 9,
			'rght' => 12
		),
		array(
			'id' => 4,
			'parent_id' => 1,
			'model' => 'User',
			'foreign_key' => 1,
			'alias' => NULL,
			'lft' => 2,
			'rght' => 3
		),
		array(
			'id' => 5,
			'parent_id' => 2,
			'model' => 'User',
			'foreign_key' => 2,
			'alias' => NULL,
			'lft' => 6,
			'rght' => 7
		),
		array(
			'id' => 6,
			'parent_id' => 3,
			'model' => 'User',
			'foreign_key' => 3,
			'alias' => NULL,
			'lft' => 10,
			'rght' => 11
		),
	);
}
?>