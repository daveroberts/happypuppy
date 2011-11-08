<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title><?php if($title==""){?>Happy Puppy<?php }else{?><?php echo $title?><?php }?></title>
  <link rel="stylesheet" href="/sample/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/sample/css/positioning.css" type="text/css" />
  <link rel="stylesheet" href="/sample/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/doc/css/sh_style.css" type="text/css" />
  <script type="text/javascript" src="/sample/js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="/sample/js/jquery.json-2.2.min.js"></script>
  <script type="text/javascript" src="/sample/js/jquery.form.js"></script>
  <script type="text/javascript" src="/doc/js/sh_main.min.js"></script>
  <script type="text/javascript" src="/doc/js/sh_php.min.js"></script>
  <script type="text/javascript" src="/doc/js/sh_xml.min.js"></script>
  <script type="text/javascript" src="/doc/js/jquery.scrollTo-1.4.2-min.js"></script>
  <style type="text/css">
	.highlight{ background-color: #DD99FF; }
	.code{ font-family: monospace; }
  </style>
  <?php echo $head?>
</head>
<body onload="sh_highlightDocument();">
	<div id='page'>
		<h1>Happy Puppy</h1>
		<div id='sidebar'>
			<img src="/sample/happypuppy.jpg" alt="A very happy puppy" />
		</div>
		<div id='content'>
			<?php if (hasflash()){ ?><div id="flash"><?php echo getflash()?></div><?php }?>
			<div><?php echo link_to("Table of Contents", "/Doc/TableOfContents") ?></div>
			<?php echo $content?>
		</div>
	</div>
	</body>
</html>
