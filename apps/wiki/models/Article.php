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
}

function sluggable($str)
{
    $before = array('אבגדהועףפץצרטיךכנחלםמןשתûüס', '/[^a-z0-9\s]/',
        array('/\s/', '/--+/', '/---+/')
    );
 
    $after = array('aaaaaaooooooeeeeeciiiiuuuunsz', '', '-');
 
    // step by step

    $str = strtolower($str);                            // 1
    $str = strtr($str, $before[0], $after[0]);          // 2
    $str = preg_replace($before[1], $after[1], $str);   // 3
    $str = trim($str);                                  // 4
    $str = preg_replace($before[2], $after[2], $str);   // 5
 
    return $str;
}

?>