<?

// A good place for database settings
$hostname   = 'mysqlproccess.db';
//$hostname   = 'localhost';
$dbname     = 'lol';
$dbusername = 'lol';
$dbpassword = 'ahj3knkzidpt44iqcsxulzrnm81vo8tz';
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