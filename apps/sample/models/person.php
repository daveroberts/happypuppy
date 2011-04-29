<?php

namespace sample;
class Person // normally would extend \HappyPuppy\Model, but we're faking the db stuff for now
{
	// You normally don't need to define your db fields
	// they are filled in automatically by HappyPuppy
	var $id;
	var $name;
	var $college;
	var $major;
	var $note;

	function __construct($params = array())
	{
		$this->id = $params['id'];
		$this->name = $params['name'];
	}
	public static function GetFakePerson($id)
	{
		$people = self::All();
		$p = new person(array('id'=>$id, "name"=>"Fake Person #".$id));
		foreach($people as $person){
			if ($person->id == $id){
				$p = $person;
				break;
			}
		}
		$p->college = "The State University";
		$p->major = "Political Computer Science";
		$p->note = "Maintained a 3.5 GPA";
		return $p;
	}
	public static function All()
	{
		return array(
			new Person(array('id'=>1, "name"=>"Aiden")),
			new Person(array('id'=>2, "name"=>"Jacob")),
			new Person(array('id'=>3, "name"=>"Michael")),
			new Person(array('id'=>4, "name"=>"Christopher")),
			new Person(array('id'=>5, "name"=>"Ethan")),
			new Person(array('id'=>12, "name"=>"Tiago")),
			new Person(array('id'=>15, "name"=>"Ethan")),
			new Person(array('id'=>16, "name"=>"Derrick")),
			new Person(array('id'=>28, "name"=>"Robert")),
			new Person(array('id'=>31, "name"=>"Vin Diesel")),
		);
	}
}

?>
