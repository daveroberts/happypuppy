<?php

namespace hptools;
/**  
 * !DefaultAction ListApps
 * */
class DatabaseController extends \HappyPuppy\Controller
{
	function ListApps()
	{
		$this->apps = $_ENV["config"]["apps"];
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
			$this->redirectTo("/Database/migrate/".$app);
		}
		$version = $_POST["version"];
		$message = "";
		$success = \HappyPuppy\DBMigrationExec::MigrateDB($app, $version, $message);
		setflash("Database migrated to version ".$version." ".$message);
		$this->redirectTo("/Database/migrate/".$app);
	}
}

?>