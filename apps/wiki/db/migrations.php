<?php

namespace wiki;
class Migrations
{
	static function From0To1()
	{
		\HappyPuppy\DBMigration::CreateUserAndDB("wiki", "J9Zungb3qVUh7zP5PN8WQCgatR9pBqgWJNwUG4qZKTkKnm3u", "wiki");
	}
	static function From1To0()
	{
		\HappyPuppy\DBMigration::DropUserAndDB("wiki", "wiki");
	}
	static function From1To2()
	{
		\HappyPuppy\DBMigration::CreateTable("wiki", "article", array("name"=>"string", "slug"=>"string", "body"=>"text"));
		\HappyPuppy\DBMigration::CreateTable("wiki", "article_links", array("from_article_id"=>"int", "to_article_id"=>"int"));
		\HappyPuppy\DBMigration::CreateTable("wiki", "user", array("name"=>"string", "password"=>"string"));
	}
	static function From2To1()
	{
		\HappyPuppy\DBMigration::DropTable("wiki", "article");
		\HappyPuppy\DBMigration::DropTable("wiki", "article_links");
		\HappyPuppy\DBMigration::DropTable("wiki", "user");
	}
	static function From2To3()
	{
		\HappyPuppy\DBMigration::CreateTable("wiki", "account", array("username"=>"string", "password"=>"string"));
	}
	static function From3To2()
	{
		\HappyPuppy\DBMigration::DropTable("wiki", "account");
	}
}

?>
