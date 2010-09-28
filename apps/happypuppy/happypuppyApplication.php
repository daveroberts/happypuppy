<?

class happypuppyApplication extends Application
{
	// set variables here that are application wide
	// import libraries used in this application
	public function __init()
	{
		$this->default_controller = "doc";
		//xxxinclude_dir($_ENV["app"]->root().'views/helpers/*.php');
	}
}

?>