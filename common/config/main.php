<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@apaoww/oci8' => 'path/to/your/extracted',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'AUTH_ITEM',
            'itemChildTable' => 'AUTH_ITEM_CHILD',
            'assignmentTable' => 'AUTH_ASSIGNMENT',
            'ruleTable' => 'AUTH_RULE',
        ],
    ],
];
