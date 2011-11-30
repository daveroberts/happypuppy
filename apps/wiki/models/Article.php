<?php

namespace wiki;
class Article extends \HappyPuppy\Model
{
	function __construct(){
		parent::__construct();
	}

	public function save()
	{
		$this->slug = sluggable($this->name);
		return parent::save();
	}

	public function getHTML()
	{
		$html = $this->body;
		$html = $this->makeWikiLinks($html);
		$html = markdown($html);
		return $html;
	}

	private function makeWikiLinks($text)
	{
		$pattern = '/\[\[(.*?)\]\]/';
		$matches = array();
		preg_match_all($pattern, $text, $matches);
		$links = array();
		$html = $text;
		foreach($matches[1] as $key=>$match)
		{
			$link_text = trim($match);
			$link_url = trim($match);
			$pipe_pos = strpos($match, "|");
			if ($pipe_pos)
			{
				$link_text = trim(substr($match, 0, $pipe_pos));
				$link_url = trim(substr($match, $pipe_pos + 1));
			}
			$html = str_replace($matches[0][$key], \link_to($link_text, "/article/show/".sluggable($link_url)."?name=".$link_text), $html);
		}
		return $html;
	}

	public function __get($name)
	{
		if (strcmp($name, "slug") == 0)
		{
			return sluggable($this->name);
		}
		return parent::__get($name);
	}

	public function bless($current_user, $action, &$reason)
	{
		if (strcmp($action, 'change') == 0)
		{
			if (!logged_in())
			{
				$reason = "You are not logged in";
				return false;
			}
			return true;
		}
	}
	
	public function authorize($current_user, $action, &$reason)
	{
		return $this->bless($current_user, $action, $reason);
	}
}

function sluggable($text)
{
	// replace non letter or digits by -
	$text = preg_replace('~[^\\pL\d]+~u', '-', $text);

	// trim
	$text = trim($text, '-');

	// transliterate
	if (function_exists('iconv'))
	{
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	}

	// lowercase
	$text = strtolower($text);

	// remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);

	if (empty($text))
	{
		var_dump(debug_backtrace()); exit();
		return 'n-a';
	}

	return $text;
}

?>
