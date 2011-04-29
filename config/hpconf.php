<?php
namespace HappyPuppy;
	$_ENV["config"] = array();
	
	// Only apps listed here will be processed by Happy Puppy
	// Note that hptools will only work when the environment is set to Dev
	$_ENV["config"]["apps"] = array("hptools", "doc", "sample", "games", "scratch");
	
	// routes normally look like http://hostname/appname/controller/action
	// setting this removes the appname http://hostname/appname/controller/action
	// Note you can further set a default controller for each application,
	// and you can set a default action for each controller
	$_ENV["config"]["default_app"] = "doc";
	
	// different environments
	class Environment
	{
		const DEV = 0;
		const TEST = 1;
		const PROD = 2;
	}
	// The current environment for this application
	// When in Dev, Happy Puppy doesn't use the cache for routes
	// happypuppytools only runs in dev
	// You can use this setting to specify different databases for your applications based on the current runtime environement
	$_ENV["config"]["env"] = Environment::DEV;
	
	// filepath to static error page if something goes wrong
	$_ENV["config"]["static_error_page"] = "happypuppy/error/defaultError.php";
	
	// filepath to static error page when a route is not found (404)
	// When the environment is set to dev, happy puppy doesn't show this page and instead shows a debug page
	$_ENV["config"]["route_not_found_page"] = "happypuppy/error/default404.php";
	
	// The render engine happy puppy uses after the controller php code has been run to display the view
	// currently, php is the only engine supported.  haml is being tested
	// if you want a render engine supported, please email me at dave.a.roberts@gmail.com
	// if you want to change this for a SINGLE application, I would suggest
	// instead changing the value in the myappApplication.php file in the __init method, as this
	// will change the setting for ONLY that application
	// changing this value here can potentially break other happy puppy apps!
	$_ENV["config"]["render_engine"] = 'php'; // warning, read above!!!
	
	// specifies whether happy puppy will expect db tables to have plural or singular names
	// if you want to change this for a SINGLE application, I would suggest
	// instead changing the value in the myappApplication.php file in the __init method, as this
	// will change the setting for ONLY that application
	// changing this value here can potentially break other happy puppy apps!
	$_ENV["config"]["plural_db_tables"] = true; // warning, read above!!!
?>
