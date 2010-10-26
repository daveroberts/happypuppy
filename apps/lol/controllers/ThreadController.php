<?

namespace lol;
class ThreadController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	function _list()
	{
		$this->threads = Thread::All();
		switch ($this->responds_to)
		{
			case "txt":
			$this->text_only = true;
			$output = '';
			foreach($this->threads as $thread)
			{
				$output .= $thread->threadid.":".$thread->title.";";
			}
			if (strlen($output) > 1)
			{
				$output = substr($output, 0, strlen($output) - 1);
			}
			print($output);
			break;
		}
	}
	function create()
	{
		$thread = reset($_POST["thread"]);
		$result = Thread::AddThread($thread);
		if ($result){ print(1); } else { print(0); }
		$this->text_only = true;
	}
	function LastPageInDB()
	{
		$threadid = $_POST["threadid"];
		print(Thread::GetLastPageInDB($threadid));
		$this->text_only = true;
	}
	function show($threadid)
	{
		$this->thread = reset(Thread::Find(array("conditions"=>"threadid = $threadid")));
		$author = $this->thread->author;
		$this->page = 1;
		if ($_GET["page"] != null){ $this->page = $_GET["page"]; }
		$limit = 50; $offset = ($this->page-1) * $limit;
		$args = array("conditions"=>"threadid=".$threadid." AND (username='".$this->thread->author."' OR isred=1)", "order"=>"postnumber ASC");
		$this->total_posts = Post::Count($args);
		$this->posts = Post::Find(array_merge($args, array("limit"=>$limit, "offset"=>$offset)));
	}
}
?>