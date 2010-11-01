<?php

	$_ENV["config"] = array();
	$_ENV["config"]["apps"] = array("budget", "happypuppytools", "sample", "lol");
	$_ENV["config"]["default_app"] = "sample";
	$_ENV["config"]["debug_mode"] = true;
	$_ENV["config"]["static_error_page"] = "happypuppy/error/defaultError.php";
	$_ENV["config"]["route_not_found_page"] = "happypuppy/error/default404.php";
	$_ENV["config"]["route_not_found_page_debug"] = "happypuppy/error/default404debug.php";
	$_ENV["config"]["render_engine"] = 'php';
	$_ENV["config"]["plural_db_tables"] = 0;
?>
