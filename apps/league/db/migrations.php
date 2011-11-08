<?php

namespace league;
class Migrations
{
	static function From0To1()
	{
		\HappyPuppy\DBMigration::CreateUserAndDB("league", "9r9DlKkTSusE0qKJah7d0SUUVxrkz7CkrQOFHdY5", "league");
	}
	static function From1To0()
	{
		\HappyPuppy\DBMigration::DropUserAndDB("league", "league");
	}
	static function From1To2()
	{
		\HappyPuppy\DBMigration::CreateTable("league", "surveys", array("name"=>"string", "active"=>"bool", "date"=>"date;1"));
		\HappyPuppy\DB::AppExec("league", "INSERT INTO surveys (name, active) VALUES('Champion Survey #1', 1);");
		
		\HappyPuppy\DBMigration::CreateTable("league", "people", array(
			"name"=>"string;1",
			"ipaddress"=>"string",
			"password"=>"string;0;0",
			"administrator"=>"bool"));
		\HappyPuppy\DB::AppExec("league", "INSERT INTO people (name, ipaddress, password, administrator) VALUES('Dave', '', '".md5("savage")."', 1);");
		
		\HappyPuppy\DBMigration::CreateTable("league", "champions", array(
			"name"=>"string",
			"order"=>"int;0;0",
			"survey_id"=>"int"));
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Akali', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Alistar', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Amumu', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Anivia', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Annie', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Ashe', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Blitzcrank', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Brand', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Caitlyn', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Cassiopeia', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Cho\\'Gath', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Corki', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Dr. Mundo', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Evelynn', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Ezreal', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Fiddlesticks', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Galio', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Gangplank', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Garen', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Gragas', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Heimerdinger', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Irelia', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Janna', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Jarvan IV', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Jax', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Karma', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Karthus', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Kassadin', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Katarina', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Kayle', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Kennen', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Kog\\'Maw', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('LeBlanc', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Lee Sin', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Lux', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Malphite', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Malzahar', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Maokai', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Master Yi', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Miss Fortune', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Mordekaiser', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Morgana', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Nasus', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Nidalee', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Nocturne', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Nunu', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Olaf', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Pantheon', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Poppy', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Rammus', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Renekton', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Ryze', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Shaco', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Shen', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Singed', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Sion', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Sivir', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Sona', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Soraka', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Swain', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Taric', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Teemo', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Tristana', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Trundle', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Tryndamere', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Twisted Fate', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Twitch', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Udyr', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Urgot', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Veigar', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Vladimir', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Warwick', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Xin Zhao', 1);");
		\HappyPuppy\DB::AppExec("league", "INSERT INTO champions (name, survey_id) VALUES ('Zilean', 1);");
		
		\HappyPuppy\DBMigration::CreateTable("league", "ratings", array(
			"champion_id"=>"int",
			"person_id"=>"int",
			"survey_id"=>"int",
			"score"=>"int"));
	}
	static function From2To1()
	{
		\HappyPuppy\DBMigration::DropTable("league", "surveys");
		\HappyPuppy\DBMigration::DropTable("league", "people");
		\HappyPuppy\DBMigration::DropTable("league", "champions");
		\HappyPuppy\DBMigration::DropTable("league", "ratings");
	}
}

?>