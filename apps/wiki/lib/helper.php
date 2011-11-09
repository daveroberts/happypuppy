<?php

function linkdown($str)
{
	$in_link = false;
	$tok = strtok($str, "[]");
	$out = "";

	while ($tok !== false)
	{
		if (!$in_link)
		{
			$out .= $tok;
		}
		else
		{
			$out .= link_to($tok, "/article/show/".$tok);
		}
		$in_link = !$in_link;
		$tok = strtok("[]");
	}
	return $out;
}