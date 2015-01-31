<?php
$config = [
	'environment' => 'prod',

	'default_format' => 'php',

	'enable_hooks' => true,

	'encryption_key' => '243A0C282C381E282E20BA9E0FEC582X',

	'maintenance' => false,

	'hash' => [
    	'cost' => 13,
    	'salt_method' => 'default_hash_salt_method'
    ],

	'memcache' => [
    	'host' => '127.0.0.1',
    	'port' => 11211
    ],

	'auth' => [
    	'class' => 'Compte',
    	'login' => 'mail',
    	'password' => 'password'
    ],

	'cancan' => [
    	'enabled' => true,
    	'login_page' => '/account/login'
    ],

	'email_webmaster' => 'anaeria@gamestories.net',

	'display_name' => 'MeliFramework'
];