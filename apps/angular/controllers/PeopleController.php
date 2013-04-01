<?php

namespace angular;

class PeopleController extends \HappyPuppy\ResourceController
{
	function _list()
	{
		// $this->people = Person::All();
		$this->renderJSON('[{"id":"6","name":"Dave"},{"id":"7","name":"Fred"}]');
	}
	function create()
	{
		//$this->person = Person::BuildFromPost($_POST["Person"]);
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
					//print('[{"one':'two'},{'three':'four'}]");
					break;
				case 'html':
					//setflash("Could not save person");
					//$this->f = new \HappyPuppy\form(new Person());
					//$this->view_template = "person/new";
					break;
			}
		}
	}
	function edit($person_id)
	{
		//$this->person = Person::Get($person_id);
		//$this->f = new \HappyPuppy\form($this->person);
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
	}
	function show($id)
	{
		switch (http_accept()) {
			case 'json':
				
				$this->renderJSON('{"id":"'.$id.'","name":"Dave"}');
				break;
			case 'html':
				$this->person = array('id'=>$id, 'name'=>'Dave');
				break;
		}
	}
}

?>