<?

namespace lol;
class PostController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	function upload()
	{
		$posts = $_POST["posts"];
		foreach($posts as $riotid=>$post)
		{
			$result = Post::AddPost($post);
		}
		print(count($posts));
		$this->text_only = true;
	}
	function GetLastPostOnPage()
	{
		print(Post::GetLastPostOnPage($_POST["threadid"], $_POST["pageid"]));
		$this->text_only = true;
	}
}
?>