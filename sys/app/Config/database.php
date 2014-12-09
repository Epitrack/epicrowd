<?php
class DATABASE_CONFIG {

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'dddmg_org',
		'encoding' => 'utf8'
	);
	public $production = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'mysql.epitrack.com.br',
		'login' => 'epitracksite',
		'password' => '3p1@tr4ck123!$',
		'database' => 'dddmg_org',
		'encoding' => 'utf8'
	);
}
