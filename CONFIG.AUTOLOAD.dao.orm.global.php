<?php 
/**
* this should be in 
* [APPLICATION_ROOT]/CONFIG/AUTOLOAD/auth.login.local.php
* or
* [APPLICATION_ROOT]/CONFIG/AUTOLOAD/auth.global.php
* 
*/

return array(
    'AUTH' => array(
		'PAGE_FILTER_ALLOW_PUBLIC' => array(
			'FILTER_TYPE' => 'WHITELIST',
			'ALLOW' => array(
				'login.php',
				'logout.php',
				'signup.php',
			),
			'DENY' => array(),
		),
		/*
		'PAGE_FILTER_DENY_PUBLIC' => array(
			'FILTER_TYPE' => 'BLACKLIST',
			'DENY' => array(
				'profile.php',
				'history.php',
				'personal.php',
			),
		),
		*/
    ),
);

?>
