<html>
<head>
<title>Happy Puppy Debug Page</title>
<script language="javascript" type="text/javascript">
	if (self != top) {
		if (document.images)
			top.location.replace(window.location.href);
		else
			top.location.href = window.location.href;
	}
</script>
</head>
<frameset rows="200,*" border="0" framespacing="0">
	<frame name="menu" src="<?php echo $hpinfo_url ?>" marginheight="0" marginwidth="0" scrolling="auto" noresize>
	<frame name="content" src="<?php echo $actual_url ?>" marginheight="0" marginwidth="0" scrolling="auto" noresize>
</frameset>
</html>