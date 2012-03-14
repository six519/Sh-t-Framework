<?php
/*
 * Main PHP file
 */
//PHP Settings
//Report all errors
error_reporting(E_ALL);

//Shit Framework constants

//Shit Framework main directory
define("SF_MAIN_DIR","sf/");
//Shit Framework config directory
define("SF_CONFIG_DIR", SF_MAIN_DIR . "config/");
//Shit Framework core directory
define("SF_CORE_DIR", SF_MAIN_DIR. "core/");
//Shit Framework response directory
define("SF_RESPONSE_DIR", SF_CORE_DIR. "response/");
//Get script name
define("SF_SCRIPT_NAME",$_SERVER['SCRIPT_NAME']);
//Get request uri
define("SF_REQUEST_URI",$_SERVER['REQUEST_URI']);
//Get index file
define("SF_INDEX",basename(__FILE__));
//Get application directory
define("SF_APP_DIR", SF_MAIN_DIR . "app/");
//Get controller directory
define("SF_CONTROLLERS_DIR", SF_APP_DIR . "controllers/");
//Get views directory
define("SF_VIEWS_DIR", SF_APP_DIR . "views/");
//Get default controller
define("SF_DEFAULT_CONTROLLER", "DefaultController");

//Load main file
include_once(SF_MAIN_DIR . "sf.php");
?>