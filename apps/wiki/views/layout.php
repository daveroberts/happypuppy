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
<div id='page'>
<h1>Wiki</h1>
<div id='content'>
<div id="flash" style="display:none;"><?php echo getflash() ?></div>
<?php echo $content?>
</div>
</div>
</body>
</html>
