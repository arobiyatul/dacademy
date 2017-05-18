<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
         'authManager' => [
            'class' => 'yii\rbac\DbManager', 
        ],
        /*
        'user'=> [
        'identityClass' => 'dektrium\user\models\User',
        'enableAutoLogin' => 'true',] */
    ],
   'modules' => [
    'user' => [
        'class' => 'dektrium\user\Module',
        //'identityClass'=>'mdm\admin\models\User'
        'admins'=> ['admin'],
        'enableUnconfirmedLogin'=> true,
        'confirmWithin'=> 21600,
        'cost'=>12,
    ],
        'admin'=>[
            'class'=>'mdm\admin\Module'
        ]
],
];
