<?php

namespace sample;
class AjaxCheckboxesController extends \HappyPuppy\Controller
{
	public function defaultAction(){ return "list"; }
	public function _list()
	{
		$this->initialOptions = array("red", "orange", "yellow", "green", "blue", "indigo", "violet");
	}
	public function NewOption(){}
	public function CreateOption()
	{
		$new_option = $_POST["option"];
		$options = array(11=>"red", 22=>"orange", 33=>"yellow", 44=>"green", 55=>"blue", 66=>"indigo", 77=>"violet");
		$success = false;
		$flash = '';
		if (substr(strtolower($new_option), 0, 1) >= 'a' && substr(strtolower($new_option), 0, 1) <= 'z'){
			$success = true;
			$flash = "New option added: ".$new_option;
			$options[30] = $new_option;
			asort($options);
		} else {
			$flash = "Could not add " . $new_option . ". Color must begin with a letter.";
		}
		if (isAjaxRequest()){
			$return = array('success'=>$success, flash=>$flash." Added with Ajax", 'new_option'=>$new_option, 'options'=>$options);
			$this->renderJSON(json_encode($return));
		} else {
			setflash($flash." Added without Ajax");
			$this->redirectToAction("dropdown");
		}
	}
}

?>
