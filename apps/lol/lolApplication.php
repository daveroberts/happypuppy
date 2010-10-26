<?
namespace lol;
class lolApplication extends \HappyPuppy\Application
{
	function defaultController(){ return "thread"; }
	// set variables here that are application wide
	// import libraries used in this application
	public function __init()
	{
		$this->require_file('initdb.php'); // initialize the database.  Needed for ORM
	}
}

?>