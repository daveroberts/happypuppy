<?

function logged_in()
{
	return current_user() != null;
}

function can($action, $object=null, &$reason="")
{
	if (!function_exists("current_user"))
	{
		$error = "No method current_user found\n";
		$error .= "To use the authorization plugin, you must create a function, in the default namespace, called current_user()\n";
		$error .= "function current_user()\n";
		$error .= "    Return Value: an object of the current user, or null if user isn't logged in\n";
		throw new \Exception($error);
	}
	$current_user = current_user();
	if (is_string($object))
	{
		$classname = $object;
		$klass = \HappyPuppy\Inflector::singular($classname);
		$klass = ucwords($klass);
		//$klass = __NAMESPACE__ . '\\' . $klass;
		$klass = $_ENV["app"]->name . '\\' . $klass;
		if (!class_exists($klass))
		{
			throw new \Exception("Could not find class: ".$klass);
		}
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
			$error = "No authorize method in ".get_class($object)."\n";
			$error .= "Create method authorize in ".get_class($object)."\n";
			$error .= 'public function authorize($current_user, $action, &$reason)'."\n";
			$error .= '    param: $current_user: user logged into the system or null'."\n";
			$error .= '    param: $action: Action requested, in this case, it\'s "'.$action."\"\n";
			$error .= '    param: &$reason: If false, you may choose to add the reason the user was denied access here'."\n";
			$error .= '    Return Value: true if the user is authorized to perform the action ('.$action.')';
			throw new \Exception($error);
		}
		$result = $object->authorize($current_user, $action, $reason);
		if ($result === null)
		{
			throw new \Exception("No permissions defined in authorize for ".$action." on ".get_class($object));
		}
		return $result;
	}
	else if ($object == null)
	{
		// this is probably an error
		throw new \Exception("You're trying to \"".$action."\" on a null object");
	}
	else
	{
		// these don't depend on an object
		throw new \Exception("No rules yet defined for: ".$action);
	}
	return false;
}

function cant($action, $object=null, &$reason="")
{
	return !can($action, $object, $reason);
}

