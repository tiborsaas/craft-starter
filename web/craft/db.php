<?php

/**
 * Database Configuration
 */
return array(

	'*' => array(
		'server' => CRAFT_DB_HOST,
		'database' => CRAFT_DB_NAME,
		'user' => CRAFT_DB_USER,
		'password' => CRAFT_DB_PASS,
		'tablePrefix' => 'craft',
	),

	/**
	 * Helper for "Schematic package" to be able to connect to db
	 * You can also create custom constants for this setting
	 */
	'console' => array(
		'server' => CRAFT_DB_HOST,
		'database' => CRAFT_DB_NAME,
		'user' => CRAFT_DB_USER,
		'password' => CRAFT_DB_PASS,
		'tablePrefix' => 'craft',
	),
);
