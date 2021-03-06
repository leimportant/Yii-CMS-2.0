<?php
/**
 * Yii command line script file.
 *
 * This script is meant to be run on command line to execute
 * one of the pre-defined console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @version $Id: yiic.php 2799 2011-01-01 19:31:13Z qiang.xue $
 */

// fix for fcgi
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));

if (!isset($_SERVER['DOCUMENT_ROOT']) || !$_SERVER['DOCUMENT_ROOT'])
{
    $_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__).'/../') . DIRECTORY_SEPARATOR;
}

require $_SERVER['DOCUMENT_ROOT'] . 'protected/config/constants.php';

require(LIBRARIES_PATH . '/yii/yii.php');

require LIBRARIES_PATH . '/functions.php';
require LIBRARIES_PATH . '/debug.php';

$config = $_SERVER['DOCUMENT_ROOT'].'/protected/config/console.php';

if(isset($config))
{
	$app=Yii::createConsoleApplication($config);
	$app->commandRunner->addCommands(YII_PATH.'/cli/commands');
	$env=@getenv('YII_CONSOLE_COMMANDS');
	if(!empty($env))
		$app->commandRunner->addCommands($env);
}
else
	$app=Yii::createConsoleApplication(array('basePath'=>dirname(__FILE__).'/cli'));

$app->run();
