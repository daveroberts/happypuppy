<?

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
}

?>