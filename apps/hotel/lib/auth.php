<?

function current_user()
{
	global $current_user;
	if ($current_user != null){ return $current_user; }
	if (isset($_SESSION['account_id']))
	{
		$current_user = \hotel\Account::Get($_SESSION['account_id']);
		return $current_user;
	}
	return null;
}
