<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<title><?= $title ?></title>
	<script type="text/javascript" src="/js/dragtable.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-1.8.2.custom.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/budget/css/base.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/budget/css/style.css" />
	<link type="text/css" href="/css/custom-theme/jquery-ui-1.8.2.custom.css" rel="stylesheet" />	
	<script type="text/javascript">
		$(document).ready(function(){
			$('.datepicker').datepicker();
		});
	</script>
	<? $topcolor = "#F0F5FF"; ?>
	<style type="text/css">
		.tabularData { border-collapse: collapse;}
		.tabularData th { padding: 10px; border: 1px solid black; }
		.tabularData td { padding: 10px; border: 1px solid black; }
		
		.highlightRow { cursor: pointer; }
		#top{ background-color: <?=$topcolor?>; }
		#topNav{ border-top: 3px solid black; }
		#topNav ul { margin: 0; list-style-type: none; }
		#topNav ul li{ display: inline; list-style-type: none; }
		#topNav ul li a{ font-weight: bold; color: black; background-color: <?=$topcolor?>; position: relative; top: 5px; padding: 5px; border-left: 3px solid black; border-right: 3px solid black; border-bottom: 3px solid black; border-top: 3px solid <?=$topcolor?>; margin-left: 0.5em; -moz-border-bottom-left-radius: 10px; border-bottom-left-radius: 10px; -moz-border-bottom-right-radius: 10px; border-bottom-right-radius: 10px; }
		#topNav ul li a:hover{ text-decoration: none; }
		
		#content{ margin: 30px 10px 10px 10px; }
	</style>
	<?=$head?>
</head>
<body>
<div>
	<h1 id="top">Cets 3.7 Debug Menu</h1>
	<div id="topNav">
		<ul>
			<li><?=link_to("People", "/person")?></li>
			<li><?=link_to("Accounts", "/account/all")?></li>
			<li><?=link_to("Tags", "/tag")?></li>
		</ul>
	</div>
</div>
<div id="content">
	<? if (isset($flash)) { ?>
		<div id="flash"><?=$flash?></div>
	<? } ?>
	<?=$content?>
</div>
</body>
</html>