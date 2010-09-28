<?php
namespace budget;
class PersonController extends \HappyPuppy\Controller
{
	function __init()
	{
		$this->defaultAction = "list";
	}
	function _list()
	{
		$this->title = "List of People";
		$this->people = Person::All('name');
		$this->new_person_form = new \HappyPuppy\form(new Person());
	}
	function edit($person_id)
	{
		$this->render_text("Editing person $person_id");
	}
	function _new()
	{
		$person = new Person();
		$person->buildFromForm($_POST["budget\\Person"]);
		$result = $person->save();
		$this->redirect_to_action("list");
	}
}
?>