<?php

namespace cool;
class accountController extends \HappyPuppy\Controller
{
	function __init(){}
	function hello()
	{
		$this->render_text("Hello World");
	}
}
?>
