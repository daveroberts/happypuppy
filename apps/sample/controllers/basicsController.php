<?php
namespace sample;
class basicsController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "index"; }
	// Happy Puppy now requires you have a method for each corresponding route
	// even if it's empty
	public function index(){}
	public function hello()
	{
		$this->renderText('Hello World - Simple text example');
	}
	public function simple()
	{
		$this->greeting = "Howdy";
	}
	// Passing arguments as part of the URL
	public function show($id)
	{
		$this->renderText("Showing ".$id."  Try changing the number 44 in the URL to the word test");
	}
	public function showboth($one, $two)
	{
		echo "Arg #1: ($one) Arg #2: ($two)";
		$this->text_only = true;
	}
	/**
	* !Route GET, /$year/$month/$day/blog/$slug
	*/
	public function blog($year, $month, $day, $slug)
	{
		$this->renderText("Year: $year Month: $month Day: $day Title: $slug");
	}
	// redirection
	public function redir()
	{
		$this->redirectTo('/basics/error');
	}
	public function error()
	{
		$this->renderText("The link you clicked on was /basics/redir, but look at the url");
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