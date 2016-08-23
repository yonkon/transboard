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

/**
 * @function alt_empty Returns value or alternative if value's empty
 * @param mixed $val
 * @param mixed $default
 * @return mixed
 */
function alt_empty($val, $default = null) {
  return empty($val) ? $default : $val;
}
/**
 * @function if_empty Returns $empty if test value's empty, otherwise returns $val
 * @param mixed $test
 * @param mixed $val
 * @param mixed $empty
 * @return mixed
 */
function if_empty($test, $empty = null, $val = null) {
  if(empty($val)) {
    $val = $test;
  }
  return empty($test) ? $empty : $val;
}

Yii::createWebApplication($config)->run();
