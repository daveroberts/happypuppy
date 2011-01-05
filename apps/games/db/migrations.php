<?php

namespace games;
class Migrations
{
	static function From0To1()
	{
		\HappyPuppy\DBMigration::CreateUserAndDB("games", "2JVewgc7zEvvrJcHTYyVZnvHMJjZp5PK", "games");
	}
	static function From1To0()
	{
		\HappyPuppy\DBMigration::DropUserAndDB("games", "games");
	}
	static function From1To2()
	{
		\HappyPuppy\DBMigration::CreateTable("games", "games", array("name"=>"string", "system_id"=>"int"));
	}
	static function From2To1()
	{
		\HappyPuppy\DBMigration::DropTable("games", "games");
	}
	static function From2To3()
	{
		\HappyPuppy\DBMigration::CreateTable("games", "systems", array("name"=>"string"));
	}
	static function From3To2()
	{
		\HappyPuppy\DBMigration::DropTable("games", "systems");
	}
	static function From3To4()
	{
		\HappyPuppy\DBMigration::AddColumn("games", "games", "order", "int");
	}
	static function From4To3()
	{
		\HappyPuppy\DBMigration::DropColumn("games", "games", "order");
	}
}

?>