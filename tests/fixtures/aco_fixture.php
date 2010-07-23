<?php
/* Aco Fixture generated on: 2010-06-14 18:06:54 : 1276551114 */
class AcoFixture extends CakeTestFixture {
	var $name = 'Aco';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'model' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'alias' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'parent_id' => NULL,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'controllers',
			'lft' => 1,
			'rght' => 110
		),
		array(
			'id' => 2,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'Pages',
			'lft' => 2,
			'rght' => 7
		),
		array(
			'id' => 3,
			'parent_id' => 2,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'display',
			'lft' => 3,
			'rght' => 4
		),
		array(
			'id' => 4,
			'parent_id' => 2,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 5,
			'rght' => 6
		),
		array(
			'id' => 5,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'ProductsSales',
			'lft' => 8,
			'rght' => 15
		),
		array(
			'id' => 6,
			'parent_id' => 5,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'adimn_add',
			'lft' => 9,
			'rght' => 10
		),
		array(
			'id' => 7,
			'parent_id' => 5,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 11,
			'rght' => 12
		),
		array(
			'id' => 8,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'Products',
			'lft' => 16,
			'rght' => 31
		),
		array(
			'id' => 9,
			'parent_id' => 8,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'index',
			'lft' => 17,
			'rght' => 18
		),
		array(
			'id' => 10,
			'parent_id' => 8,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'view',
			'lft' => 19,
			'rght' => 20
		),
		array(
			'id' => 11,
			'parent_id' => 8,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'add',
			'lft' => 21,
			'rght' => 22
		),
		array(
			'id' => 12,
			'parent_id' => 8,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'edit',
			'lft' => 23,
			'rght' => 24
		),
		array(
			'id' => 13,
			'parent_id' => 8,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'delete',
			'lft' => 25,
			'rght' => 26
		),
		array(
			'id' => 14,
			'parent_id' => 8,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 27,
			'rght' => 28
		),
		array(
			'id' => 15,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'Groups',
			'lft' => 32,
			'rght' => 45
		),
		array(
			'id' => 16,
			'parent_id' => 15,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'index',
			'lft' => 33,
			'rght' => 34
		),
		array(
			'id' => 17,
			'parent_id' => 15,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'view',
			'lft' => 35,
			'rght' => 36
		),
		array(
			'id' => 18,
			'parent_id' => 15,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'add',
			'lft' => 37,
			'rght' => 38
		),
		array(
			'id' => 19,
			'parent_id' => 15,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'edit',
			'lft' => 39,
			'rght' => 40
		),
		array(
			'id' => 20,
			'parent_id' => 15,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'delete',
			'lft' => 41,
			'rght' => 42
		),
		array(
			'id' => 21,
			'parent_id' => 15,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 43,
			'rght' => 44
		),
		array(
			'id' => 22,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'Sales',
			'lft' => 46,
			'rght' => 59
		),
		array(
			'id' => 23,
			'parent_id' => 22,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'index',
			'lft' => 47,
			'rght' => 48
		),
		array(
			'id' => 24,
			'parent_id' => 22,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'view',
			'lft' => 49,
			'rght' => 50
		),
		array(
			'id' => 25,
			'parent_id' => 22,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'add',
			'lft' => 51,
			'rght' => 52
		),
		array(
			'id' => 26,
			'parent_id' => 22,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'edit',
			'lft' => 53,
			'rght' => 54
		),
		array(
			'id' => 27,
			'parent_id' => 22,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'delete',
			'lft' => 55,
			'rght' => 56
		),
		array(
			'id' => 28,
			'parent_id' => 22,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 57,
			'rght' => 58
		),
		array(
			'id' => 29,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'Users',
			'lft' => 60,
			'rght' => 79
		),
		array(
			'id' => 30,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'index',
			'lft' => 61,
			'rght' => 62
		),
		array(
			'id' => 31,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'view',
			'lft' => 63,
			'rght' => 64
		),
		array(
			'id' => 32,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'add',
			'lft' => 65,
			'rght' => 66
		),
		array(
			'id' => 33,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'edit',
			'lft' => 67,
			'rght' => 68
		),
		array(
			'id' => 34,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'delete',
			'lft' => 69,
			'rght' => 70
		),
		array(
			'id' => 35,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'login',
			'lft' => 71,
			'rght' => 72
		),
		array(
			'id' => 36,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'logout',
			'lft' => 73,
			'rght' => 74
		),
		array(
			'id' => 37,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'initDB',
			'lft' => 75,
			'rght' => 76
		),
		array(
			'id' => 38,
			'parent_id' => 29,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 77,
			'rght' => 78
		),
		array(
			'id' => 39,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'Debug Kit',
			'lft' => 80,
			'rght' => 89
		),
		array(
			'id' => 40,
			'parent_id' => 39,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'ToolbarAccess',
			'lft' => 81,
			'rght' => 88
		),
		array(
			'id' => 41,
			'parent_id' => 40,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'history_state',
			'lft' => 82,
			'rght' => 83
		),
		array(
			'id' => 42,
			'parent_id' => 40,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'sql_explain',
			'lft' => 84,
			'rght' => 85
		),
		array(
			'id' => 43,
			'parent_id' => 40,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 86,
			'rght' => 87
		),
		array(
			'id' => 44,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'Localized',
			'lft' => 90,
			'rght' => 99
		),
		array(
			'id' => 45,
			'parent_id' => 44,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'ToolbarAccess',
			'lft' => 91,
			'rght' => 98
		),
		array(
			'id' => 46,
			'parent_id' => 45,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'history_state',
			'lft' => 92,
			'rght' => 93
		),
		array(
			'id' => 47,
			'parent_id' => 45,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'sql_explain',
			'lft' => 94,
			'rght' => 95
		),
		array(
			'id' => 48,
			'parent_id' => 45,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 96,
			'rght' => 97
		),
		array(
			'id' => 49,
			'parent_id' => 1,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'Migrations',
			'lft' => 100,
			'rght' => 109
		),
		array(
			'id' => 50,
			'parent_id' => 49,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'ToolbarAccess',
			'lft' => 101,
			'rght' => 108
		),
		array(
			'id' => 51,
			'parent_id' => 50,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'history_state',
			'lft' => 102,
			'rght' => 103
		),
		array(
			'id' => 52,
			'parent_id' => 50,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'sql_explain',
			'lft' => 104,
			'rght' => 105
		),
		array(
			'id' => 53,
			'parent_id' => 50,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'build_acl',
			'lft' => 106,
			'rght' => 107
		),
		array(
			'id' => 54,
			'parent_id' => 5,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'add',
			'lft' => 13,
			'rght' => 14
		),
		array(
			'id' => 55,
			'parent_id' => 8,
			'model' => NULL,
			'foreign_key' => NULL,
			'alias' => 'find',
			'lft' => 29,
			'rght' => 30
		),
	);
}
?>