<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/../../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/test.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
/*
 * несколько городов в фильтре
 * города влияют на рекламу
 * страны пока не нужно
 * сообщения как на дипломах
 * валюты с отметкой примерно и сервиса конвертации
 * редактирование фото
 * раздел фильтра слов в описании
 */
