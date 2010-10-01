<?

// A good place for database settings
$hostname   = 'localhost';
$dbname     = '';
$dbusername = 'root';
$dbpassword = '';
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