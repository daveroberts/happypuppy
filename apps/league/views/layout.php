<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>League of Legends Survey</title>
	<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/quiz/js/jquery.tablednd_0_5.js"></script>
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
<div id='page'>
<h1>League of Legends Survey</h1>
<div id='content'>
<div style="text-align: right;">
	<?php if ($person != null): ?>
		<span>Logged in as: <?php echo $person->toString(); ?></span>
	<?php endif; ?>
	<span><?php echo link_to("Log in as a different user", "/login/login") ?></span>
</div>
<div id="flash" style="display:none;"><?php echo getflash() ?></div>
<?php echo $content?>
</div>
</div>
</body>
</html>
