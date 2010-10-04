<?php
namespace HappyPuppy;
require 'lib/PHPCache/phpcache.class.php';

$database = array(
	'type'  => 'sqlite',
	'name'  => 'aaasqlitecache.db',
	'table' => 'PHPCache'
);

\PHPCache::configure($database);

class Cache
{
	static function Get($variable)
	{
		$cache = \PHPCache::instance();
		return $cache->get($variable);
	}
	static function Set($variable, $value)
	{
		$cache = \PHPCache::instance();
		$cache->store($variable, $value, PHPCACHE_1_WEEK);
	}
}
?>