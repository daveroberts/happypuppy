<?php

namespace doc;
class DocController extends \HappyPuppy\Controller
{
	public function defaultAction(){ return "index"; }
	public function index(){}
	/**  
     * !Route GET, /TestInstall
     * */ 
	public function test(){
		$this->render_text("Your Happy Puppy installation appears to be working!");
	}
}

?>