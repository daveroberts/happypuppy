<?
namespace sample;
class sampleApplication extends \HappyPuppy\Application
{
	function defaultController(){ return "doc"; }
	// set variables here that are application wide
	// import libraries used in this application
	public function __init()
	{
		//xxxinclude_dir($_ENV["app"]->root().'views/helpers/*.php');
	}
}

?>