<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Hotel</title>
	<?= js("jquery-1.7.1.min.js") ?>
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
	<?php if (logged_in()): ?>
		<span>Currently logged in as <?php echo current_user()->username?></span>
		<span><?php echo link_to("Log out", "/logout") ?></span>
	<?php else: ?>
		<span><?php echo link_to("Log in", "/login") ?></span>
	<?php endif; ?>
</div>
<div id='page'>
<div id='content'>
<div id="flash" style="display:none;"><?php echo getflash() ?></div>
<?php echo $content?>
</div>
</div>
</body>
</html>
