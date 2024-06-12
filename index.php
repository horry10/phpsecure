<?php
print_r(PHP_SESSION_NONE);
session_start();
//print_r(session_status());

$minPHPVersion='8.1';
if(phpversion() < $minPHPVersion)
{
    die("You need a minimum of PHP version $minPHPVersion to run this app");
}
define('DS',DIRECTORY_SEPARATOR);
define('ROOTPATH',__DIR__.DS);

require 'config.php';
require 'app'.DS.'core'.DS.'init.php';

DEBUG ? ini_set('display_errors',1) : ini_set('display_errors',0);
$ACTION = [];
$FILTERS = [];
$APP['URL'] = split_url($_GET['url'] ?? 'home');
$APP['permission'] = [];
$USER_DATA = [];
dd($_SERVER['REQUEST_URI']);
$PLUGINS = get_plugin_folders();
if(!load_plugins($PLUGINS)){
    die("NO PLUGIN were found! please put at lease one plugin in the folder");
};
$APP['permissions'] = do_filter('user_permissions');
$app = new \Core\App();
$app->index();
