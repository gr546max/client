<?php
return \yii\helpers\ArrayHelper::merge(
    (require __DIR__ . '/web.php'),
    [
        'components' => [
            'class' => '\yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=crm_test',
            'username' => 'root',
            'password' => 'root'
        ]
    ]
);