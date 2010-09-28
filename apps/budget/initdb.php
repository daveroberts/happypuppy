<?

// A good place for database settings
/*$hostname   = 'mysqlproccess.db';
$dbname     = 'simplebudget';
$dbusername = 'simplebudget';
$dbpassword = 'dbDxxxNA';*/
$hostname   = 'localhost';
$dbname     = 'budget';
$dbusername = 'budget';
$dbpassword = 'budget';
$db = null;
try
{
	global $db;
	$db = new PDO("mysql:host=$hostname;dbname=$dbname", $dbusername, $dbpassword);
}
catch(PDOException $e)
{
	print $e->getMessage();
}

?>