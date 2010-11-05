<?php
namespace HappyPuppy;
	$_ENV["config"] = array();
	$_ENV["config"]["prod_apps"] = array("sample");
	$_ENV["config"]["dev_apps"] = array("happypuppytools");
	$_ENV["config"]["all_apps"] = array_merge($_ENV["config"]["prod_apps"], $_ENV["config"]["dev_apps"]);
	$_ENV["config"]["default_app"] = "sample";
	class Environment
	{
		const DEV = 0;
		const TEST = 1;
		const PROD = 2;
	}
	$_ENV["config"]["env"] = Environment::DEV;
	$_ENV["config"]["static_error_page"] = "happypuppy/error/defaultError.php";
	$_ENV["config"]["route_not_found_page"] = "happypuppy/error/default404.php";
	$_ENV["config"]["route_not_found_page_dev"] = "happypuppy/error/default404dev.php";
	$_ENV["config"]["render_engine"] = 'php';
	$_ENV["config"]["plural_db_tables"] = 1;
?>
