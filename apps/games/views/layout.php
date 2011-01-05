<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
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
<h1>Yeah</h1>
<div id='content'>
<div id="flash" style="display:none;"><?php echo getflash() ?></div>
<?php echo $content?>
</div>
</div>
</body>
</html>
