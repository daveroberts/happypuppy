<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Database example</title>
	<script type="text/javascript" src="/sample/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/games/js/jquery.tablednd_0_5.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			// cool popup effect
			<?php if (hasflash()): ?>
			$('#flash').slideDown('slow');
			<?php endif; ?>
		});
	</script>
  <?php echo $head?>
</head>
<body>
<div style="text-align: right;">
	<?php if (\wiki\logged_in()): ?>
		<span>Currently logged in as <?php echo \wiki\current_user()->username?></span>
		<span><?php echo link_to("Log out", "/logout") ?></span>
	<?php else: ?>
		<span><?php echo link_to("Log in", "/login") ?></span>
	<?php endif; ?>
</div>
<div id='page'>
<h1>Wiki</h1>
<div id='content'>
<div id="flash" style="display:none;"><?php echo getflash() ?></div>
<div>
	<?= link_to("Article List", "/article/list") ?>
	<?= link_to("New Article", "/article/new") ?>
</div>
<?php echo $content?>
</div>
</div>
</body>
</html>
