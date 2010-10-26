<?
namespace budget;

//require('/content/chart/php-ofc-library/open-flash-chart.php');
//require('/content/chart/gChart.php');

class budgetApplication extends \HappyPuppy\Application
{
	function defaultController(){ return "Person"; }
	
	public function __init()
	{
		$this->require_file('controllers/helper.php');
		$this->require_file('initdb.php'); // initialize the database.  Needed for ORM
		$this->title = "Simple Budget";
	}
}
?>