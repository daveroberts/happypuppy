<?

namespace blog;
/** So am I! */
class ArticleController extends \HappyPuppy\Controller
{
	function __init()
	{
		$this->defaultAction = "frontpage";
	}

	function frontpage()
	{
		$this->render_text("Welcome to the index page!");
	}
	
	/**
	* !Route GET, /$year/$month/$day/a/$slug
	*/
	function article($year, $month, $day, $slug)
	{
		$this->render_text("On $month $day, $year, this article was published $slug");
	}
	/**  
     * !Route GET, /hello/$first/$last 
     * */ 
	function greeting($first, $last)
	{
		$this->render_text("Well hello to you too $first $last!");
	}
	/**
		!Route GET, /news
		!Route GET, /currentevents
	*/
	function news()
	{
		$this->render_text("This is the news page");
	}
	function get($id)
	{
		/*$this->article = new \blog\Article();
		$this->article->id = $id;*/
	}
}
?>
