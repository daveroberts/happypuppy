<?php

namespace scratch;

class PeopleController extends \HappyPuppy\ResourceController
{
	function _list()
	{
		$this->people = Person::All();
	}
	function create()
	{
		$this->person = Person::BuildFromPost($_POST["Person"]);
		//$success = $this->person->save($error);
		$success = false;
		if ($success)
		{
			switch (http_accept()) {
				case 'json':
					// return 201: Created
					break;
				case 'html':
					setflash("Person saved successfully");
					$this->redirectTo("list");
					break;
			}
		}
		else
		{
			switch (http_accept()) {
				case 'json':
					header('HTTP/1.0 400 Bad Request', true, 400);
					
					break;
				case 'html':
					setflash("Could not save person");
					$this->f = new \HappyPuppy\form(new Person());
					$this->view_template = "person/new";
					break;
			}
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
	function show($id)
	{
		print("hi"); exit();//If-Modified-Since or If-Match
	}
}

?>