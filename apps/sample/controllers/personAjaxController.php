<?php

namespace sample;
class personAjaxController extends \HappyPuppy\Controller
{
	public function defaultAction(){ return "list"; }
	// list and new are keywords in php, so we append an underscore
	public function _list()
	{
		$this->new_person = new person();
		$this->people = person::getAll();
		$this->people = array_slice($this->people, 0, 10);
		switch ($this->responds_to)
		{
			case "xml":
				header("Content-type: text/xml"); 
				$this->renderText(\XMLlib::toXML("people", $this->people));
				break;
			case "json":
				$this->renderText(json_encode($this->people));
				break;
		}
	}
	public function _new()
	{
		switch ($this->responds_to)
		{
			case "ajax":
				$this->layout = false;
				//xxx$this->view_template = $_ENV["app"]->root().'views/personAjax/new.ajax.php';
				break;
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
		switch ($this->responds_to)
		{
			case "ajax":
				// perhaps the ajax view would be more detailed
				// you can pull in additional info needed for the ajax view here
				$this->person->college = 'Miami University';
				$this->person->major = 'Systems Analysis';
				$this->person->note = 'Decided on a major for seven years';
				$this->layout = false;
				$this->view_template = 'personAjax/show.ajax';
				break;
			case "xml":
				header("Content-type: text/xml"); 
				$this->renderText(XMLlib::objToXML($this->person));
				break;
			case "json":
				header('Content-Type: text/plain'); // plain text file
				$this->renderText(json_encode($this->person));
				break;
		}
	}
	public function destroy()
	{
		switch ($this->responds_to)
		{
			case "ajax":
				// simulates a failed call 50% of the time
				$this->result = rand(0,1);
				$this->layout = false;
				if ($this->result == 1)
				{
					$this->renderText($this->result."Destroy suceeded!");
				}
				else
				{
					$this->renderText($this->result."Destroy randomly fails 50% of the time for demonstration purposes");
				}
				break;
			default:
				setflash("Dummy destroy method called (#".$_GET['id'].")");
				$this->redirect("/person/list");
		}
	}
	public function edit($id)
	{
		$this->person = person::getFakePerson();
		$this->person->id = $id;
		switch ($this->responds_to)
		{
			case "ajax":
				$this->layout = false;
				//xxx$this->view_template = $_ENV["app"]->root().'views/personAjax/edit.ajax.php';
			break;
		}
	}
	public function update()
	{
		$this->person = new person($_POST["person"]);
		$this->person->name = $this->person->name."*";
		switch ($this->responds_to)
		{
			case "ajax":
				// sometimes updates aren't successful.
				// Perhaps the user forgot to fill out a field
				// This update function succeeds 50% of the time.
				$this->result = rand(0,1);
				$this->layout = false;
				if ($this->result == 1)
				{
					//xxx$this->view_template = $_ENV["app"]->root().'views/personAjax/update.success.php';
				}
				else
				{
					$this->renderText($this->result."Update randomly fails 50% of the time for demonstration purposes");
				}
				break;
			default:
				$x = $_POST;
				setflash("Dummy update method called (#".$_POST['person']['id'].")");
				$this->redirectTo('/personAjax/list');
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
