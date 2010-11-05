<?php

namespace happypuppytools;
class DatabaseController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "ListApps"; }
	function ListApps()
	{
		$this->apps = $_ENV["config"]["all_apps"];
	}
	function migrate($app)
	{
		$this->DBVersion = \HappyPuppy\DBMigrationExec::Version($app);
		$this->MaxVersion = \HappyPuppy\DBMigrationExec::HighestVersionAvailable($app);
		$this->app = $app;
	}
	function migrateTo($app)
	{
		if ($_SERVER['REQUEST_METHOD'] != "POST"){
			setflash("Must call this page by clicking the button");
			$this->redirect_to("/Database/migrate/".$app);
		}
		$version = $_POST["version"];
		\HappyPuppy\DBMigrationExec::MigrateDB($app, $version);
		setflash("Database migrated to version ".$version);
		$this->redirect_to("/Database/migrate/".$app);
	}
}

?>