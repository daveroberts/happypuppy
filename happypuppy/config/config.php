<?php

	$_ENV["config"] = array();
	$_ENV["config"]["apps"] = array("blog", "wiki", "happypuppytools", "budget", "cool");
	$_ENV["config"]["default_app"] = "blog";
	$_ENV["config"]["debug_mode"] = true;
	$_ENV["config"]["static_error_page"] = "error/error.php";
	$_ENV["config"]["route_not_found_page"] = "error/404.php";
	$_ENV["config"]["route_not_found_page_debug"] = "error/404debug.php";
	$_ENV["config"]["render_engine"] = 'php';
	$_ENV["config"]["plural_db_tables"] = 0;
?>
