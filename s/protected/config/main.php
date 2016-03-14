<?php

return array(
    'viewPath' => APP_DIR . "/views/",
    'basePath' => APP_DIR . '/protected/', //protected根目录
    'name' => 'bjjinao', //应用名
    'runtimePath' =>  APP_DIR . "/runtime/",  //运行时目录，主要用于模板的编译
    'timeZone' => 'Asia/Chongqing',
    // application-level parameters that can be accessed using Yii::app()->params['paramName']
    'params' => require_once dirname ( __FILE__ ) . "/params.php", 
    //预先import的命名空间
    'import' => array(
        'application.lib.services.*',
        'application.lib.classes.*',
        'application.lib.yii.*',
        'application.lib.Smarty.*',
    ),
    //模块配置，各部分的默认值为：module=default,controller=index,action=index
    'modules' => array(
        'default', //这是默认加载的模块
        'admin', //admin模块
    ),
    //组建配置
    'components' => array(
        //启用默认的用户系统
        'user' => array(
            'allowAutoLogin' => true,
        ),
        'request' => array(
            'enableCookieValidation' => true,
        ),
        //数据库配置
        'db' => array(
            'connectionString' => 'mysql:host=172.16.22.251;dbname=test;port=3306',
            'schemaCachingDuration' => 3600,
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '123',
            'charset' => 'utf8',
        ),
        //模板渲染组件，这里统一采用smarty引擎
        'viewRenderer' => array(
            'class' => 'JinaoSmartyView',
            'fileExtension' => '.tpl', //模板后缀名
            //这里为Smarty支持的属性
            'config' => array(
                'left_delimiter' => "<{",
                'right_delimiter' => "}>",
                'template_dir' => APP_DIR . '/views/',
            )
        ),
        //URLRewrite组件，根据需要进行配置
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '' => 'default/default/index',
                'api/<action:\w+>' => 'api/api/<action>',
                'admin/<action:\w+>' => 'admin/admin/<action>',
                '<action:\w+>' => 'default/default/<action>',
                '<controller:\w+>/<action:\w+>' => 'default/<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
            ),
        ),
        //统一的错误处理action
		'errorHandler'=>array(
        	    	'errorAction'=>'default/default/error',
        	),
        'c' => array(
            'class' => 'JinaoConfig',
            'newsServerConf' => array(
                'arrServiceList' => array(
//					array('ip' => '10.1.0.131', 'port' => '9102'),  //测试地址
                    array('ip' => '10.1.0.94', 'port' => '9003'), //线上地址
                    array('ip' => '10.1.0.95', 'port' => '9003'), //线上地址
                ),
            ),
            'siteMonitorServerConf' => array(
                'arrServiceList' => array(
                    array('ip' => '10.1.0.131', 'port' => '9344'), //线上地址
                ),
            ),
            'newsServerConf2' => array(
                'arrServiceList' => array(
					//array('ip' => '10.1.1.191', 'port' => '9002'), // 测试地址
					array('ip' => '10.1.0.98', 'port' => '9002'), // 线上地址
					array('ip' => '10.1.1.95', 'port' => '9002'), // 线上地址
                ),
            ),
            'newsByChannelServerConf' => array(
                'arrServiceList' => array(
                    array('ip' => '10.1.0.124', 'port' => '9070'),
                ),
            ),
            'newsContentServerConf' => array(
                'arrServiceList' => array(
                    array('ip' => '10.1.3.74', 'port' => '24000'),
                    array('ip' => '10.1.0.217', 'port' => '24000'),
                    array('ip' => '10.1.0.218', 'port' => '24000'),
                ),
            ),
            'luceneConf' => array(
                'arrServiceList' => array(
                    array('ip' => '10.1.4.13', 'port' => '8000'),  //新版测试环境
//                    array('ip' => '10.100.92.11', 'port' => '8000'),   
                ),
            ),
             'clThrift' => array(
                'arrServiceList' => array(
                    array('ip' => '10.1.0.215', 'port' => '8089'),
                ),
            ),
             'weiboEventAlalysisThrift' => array(
                'arrServiceList' => array(
                    array('ip' => '10.1.0.215', 'port' => '9083'),
                ),
            ),
        ),
    ),
    'preload' => array('log'), //预先加载log组建
);
