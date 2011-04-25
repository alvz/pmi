<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'PMI[+]',
	'language'=>'id',
        'theme'=>'classic',
	// preloading 'log' component
	'preload'=>array('log'),
        

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.*',
                'ext.giix-components.*',
                'application.modules.user.models',
		'application.modules.user.components.*',
                'application.modules.rights.*',
		'application.modules.rights.components.*',
                'application.modules.rs.*',
		'application.modules.rs.components.*',
                'application.modules.pengadaan.*',
                'application.modules.pengadaan.components.*',
                'application.modules.apotik.*',
		'application.modules.apotik.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'root',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array(
                            'ext.giix-core', // giix generators
                        ),
		),

                'rights'=>array(
			'debug'=>true,
			'install'=>false,
			'enableBizRuleData'=>true,
		),
                'user',
                'rs',
                'apotik',
                'pengadaan',
		
	),

	// application components
	'components'=>array(
		'user'=>array(
                        'class'=>'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'loginUrl'=>'/pmi/user/login',

		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
			//'rules'=>array(
				//'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				//'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				//'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			//),
		),
/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
            'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=test',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'fuckme',
			'charset' => 'utf8',
			'tablePrefix' => 'blog_',
		),
		'authManager'=>array(
                        'class'=>'RDbAuthManager',
                        'connectionID'=>'db',
                        'itemTable'=>'blog_authitem',
			'itemChildTable'=>'blog_authitemchild',
			'assignmentTable'=>'blog_authassignment',
			'rightsTable'=>'blog_rights',
        ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
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
				),*/
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'juni.a.fajar@gmail.com',
	),
);