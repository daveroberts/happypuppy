<?

namespace lol;
class Thread extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("threads");
	}
	function __get($name){
		$value = parent::__get($name);
		if ($value != null || is_array($value)){ return $value; }
		if ($name == "author")
		{
			$sql = "select username from posts where threadid = ".addslashes($this->threadid)." AND postnumber=1";
			$db_result = \HappyPuppy\DB::query($sql);
			return reset(reset($db_result));
		}
	}
	static function AddThread($thread)
	{
		// check to see if thread exists
		$db_thread = Thread::Find(array("conditions"=>"threadid = ".$thread["threadid"]));
		$t = new Thread();
		if (count($db_thread) == 1)
		{
			$t = reset($db_thread);
		}
		$t->build($thread);
		return $t->save();
	}
	static function GetLastPageInDB($threadid)
	{
		$sql = "select max(page) from posts where threadid = ".addslashes($threadid);
		$db_result = \HappyPuppy\DB::query($sql);
		return reset(reset($db_result));
	}
}
?>