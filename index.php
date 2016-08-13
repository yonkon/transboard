<?php

// change the following paths if necessary
define('YII_DEBUG', true);
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);

function __($message, $category = 'general', $params = array(), $source = null, $language = null) {
  return Yii::t($category, $message, $params, $source, $language);
}

Yii::createWebApplication($config)->run();
