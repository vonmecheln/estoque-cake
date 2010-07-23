<?php
/* Group Fixture generated on: 2010-06-14 18:06:54 : 1276551114 */
class GroupFixture extends CakeTestFixture {
	var $name = 'Group';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'admin',
			'created' => '2010-06-12 14:07:46',
			'modified' => '2010-06-12 14:07:46'
		),
		array(
			'id' => 2,
			'name' => 'gerente',
			'created' => '2010-06-12 14:07:55',
			'modified' => '2010-06-12 14:07:46'
		),
		array(
			'id' => 3,
			'name' => 'funcionario',
			'created' => '2010-06-12 14:08:01',
			'modified' => '2010-06-12 14:07:46'
		),
	);
}
?>