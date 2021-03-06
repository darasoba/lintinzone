<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'LintinZone',
	// application components
	'components'=>array(
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		/*'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sample-yii_db',
			'emulatePrepare' => true,
			'username' => 'tung',
			'password' => 'tungduy',
			'charset' => 'utf8',
			'tablePrefix' => 'syii_'
		),*/
		'cassandradb' => array(
			'class' => 'ECassandraConnection',
			'keyspace' => 'lintinzo_db',
			'credentials' => array(),
			'servers' => array('127.0.0.1:9160'),
			'tablePrefix' => 'lz_'
		),
		'cassandradb_2' => array(
			'class' => 'ECassandraConnection',
			'keyspace' => 'lintinzo_db',
			'credentials' => array(),
			'servers' => array('127.0.0.1:9160'),
			'tablePrefix' => 'lz_',
			'maxRetries' => 1
		),
	),
);