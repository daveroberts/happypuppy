<?
class Game
{
	var $id;
	var $name;
	var $system_id;
	var $note;
	
	function __construct($arr)
	{
		$this->id = $arr['id'];
		$this->name = $arr['name'];
		$this->system_id = $arr['system_id'];
		$this->note = $arr['note'];
	}

	public static function get($id)
	{
		$query = "SELECT * FROM Game g WHERE g.id=".addslashes($id);
		return new Game(DB::getRow($query));
	}
	
}
?>