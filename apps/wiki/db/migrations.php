<?php

namespace wiki;
class Migrations
{
	static function CreateUserAndDB()
	{
		return array(
			'username'=>'wiki',
			'password'=>'J9Zungb3qVUh7zP5PN8WQCgatR9pBqgWJNwUG4qZKTkKnm3u',
			'dbname'=>'wiki');
	}
	static function From1To2()
	{
		\HappyPuppy\DBMigration::CreateTable("wiki", "article", array("name"=>"string", "slug"=>"string", "body"=>"text"));
		\HappyPuppy\DBMigration::CreateTable("wiki", "article_links", array("from_article_id"=>"int", "to_article_id"=>"int"));
		\HappyPuppy\DBMigration::CreateTable("wiki", "user", array("name"=>"string", "password"=>"string"));
		\HappyPuppy\DBMigration::CreateTable("wiki", "account", array("username"=>"string", "password"=>"string"));
		\HappyPuppy\DB::AppExec("wiki", "INSERT INTO account (username, password) VALUES('dave', '1e56cd765cc9192c914aa39f21e2f91d593bffbe');");
		\HappyPuppy\DBMigration::CreateTable("wiki", "blogpost", array("name"=>"string", "body"=>"text", 'written_on'=>"datetime"));
	}
	static function From2To1()
	{
		\HappyPuppy\DBMigration::DropTable("wiki", "article");
		\HappyPuppy\DBMigration::DropTable("wiki", "article_links");
		\HappyPuppy\DBMigration::DropTable("wiki", "user");
		\HappyPuppy\DBMigration::DropTable("wiki", "account");
		\HappyPuppy\DBMigration::DropTable("wiki", "blogpost");
	}
}

?>
