<?php

namespace hptools;
/**  
 * !DefaultAction ListApps
 * */
class DatabaseController extends \HappyPuppy\Controller
{
	function ListApps()
	{
		$this->apps = array();
		$handle = opendir($_ENV['docroot'].'/apps/');
		while (false !== ($file = readdir($handle))) {
			if (strcmp(substr($file, 0, 1), '.') == 0){ continue; }
			$this->apps[] = $file;
		}
	}
	function migrate($app)
	{
		$this->DBVersion = \HappyPuppy\DBMigrationExec::GetVersion(\HappyPuppy\DBConnection::GetDBName($app));
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
		if ($success)
		{
			setflash("Database migrated to version ".$version." ".$message);
		}
		else
		{
			setflash("Error migrating database\n".$message);
		}
		$this->redirectTo("/Database/migrate/".$app);
	}
}

?>
