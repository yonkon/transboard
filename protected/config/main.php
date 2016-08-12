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
      'itemTable'=>'authitem',
      'itemChildTable'=>'authitemchild',
      'assignmentTable'=>'authassignment',
      'rightsTable'=>'rights',
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
        '' => 'site/index',
        'contact'=>'site/contact',
        'login'=>'user/login',
        'logout'=>'user/logout',
        'profile'=>'user/profile',
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
      # send activation email
      'sendActivationMail' => true,

      # allow access for non-activated users
      'loginNotActiv' => false,

      # activate user on registration (only sendActivationMail = false)
      'activeAfterRegister' => false,

      # automatically login from registration
      'autoLogin' => true,

      # registration path
      'registrationUrl' => array('/user/registration'),

      # recovery password path
      'recoveryUrl' => array('/user/recovery'),

      # login form path
      'loginUrl' => array('/user/login'),

      # page after login
      'returnUrl' => array('/user/profile'),

      # page after logout
      'returnLogoutUrl' => array('/user/login'),
    ),
    'rights'=>array(
      'superuserName'=>'admin', // Name of the role with super user privileges.
      'authenticatedName'=>'Authenticated',  // Name of the authenticated user role.
      'userIdColumn'=>'id', // Name of the user id column in the database.
      'userNameColumn'=>'username',  // Name of the user name column in the database.
      'enableBizRule'=>true,  // Whether to enable authorization item business rules.
      'enableBizRuleData'=>true,   // Whether to enable data for business rules.
      'displayDescription'=>true,  // Whether to use item description instead of name.
      'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages.
      'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages.

      'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested.
      'layout'=>'rights.views.layouts.main',  // Layout to use for displaying Rights.
      'appLayout'=>'application.views.layouts.main', // Application layout.
      'cssFile'=>'rights.css', // Style sheet file to use for Rights.
      'install'=>false,  // Whether to enable installer.
      'debug'=>true,
      ),
  ),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);
