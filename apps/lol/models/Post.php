<?

namespace lol;
class Post extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("posts");
	}
	function __get($name){
		$value = parent::__get($name);
		if ($value != null || is_array($value)){ return $value; }
		if ($name == "custom_value")
		{
		}
	}
	static function AddPost($post)
	{
		// check to see if post exists
		$db_post = Post::Find(array("conditions"=>"riotid = ".$post["riotid"]));
		$p = new Post();
		if (count($db_post) == 1)
		{
			$p = reset($db_post);
		}
		$p->build($post);
		$p->save();
	}
	static function GetLastPostOnPage($threadid, $page)
	{
		$sql = "select max(postnumber) from posts where threadid = ".addslashes($threadid)." AND page=".addslashes($page);
		$db_result = \HappyPuppy\DB::query($sql);
		return reset(reset($db_result));
	}
}
?>