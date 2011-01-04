<?php

namespace sample;
class personController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	// list and new are keywords in php, so we append an underscore
	public function _list()
	{
		$this->people = person::getAll();
	}
	public function create()
	{
		setflash("Dummy create method called (".$_POST['person']['name'].")");
		$this->redirect('/person/list');
	}
	public function show($id)
	{
		// $this->person = person::get($id);
		$this->person = person::getFakePerson();
	}
	public function destroy($id)
	{
		setflash("Dummy destroy method called (#".$id.")");
		$this->redirectToAction("list");
	}
	public function edit($id)
	{
		// $this->person = person::get($id);
		$this->person = array('id'=>$id, 'name'=>'Fake Person'.' '.$id);
		$this->f = new \HappyPuppy\form($this->person);
	}
	public function update()
	{
		setflash("Dummy update method called (#".$_POST['person']['id'].")");
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
