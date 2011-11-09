<?php

namespace scratch;
class PersonController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }

	function _list()
	{
		$this->people = Person::All();
	}
	function _new()
	{
		$this->f = new \HappyPuppy\form(new Person());
	}
	function create()
	{
		$this->person = Person::BuildFromPost($_POST["Person"]);
		$success = $this->person->save($error);
		if ($success)
		{
			setflash("Person saved successfully");
			$this->redirectTo("list");
		}
		else
		{
			setflash("Could not save person");
			$this->f = new \HappyPuppy\form(new Person());
			$this->view_template = "person/new";
		}
	}
	function edit($person_id)
	{
		$this->person = Person::Get($person_id);
		$this->f = new \HappyPuppy\form($this->person);
	}
	function update()
	{
		$this->person = Person::BuildFromPost($_POST["Person"]);
		$success = $this->person->save($error);
		if ($success)
		{
			setflash("Person updated successfully");
			$this->redirectTo("list");
		}
		else
		{
			setflash("Could not update person");
			$this->view_template = "person/edit";
		}
	}
	function delete($person_id)
	{
		if (isset($_POST["Person"]["id"]))
		{
			$this->person = Person::Get($_POST["Person"]["id"]);
			$success = $this->person->destroy();
			if ($success)
			{
				setflash("Person removed successfully");
				$this->redirectTo("list");
			}
			else
			{
				setflash("Could not remove person");
				$this->f = new \HappyPuppy\form($this->person);
			}
		}
		else
		{
			$this->person = Person::Get($person_id);
			$this->f = new \HappyPuppy\form($this->person);
		}
	}
}

?>