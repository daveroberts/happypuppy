<?

function col($amount)
{
	if ($amount < 0)
		return "red";
	else
		return "green";
}

function mon($amount)
{
	if ($amount < 10000 && $amount > -10000)
	{
		return '$'.number_format($amount, 2, '.', '');
	}
	else
	{
		return '$'.number_format($amount, 2, '.', ',');
	}
}
function cycle($first, $second)
{
	static $cycle_even_odd = 0;
	$cycle_even_odd++;
	$cycle_even_odd = $cycle_even_odd % 2;
	if ($cycle_even_odd == 0){ return $first; }
	return $second;
}
  
?>