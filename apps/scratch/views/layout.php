<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>Scratch Application</title>
		<?php echo $head?>
	</head>
	<body>
		<div id='page'>
			<h1>My Scratch Application</h1>
			<div id='content'>
				<?php if (hasflash()): ?>
					<div id="flash"><?php echo getflash() ?></div>
					<?php endif; ?>
				<?php echo $content?>
			</div>
		</div>
	</body>
</html>
