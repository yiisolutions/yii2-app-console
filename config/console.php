<?php

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
    'enableCoreCommands' => false,
    'controllerMap' => [
        'help' => 'yii\console\controllers\HelpController',
        // TODO: Uncomment this core commands if need
//        'cache' => 'yii\console\controllers\CacheController',
//        'fixture' => 'yii\console\controllers\FixtureController',
//        'message' => 'yii\console\controllers\MessageController',
//        'migrate' => 'yii\console\controllers\MigrateController',
    ],
];

return $config;
