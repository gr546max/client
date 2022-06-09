<?php
return [
    'id' => 'crmapp',
    'basePath' => dirname(__DIR__),
    'homeUrl' => '/',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
        'request' => [
            'baseUrl' => '',
            'cookieValidationKey' => 'JDSAssdafda23ur9',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
        ],
        'view' => [
            'theme' => [
                'class' => yii\base\Theme::className(),
                'basePath' => '@app/themes/snowy'
            ],
            'renderers' => [
                'md' => [
                    'class' => 'app\utilities\MarkdownRenderer'
                ]
            ],
        ],
        'user' => [
            'identityClass' => 'app\models\user\UserRecord'
        ],
        'response' => [
            'formatters' => [
                'yaml'=>[
                    'class'=>'app\utilities\YamlResponseFormatter'
                ]
            ]
],
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ],
        'firstlevel' => [
            'class' => 'app\utilities\FirstModule',
            'modules' => [
                'secondlevel' => [
                    'class' => 'app\utilities\SecondModule',
                ]
            ]
        ]
    ],
    'extensions' => require(__DIR__.'/../vendor/yiisoft/extensions.php'),
];