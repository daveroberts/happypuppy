<?
namespace blog;
class blogApplication extends \HappyPuppy\Application
{
	// set variables here that are application wide
	// import libraries used in this application
	public function __init()
	{
		$this->defaultController = 'Article';
	}
}

?>