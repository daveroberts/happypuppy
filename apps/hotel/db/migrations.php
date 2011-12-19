<?php

namespace hotel;
class Migrations
{
	static function CreateUserAndDB()
	{
		return array(
			'username'=>'hotel',
			'password'=>'3ujsHsqpgf2QtPvxvkLBTkgw2YnHmaBHftjGyfEjEdmDVaGH',
			'dbname'=>'hotel');
	}
	static function From1To2()
	{
		\HappyPuppy\DBMigration::CreateTable("hotel",
			"hotel", array(
				"name"=>"string"));
		\HappyPuppy\DBMigration::CreateTable("hotel",
			"room", array(
				"hotel_id"=>"int",
				"number"=>"int",
				"code"=>"string",
				"type_id"=>"int",
				"available"=>"bool",
			));
		\HappyPuppy\DBMigration::CreateTable("hotel",
			"type", array(
				"name"=>"string",
				"price"=>"int"
			));
		\HappyPuppy\DBMigration::CreateTable("hotel",
			"account", array(
			"username"=>"string",
			"password"=>"string"));
	}
	static function From2To1()
	{
		\HappyPuppy\DBMigration::DropTable("hotel", "hotel");
		\HappyPuppy\DBMigration::DropTable("hotel", "room");
		\HappyPuppy\DBMigration::DropTable("hotel", "type");
		\HappyPuppy\DBMigration::DropTable("hotel", "account");
	}
}

?>
