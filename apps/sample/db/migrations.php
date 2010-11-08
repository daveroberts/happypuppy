<?php

namespace sample;
class sampleMigrations
{
	static function From0To1()
	{
		\HappyPuppy\DBMigration::CreateUserAndDB("sample", "mysamplepass", "sample");
	}
	static function From1To0()
	{
		\HappyPuppy\DBMigration::DropUserAndDB("sample", "sample");
	}
	static function From1To2()
	{
		\HappyPuppy\DBMigration::CreateTable("sample", "people", array("name"=>"string", "age"=>"int"));
	}
	static function From2To1()
	{
		\HappyPuppy\DBMigration::DropTable("sample", "people");
	}
	static function From2To3()
	{
		\HappyPuppy\DBMigration::CreateTable("sample", "games", array("name"=>"string"));
		\HappyPuppy\DB::AppExec("sample", "INSERT INTO games (name) VALUES('LoL');");
		\HappyPuppy\DB::AppExec("sample", "INSERT INTO games (name) VALUES('HoN');");
		\HappyPuppy\DB::AppExec("sample", "INSERT INTO games (name) VALUES('B:AA');");
	}
	static function From3To2()
	{
		\HappyPuppy\DBMigration::DropTable("sample", "games");
	}
	static function From3To4()
	{
		\HappyPuppy\DBMigration::CreateTable("sample", "platforms", array("name"=>"string"));
		\HappyPuppy\DBMigration::AddColumn("sample", "games", "platform_id", "int");
		\HappyPuppy\DB::AppExec("sample", "INSERT INTO platforms (name) VALUES('PC');");
		\HappyPuppy\DB::AppExec("sample", "INSERT INTO platforms (name) VALUES('PS3');");
		\HappyPuppy\DB::AppExec("sample", "UPDATE games SET platform_id=1 WHERE id=1");
		\HappyPuppy\DB::AppExec("sample", "UPDATE games SET platform_id=1 WHERE id=2");
		\HappyPuppy\DB::AppExec("sample", "UPDATE games SET platform_id=2 WHERE id=3");
	}
	static function From4To3()
	{
		\HappyPuppy\DBMigration::DropTable("sample", "platform");
		\HappyPuppy\DBMigration::DropColumn("sample", "games", "platform_id");
	}
}

?>