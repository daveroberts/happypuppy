<?php

namespace sample;
class personAjaxController extends \HappyPuppy\Controller
{
	public function defaultAction(){ return "list"; }
	// list and new are keywords in php, so we append an underscore
	public function _list()
	{
		$this->new_person = new person();
		$this->people = Person::All();
		$this->people = array_slice($this->people, 0, 10);
		switch ($this->responds_to)
		{
			case "xml":
				$this->renderXML(\XMLlib::toXML("people", $this->people));
				break;
			case "json":
				$this->renderJSON(json_encode($this->people));
				break;
		}
	}
	public function _new()
	{
		if (isAjaxRequest()){
			$this->layout = false;
		}
	}
	public function create()
	{
	// collect POST variables here
	// save to database
	// redirect as appropriate
	/*$person = $_POST['person'];
	if (person::create($person))
	{
		setflash("Person created");
	}
	else
	{
		setflash("Could not create person");
	}*/
	setflash("Dummy create method called (".$_POST['person']['name'].")");
	$this->redirect('/personAjax/list');
	}
	public function show($id)
	{
		$this->person = person::getFakePerson();
		if (isAjaxRequest()){
			// perhaps the ajax view would be more detailed
			// you can pull in additional info needed for the ajax view here
			$this->person->name .= " - Retrieved w/ Ajax";
			$this->layout = false;
			$this->view_template = 'personAjax/show.ajax';
		}
		switch ($this->responds_to)
		{
			case "xml":
				$this->renderXML(XMLlib::objToXML($this->person));
				break;
			case "json":
				$this->renderJSON(json_encode($this->person));
				break;
		}
	}
	public function destroy()
	{
		// simulates a failed call 50% of the time
		$this->result = rand(0,1);
		if (isAjaxRequest()){
			$this->layout = false;
			if ($this->result == 1)
			{
				$this->renderText($this->result."Destroy suceeded!");
			}
			else
			{
				$this->renderText($this->result."Destroy randomly fails 50% of the time for demonstration purposes");
			}
		} else {
			setflash("Dummy destroy method called (#".$_GET['id'].")");
			$this->redirect("/person/list");
		}
	}
	public function edit($id)
	{
		$this->person = person::getFakePerson();
		$this->person->id = $id;
		if (isAjaxRequest()){
			$this->layout = false;
			$this->view_template = 'personAjax/edit.ajax';
			$this->person->name = $this->person->name." - Retrieved w/ Ajax";
		}
	}
	public function update()
	{
		// sometimes updates aren't successful.
		// Perhaps the user forgot to fill out a field
		// This update function succeeds 50% of the time.
		$this->result = rand(0,1);
		$this->person = new person($_POST["person"]);
		$this->person->name = $this->person->name."*";
		if (isAjaxRequest()){
			$this->layout = false;
			if ($this->result == 1){
				setflash("Dummy update method called (#".$_POST['person']['id'].")");
				$this->redirectTo('/personAjax/list');
			} else {
				$this->renderText($this->result."Update randomly fails 50% of the time for demonstration purposes");
			}
		}
	}
	public function searchby()
	{
		$userinput = $_POST['queryString']; // sanitize this please!!!
		$this->partial_matches = person::searchby($userinput);
		$this->layout = false;
	}
}

?>
