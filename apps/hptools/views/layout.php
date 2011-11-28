<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo $title?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
<?php echo css("style") ?>
<?php echo $head?>
</head>
<body>
	<div id="conteneur">
		<div id="header">Happy Puppy Tools</div>
		<div id="haut">
			<ul class="menuhaut">
				<li><?php echo link_to("Database Migrations", "/database")?></li>
				<li><?php echo link_to("Routes", "/routes")?></li>
			</ul>
		</div>

		<div id="centre">
			<?php if (hasflash()){ ?><div id="flashmessage" style="white-space: pre;"><?php echo getflash()?></div><?php } ?>
			<?php echo $content?>
		</div>
	</div>
</body>
</html>