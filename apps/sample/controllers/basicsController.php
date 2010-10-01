<?
namespace sample;
class basicsController extends \HappyPuppy\Controller
{
	//Notice we don't need an index function.  If it's blank don't even bother!
	function defaultAction(){ return "index"; }
	public function index(){}
	public function test(){}
	public function hello()
	{
		$this->render_text('Hello World - Simple text example');
	}
	public function simple()
	{
		$this->greeting = "Howdy";
	}
	// Passing arguments as part of the URL
	public function show($id)
	{
		$this->render_text("Showing ".$id."  Try changing the number 44 in the URL to the word test");
	}
	public function showboth($one, $two)
	{
		echo "Arg #1: ($one) Arg #2: ($two)";
		$this->text_only = true;
	}
	public function blog($year, $month, $day, $title)
	{
		$this->render_text("Year: $year Month: $month Day: $day Title: $title");
	}
	// redirection
	public function redir()
	{
		$this->redirect_to('/basics/error');
	}
	public function error()
	{
		$this->render_text("The link you clicked on was /basics/redir, but look at the url");
	}
	public function altview()
	{
		// Use a different view
		$this->view_template = 'basics/different';
	}
	public function altlayout()
	{
		// Use a different layout
		$this->layout_template = 'alternatelayout';
	}
	public function nolayout()
	{
		// or turn the layout off completely
		$this->layout = false;
	}
}
?>
