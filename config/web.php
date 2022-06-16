<?php
return [
    'id' => 'crmapp',
    'basePath' => dirname(__DIR__),
    'homeUrl' => '/',
    'bootstrap' => ['debug'],
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
        'mail' => [
            'class' => yii\swiftmailer\Mailer::className(),
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => 'noreply@crmapp.me'
            ],
            'transport' => [
                'class' => 'Swift_MailTransport',
            ],
        ],
        'assetManager' => [
            'bundles' => (require __DIR__ . '/assets_compressed.php')
        ],
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
        'api' => [
          'class' => 'app\api\ApiModule'
        ],
    ],
    'extensions' => require(__DIR__.'/../vendor/yiisoft/extensions.php'),
];