<?php

namespace sample;
class personController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	// list and new are keywords in php, so we append an underscore
	public function _list()
	{
		$this->people = person::All();
		// normally this would hit the database and bring back all rows in the person or people table.
		// the All method is defined in \HappyPuppy\model
		// but here, we're using a dummy method in the person class
	}
	public function _new()
	{
		$this->person = new Person();
		$this->f = new \HappyPuppy\form($this->person);
	}
	public function create()
	{
		setflash("Dummy create method called (".$_POST['person']['name'].")");
		$this->redirectTo('list');
	}
	public function show($id)
	{
		// $this->person = Person::Get($id); // to get from DB
		$this->person = Person::GetFakePerson($id);
	}
	public function destroy($id)
	{
		setflash("Dummy destroy method called (#".$id.")");
		$this->redirectToAction("list");
	}
	public function edit($id)
	{
		// $this->person = Person::Get($id); // to get from DB
		$this->person = Person::GetFakePerson($id);
		$this->f = new \HappyPuppy\form($this->person);
	}
	public function update()
	{
		setflash("Dummy update method called (".$_POST['person']['name'].")");
		$this->redirectTo("list");
	}
	public function searchby()
	{
		$userinput = $_POST['queryString']; // sanitize this please!!!
		$this->partial_matches = person::searchby($userinput);
		$this->layout = false;
	}
}

?>
