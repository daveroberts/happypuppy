<?

namespace wiki;

function logged_in()
{
	return current_user() != null;
}

function current_user()
{
	global $current_user;
	if ($current_user != null){ return $current_user; }
	if (isset($_SESSION['account_id']))
	{
		$current_user = Account::Get($_SESSION['account_id']);
		return $current_user;
	}
	return null;
}

function can($action, $object=null, &$reason="")
{
	$current_user = current_user();
	if (is_string($object))
	{
		$classname = $object;
		$klass = \HappyPuppy\Inflector::singular($classname);
		$klass = ucwords($klass);
		$klass = __NAMESPACE__ . '\\' . $klass;
		$obj = new $klass();
		if (!method_exists($obj, "bless"))
		{
			throw new \Exception("bless not defined for ".$object);
		}
		$result = $obj->bless($current_user, $action, $reason);
		if ($result === null)
		{
			throw new \Exception("No permissions defined in bless for ".$action." on ".$object);
		}
		return $result;
	}
	else if ($object != null)
	{
		if (!method_exists($object, "authorize"))
		{
			throw new Exception("No authorize method in ".get_class($object)." (need to add action ".$action.")");
		}
		$result = $object->authorize($current_user, $action, $reason);
		if ($result === null)
		{
			throw new Exception("No permissions defined in authorize for ".$action." on ".get_class($object));
		}
		return $result;
	}
	else if ($object == null)
	{
		// this is probably an error
		throw new Exception("You're trying to \"".$action."\" on a null object");
	}
	else
	{
		// these don't depend on an object
		throw new Exception("No rules yet defined for: ".$action);
	}
	return false;
}

function cant($action, $object=null, &$reason="")
{
	return !can($action, $object, $reason);
}
