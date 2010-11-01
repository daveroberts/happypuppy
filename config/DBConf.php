<?

namespace HappyPuppy;
class DBConf
{
	static function GetRootDB()
	{
		$hostname   = 'localhost';
		$dbname     = 'budget';
		$dbusername = 'budget';
		$dbpassword = 'budget';
		$db = null;
		global $db;
		$db = new \PDO("mysql:host=$hostname;dbname=$dbname", $dbusername, $dbpassword);
	}
	static function BudgetDBInit()
	{
		$hostname   = 'localhost';
		$dbname     = 'budget';
		$dbusername = 'budget';
		$dbpassword = 'budget';
		$db = null;
		global $db;
		$db = new \PDO("mysql:host=$hostname;dbname=$dbname", $dbusername, $dbpassword);
	}
	static function LolDBInit()
	{
		$hostname   = 'localhost';
		$dbname     = 'lol';
		$dbusername = 'lol';
		$dbpassword = 'lolpass';
		$db = null;
		global $db;
		$db = new \PDO("mysql:host=$hostname;dbname=$dbname", $dbusername, $dbpassword);
	}
	static function SampleDBInit()
	{
	}
}
?>