<?

// A good place for database settings
/*$hostname   = 'mysqlproccess.db';
$dbname     = 'simplebudget';
$dbusername = 'simplebudget';
$dbpassword = 'dbDxxxNA';*/
$hostname   = 'localhost';
$dbname     = 'violations';
$dbusername = 'violations';
$dbpassword = 'violations';
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