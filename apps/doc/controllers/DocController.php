<?php

namespace doc;
class DocController extends \HappyPuppy\Controller
{
	public function defaultAction(){ return "index"; }
	public function index(){}
	public function tableofcontents(){}
	/**  
     * !Route GET, /TestInstall
     * */ 
	public function test(){
		print("Your Happy Puppy installation appears to be working!\n");
		print("Your next step is to create your first application http://happypuppy.nfshost.com/Applications/Create");
		$this->text_only = true;
	}
}

?>