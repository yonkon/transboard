<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'TransBoard',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
    'application.modules.user.models.*',
    'application.modules.user.components.*',
    'application.modules.rights.*',
    'application.modules.rights.components.*',
	),

	'defaultController'=>'site',

	// application components
	'components'=>array(
/*		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),*/
    'user'=>array(
      'class'=>'RWebUser',
      // enable cookie-based authentication
      'allowAutoLogin'=>true,
      'loginUrl'=>array('/user/login'),
    ),
    'authManager'=>array(
      'class'=>'RDbAuthManager',
      'connectionID'=>'db',
      'defaultRoles'=>array('Authenticated', 'Guest'),
    ),

    /*		'db'=>array(
          'connectionString' => 'sqlite:protected/data/blog.db',
          'tablePrefix' => 'tbl_',
        ),
    */
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=transboard',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '103103103',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
      'showScriptName'=>false,
			'rules'=>array(
        'contact'=>'site/contact',
        'login'=>'site/login',
        'logout'=>'site/logout',
        '<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
//				'<controller:\w+>'=>'<controller>/index',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),
  'modules' => array(
    'gii'=>array(
      'class'=>'system.gii.GiiModule',
      'password'=>'admin',
      // 'ipFilters'=>array(…список IP…),
      // 'newFileMode'=>0666,
      // 'newDirMode'=>0777,
    ),
    'user'=>array(
      'tableUsers' => 'tbl_users',
      'tableProfiles' => 'tbl_profiles',
      'tableProfileFields' => 'tbl_profiles_fields',
    ),
    'rights'=>array(
      'install'=>false,
    ),
  ),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);
