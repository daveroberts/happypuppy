<?
namespace violations;


class violationsApplication extends \HappyPuppy\Application
{
	function defaultController(){ return "Violation"; }
	public function __init()
	{
		//$this->require_file('controllers/helper.php');
		$this->require_file('initdb.php'); // initialize the database.  Needed for ORM
		$this->title = "Violations Demo";
	}
}
?>