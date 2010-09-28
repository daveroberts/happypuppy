<?
namespace HappyPuppy;
require_once("config/config.php");
require_once("lib/all.php");
require_once("Router.php");
require_once("Cache.php");

function run()
{
	HappyPuppy::getInstance()->init();
	try { HappyPuppy::getInstance()->dispatch(); } catch (Exception $e)
	{
		header('HTTP/1.1 500 Internal Server Error');
		if ($_ENV['config']['debug_mode'])
		{
			print($e);
		}
		else
		{
			require($_ENV['docroot'].$_ENV['config']["static_error_page"]);
		}
		exit();
	}
}

class HappyPuppy
{
	static private $instance = NULL;

	function __construct()
	{
		if (isset($_GET['url']))
			$this->url =trim( $_GET['url'], '/');
		else $this->url = '';
	}
	
	function init()
	{
		if ($_ENV['config']["debug_mode"])
		{
			$provider = '\HappyPuppy\SqliteCacheProvider';
			Cache::reportsTo(new $provider);
		}
	}

	public function dispatch()
	{
		return $this->dispatch_to($this->url);
	}

	/* Process requests and dispatch */
	public function dispatch_to($url)
	{
		$route = Router::URLToRoute($url);
		if ($route != null)
		{
			Router::RunRoute($route, $url);
		}
		else
		{
			if ($_ENV['config']["debug_mode"])
			{
				require($_ENV['config']["route_not_found_page_debug"]);
			}
			else
			{
				require($_ENV['config']["route_not_found_page"]);
			}
			exit();
		}
	}

	/* Singleton */
	public function getInstance()
	{
		if(self::$instance == NULL)
		{
			self::$instance = new HappyPuppy();
		}
		return self::$instance;
	}
}

?>
