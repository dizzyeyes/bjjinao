<?php

define("APP_DIR", (dirname(__FILE__)));
define("WWW_DIR", dirname(dirname(APP_DIR)));
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once (APP_DIR . '/protected/lib/yii/framework/yii.php');
//run app
Yii::createWebApplication(APP_DIR . "/protected/config/main.php")->run();
