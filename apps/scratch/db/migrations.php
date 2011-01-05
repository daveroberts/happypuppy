<?php

namespace scratch;
class Migrations
{
	static function From0To1()
	{
		\HappyPuppy\DBMigration::CreateUserAndDB("scratch", "0knHBKQ62Y4iS9xQKHPCw9z0rBg58bNMQOni0liP", "scratch");
	}
	static function From1To0()
	{
		\HappyPuppy\DBMigration::DropUserAndDB("scratch", "scratch");
	}
	static function From1To2()
	{
		\HappyPuppy\DBMigration::CreateTable("scratch", "people", array("name"=>"string"));
	}
	static function From2To1()
	{
		\HappyPuppy\DBMigration::DropTable("scratch", "people");
	}
}

?>